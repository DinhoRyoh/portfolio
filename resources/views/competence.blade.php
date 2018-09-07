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
      <section class="percentage-bar bar1" data-percent="80%">
        <div class="title"><span>Javascript</span></div>
        <div class="bar"></div>
        <div class="percent">80%</div>
      </section>
      <section class="percentage-bar bar2" data-percent="60%">
        <div class="title"><span>PHP</span></div>
        <div class="bar"></div>
        <div class="percent">60%</div>
      </section>
      <section class="percentage-bar bar3" data-percent="75%">
        <div class="title"><span>CSS</span></div>
        <div class="bar"></div>
        <div class="percent">75%</div>
      </section>
      <section class="percentage-bar bar4" data-percent="65%">
        <div class="title"><span>C, C++, Java</span></div>
        <div class="bar"></div>
        <div class="percent">65%</div>
      </section>
      <section class="percentage-bar bar5" data-percent="80%">
        <div class="title"><span>HTML</span></div>
        <div class="bar"></div>
        <div class="percent">80%</div>
      </section>
      <section class="percentage-bar bar6" data-percent="40%">
        <div class="title"><span>Wordpress</span></div>
        <div class="bar"></div>
        <div class="percent">40%</div>
      </section>
      <section class="percentage-bar bar7" data-percent="85%">
        <div class="title"><span>GIT</span></div>
        <div class="bar"></div>
        <div class="percent">85%</div>
      </section>
      <section class="percentage-bar bar8" data-percent="90%">
        <div class="title"><span>Laravel</span></div>
        <div class="bar"></div>
        <div class="percent">90%</div>
      </section>
      <section class="percentage-bar bar9" data-percent="50%">
        <div class="title"><span>Electron</span></div>
        <div class="bar"></div>
        <div class="percent">50%</div>
      </section>
    </div>
    <p>Mes caractéristiques ont forte chance de progresser si je réussi le donjon des développeur Full Stack.</p>
 </div>
 <div class="col-md-4 futurProjet">
   <div class="wrapperProfil">
     <div style="float:left; margin-top:-30px;">
       <h2 style="color:orange">Dinho Ryoh</h2>
       <img src="{{asset('css/image/profil.png')}}" alt="Photo de Bobby">
     </div>
     <div style=" float:right;text-align:right">
       <p>guerrier du crépuscule</p>
       <p>Level : 120</p>
       <hr>
       <p>HP : 8952</p>
       <p>PM : 980</p>
     </div>
   </div>
 </div>
@endsection
