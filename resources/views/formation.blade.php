@extends('templates.base')
@section('title','Formation')
@section('page','formation')
@section('message','Entrainement')
@section('content')
  <div class="col-md-7">
    <ul class="nav nav-tabs">
      <li ><a href="/index.php">Accueil</a></li>
      <li class="active"><a href="/formation">Formations</a></li>
      <li ><a href="/competence">Compétences</a></li>
      <li ><a href="/projet">Projets</a></li>
      <li ><a href="/contact">Contact</a></li>
    </ul>
    <ul class="nav nav-tabs" id="min-nav">
      <li ><a href="/index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
      <li class="active"><a href="/formation"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a></li>
      <li ><a href="/competence"><i class="fa fa-tasks" aria-hidden="true"></i></a></li>
      <li ><a href="/projet"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></li>
      <li ><a href="/contact"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
    </ul>
    <h2>Mes Formations</h2>
    <h3 ><a style="color:#3ebc53" href="http://www.it-akademy.fr/presentation-it-akademy-lyon" target="_blank" title="IT Akademy">It-Akademy CARED: déveploppeur web et mobile</a></h3>
    <p>Formation en cours à Villeurbanne, durant la formation j'ai fais quelques projets,
      je suis fier de vous les présenter : <a href="/projet">ici</a></p>
    <h3 ><a style="color:#bcb43e" href="http://iut.univ-lyon1.fr/presentation/" target="_blank" title="DUT Infomartique">DUT informatique</a></h3>
    <p>Diplôme obtenu à Lyon 1, cette formation m'a appri à réaliser,
       maintenir des logiciels, gérer des projets de développement informatique et garantir
        le bon fonctionnement des réseaux.</p>
    <h3 ><a style="color:#bc573e" href="http://lycee-robert-doisneau.fr/" target="_blank" title="lycée Robert Doisneau">Baccalauréat Scientifique option Sciences de l'Ingénieur</a></h3>
    <p>Diplôme obtenu au Lycée Robert Doisneau à Vaulx en Velin.</p>
 </div>
@endsection
