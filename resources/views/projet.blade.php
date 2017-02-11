@extends('templates.base')
@section('title','projet')
@section('page','projet')
@section('message','top secret')
@section('content')
  <div class="col-md-7">
    <ul class="nav nav-tabs">
      <li ><a href="/index.php">Accueil</a></li>
      <li ><a href="/formation">Formations</a></li>
      <li ><a href="/competence">Compétences</a></li>
      <li class="active"><a href="/projet">Projets</a></li>
      <li ><a href="/contact">Contact</a></li>
    </ul>
    <ul class="nav nav-tabs" id="min-nav">
      <li ><a href="/index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
      <li ><a href="/formation"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a></li>
      <li ><a href="/competence"><i class="fa fa-tasks" aria-hidden="true"></i></a></li>
      <li class="active"><a href="/projet"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></li>
      <li ><a href="/contact"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
    </ul>
    <ul class="nav nav-tabs" id="tabbed">
      <li class="active"><a data-toggle="tab" href="#HOMEPROJECT">HOME PROJECT</a></li>
      <li><a data-toggle="tab" href="#GAME">GAME</a></li>
      <li><a data-toggle="tab" href="#SITE">SITE</a></li>
      <li><a data-toggle="tab" href="#ELECTRON">ELECTRON</a></li>
    </ul>

    <div class="tab-content">
      <div id="HOMEPROJECT" class="tab-pane fade in active">
          <p><br><br>La formation CARED nous a ordonné de faire une intégration d'images durant notre semaine d'home project.<br><br>Durant une semaine, tous les stagiaires devaient reproduire les images en pages fonctionnelles. Comme c'était la première fois pour moi, j'ai pris un peu plus de temps dans le développement et je n'ai pas pu finir à temps.<br><br></p>
          <div class="col-md-6">
            <p>image à integrer</p>
            <img src="{{asset('css/image/Home.png')}}" alt="home">
          </div>
          <div class="col-md-6">
            <p>résultat de l'intégration</p>
            <img src="{{asset('css/image/capture1.png')}}" alt="home">
            <img src="{{asset('css/image/capture2.png')}}" alt="home">
            <img src="{{asset('css/image/capture3.png')}}" alt="home">
            <img src="{{asset('css/image/capture4.png')}}" alt="home">
            <img src="{{asset('css/image/capture6.png')}}" alt="home">
            <img src="{{asset('css/image/capture7.png')}}" alt="home">
          </div>
      </div>
      <div id="GAME"  class="tab-pane fade">
          <p><br><br>La formation CARED nous a donné l'opportunité de créer un jeu basique mais carrément cool.<br><br>J'ai pu faire un gameplay assez basique en une journée, le jeu reprend l'histoire de <em style="color:yellow">The legend of zelda: Ocarina of time</em>, quand Link n'est encore qu'un enfant.<br><br><em style="color: green">Note: Je n'ai aucun droit sur la license donc je ne met pas le jeu en ligne.</em></p>
          <img src="{{asset('css/image/capture1zelda.png')}}" alt="capture1">
          <img src="{{asset('css/image/capture2zelda.png')}}" alt="capture2">
          <img src="{{asset('css/image/capture3zelda.png')}}" alt="capture3">
          <img src="{{asset('css/image/capture4zelda.png')}}" alt="capture4">
          <img src="{{asset('css/image/capture6zelda.png')}}" alt="capturedarklink" style="width:705px; height: auto;">
      </div>
      <div id="SITE" class="tab-pane fade">
          <p><br><br>La formation CARED et le portfolio.<br><br>Dans la formation, il nous est demandé de faire un portfolio évalué portant sur le stagiaire.<br><br>Vous etes en ce moment même sur la V2 ! Cependant, je vais vous montrer l'ancienne version de mon portfolio.</p>
          <br><br>
          <h3>Version 1</h3>
          <img src="{{asset('css/image/capture1portfolio.png')}}" alt="capture1">
          <img src="{{asset('css/image/capture2portfolio.png')}}" alt="capture2">
          <img src="{{asset('css/image/capture3portfolio.png')}}" alt="capture3">
          <img src="{{asset('css/image/capture4portfolio.png')}}" alt="capture4">
          <img src="{{asset('css/image/capture5portfolio.png')}}" alt="capturedarklink">
      </div>
      <div id="ELECTRON" class="tab-pane fade">
          <p><br><br>La formation CARED nous à encore donné l'occasion de travailler sur un projet de notre choix.<br><br>La contrainte imposée était de travailler sur Electron.<br>C'est un outil très sympa qui m'à permis de faire ce travail.<br>J'ai éssayé de faire un jeu portant sur l'univers de <em style="color: yellow">League of Legends</em> en version RPG.<br>Malheureusement, par manque de temps <em style="color: green">(5 jours)</em>, je n'ai pas pu finir ce projet.</p>
          <br><br>
          <img style="width:100%" src="{{asset('css/image/electron-start.gif')}}" alt="title">
          <img style="width:100%" src="{{asset('css/image/electron-menu.png')}}" alt="menu">
          <img style="width:100%" src="{{asset('css/image/electron-options.png')}}" alt="options">
          <img style="width:100%" src="{{asset('css/image/electron-pick.gif')}}" alt="pick">
          <img style="width:100%" src="{{asset('css/image/electron-storytale.gif')}}" alt="storyline">
          <img style="width:100%" src="{{asset('css/image/electron-exit.png')}}" alt="exit">
      </div>
    </div>
 </div>
 <div class="col-md-4 futurProjet">
 <h2 style="color:orange">Futurs projets :</h2>
 <ul>
   <li><span>Ajouter la fonction multi-langage à mon portfolio</span></li>
   <li><span>bâtir une maison en diamant sur minecraft</span></li>
   <li><span>nettoyer mon bureau</span></li>
   <li><span>boire un cafe</span></li>
   <li><span>terminer mario</span></li>
   <li><span>regarder The Big Bang Theory</span></li>
 </ul>
 </div>

@endsection
