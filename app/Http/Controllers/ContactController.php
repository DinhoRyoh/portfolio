<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Form;
use Mail;
use User;
use Mailgun\Mailgun;
class ContactController extends Controller
{

    public function index()
    {
        return view('/contact');
    }
    public function send(Request $request){
      $title = $request->name;
      $subject = $request->objet;
      $content = $request->content;
      session_start();
      if($request->captcha != $_SESSION['digit']){
        session_destroy();
        return view('/contact',["erreur" =>"désolé, mais vous avez écris un mauvais CAPTCHA, veuillez réessayer"]);
      }


      Mail::send('/sent', ['title' => $title,'subject' => $subject, 'content' => $content], function ($message) use($title,$subject,$content)
      {
          $message->from('laravel@MailGun.com', $title);
          $message->to('dyner@hotmail.Fr');
          $message->subject($subject);
      });
       return view('/contact',["validation" =>"Mail envoyé avec succès, je vous répondrai avec plaisir et cela au plus vite."]);
    }
}
