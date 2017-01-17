@extends('templates.base')
@section('title','contact')
@section('page','contact')
@section('message','mayday mayday')
@section('content')
  <div class="col-md-7 contact">
    <ul class="nav nav-tabs">
      <li ><a href="/index.php">Accueil</a></li>
      <li ><a href="/formation">Formations</a></li>
      <li ><a href="/competence">Compétences</a></li>
      <li ><a href="/projet">Projets</a></li>
      <li class="active"><a href="/contact">Contact</a></li>
    </ul>
    <ul class="nav nav-tabs" id="min-nav">
      <li ><a href="/index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
      <li ><a href="/formation"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a></li>
      <li ><a href="/competence"><i class="fa fa-tasks" aria-hidden="true"></i></a></li>
      <li ><a href="/projet"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></li>
      <li class="active"><a href="/contact"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
    </ul>
    <h2>Contact</h2>
@if (isset($validation))
  <h2>{{$validation}}</h2>
  @else
    <p>Des questions ? N'hésitez pas à me contacter ! Je serais ravi d'échanger avec vous.</p>
    {{ Form::open(['url' => '/contact/mail', "id" => "form"]) }}
        {{ Form::label('name', 'Nom :')}}
          {{ Form::text('name')}}<br>
          {{ Form::label('objet', 'Objet :')}}
          {{ Form::text('objet')}}<br>
          {{ Form::label('content', 'message :')}}
          {{ Form::textarea('content',null,array("rows" => 4))}}<br>
          {{ Form::image(asset('captcha.php'),null,array("id" => "captcha", "alt" => "CAPTCHA"))}}<br>
          {{ Form::text('captcha')}}
          {{ Form::label('captcha',isset($erreur) ? $erreur : 'copier les chiffres présents sur l\'image CAPTCHA')}}<br>
          {{ Form::submit('Envoyer')}}
    {{ Form::close() }}
@endif
<div class="space2"></div>
</div>
@endsection
