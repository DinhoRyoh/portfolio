@extends('templates.base')
@section('title','Compétence')
@section('page','competence')
@section('message','Caracteristiques')
@section('content')
  <div class="col-md-7">
    <ul class="nav nav-tabs">
      <li ><a href="/index.php">Accueil</a></li>
      <li ><a href="/formation">Formations</a></li>
      <li class="active"><a href="/competence">Compétences</a></li>
      <li ><a href="/projet">Projets</a></li>
      <li ><a href="/contact">Contact</a></li>
    </ul>
    <ul class="nav nav-tabs" id="min-nav">
      <li ><a href="/index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
      <li ><a href="/formation"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a></li>
      <li class="active"><a href="/competence"><i class="fa fa-tasks" aria-hidden="true"></i></a></li>
      <li ><a href="/projet"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></li>
      <li ><a href="/contact"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
    </ul>
    <h2>Mes compétences</h2>
    <div class="wrapper">
      <section class="percentage-bar bar1" data-percent="35%">
        <div class="title"><span>Javascript</span></div>
        <div class="bar"></div>
        <div class="percent">35%</div>
      </section>
      <section class="percentage-bar bar2" data-percent="50%">
        <div class="title"><span>PHP</span></div>
        <div class="bar"></div>
        <div class="percent">50%</div>
      </section>
      <section class="percentage-bar bar3" data-percent="55%">
        <div class="title"><span>CSS</span></div>
        <div class="bar"></div>
        <div class="percent">55%</div>
      </section>
      <section class="percentage-bar bar4" data-percent="45%">
        <div class="title"><span>C, C++, Java</span></div>
        <div class="bar"></div>
        <div class="percent">45%</div>
      </section>
      <section class="percentage-bar bar5" data-percent="55%">
        <div class="title"><span>HTML</span></div>
        <div class="bar"></div>
        <div class="percent">55%</div>
      </section>
      <section class="percentage-bar bar6" data-percent="30%">
        <div class="title"><span>Wordpress</span></div>
        <div class="bar"></div>
        <div class="percent">30%</div>
      </section>
      <section class="percentage-bar bar7" data-percent="50%">
        <div class="title"><span>GIT</span></div>
        <div class="bar"></div>
        <div class="percent">50%</div>
      </section>
      <section class="percentage-bar bar8" data-percent="35%">
        <div class="title"><span>Laravel</span></div>
        <div class="bar"></div>
        <div class="percent">35%</div>
      </section>
    </div>
    <p>Durant la formation à l'IT-Akademy, j'ai acquéri plusieurs compétences dont plusieurs cités au dessus.<br>La formation n'a pas encore abouti, il y a donc une forte chance que j'ajoute d'autres compétences au fur et à mesure.</p>
 </div>
 <div class="col-md-4 futurProjet">
   <div class="wrapperProfil">
     <div style="float:left; margin-top:-30px;">
       <h2 style="color:orange">Bobby</h2>
       <img src="{{asset('css/image/profil.png')}}" alt="Photo de Bobby">
     </div>
     <div style=" float:right;text-align:right">
       <p>guerrier du crépuscule</p>
       <p>Level :50</p>
       <hr>
       <p>HP : 547</p>
       <p>PM : 246</p>
     </div>

   </div>

 </div>
@endsection
