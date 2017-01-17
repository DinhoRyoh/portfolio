@extends('templates.base')
@section('title','Accueil')
@section('page','home')
@section('message','Bonne annee 2017')
@section('content')
  <div class="col-md-7">
    <ul class="nav nav-tabs">
      <li class="active"><a href="/index.php">Accueil</a></li>
      <li ><a href="/formation">Formations</a></li>
      <li ><a href="/competence">Compétences</a></li>
      <li ><a href="/projet">Projets</a></li>
      <li ><a href="/contact">Contact</a></li>
    </ul>
    <ul class="nav nav-tabs" id="min-nav">
      <li class="active"><a href="/index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
      <li ><a href="/formation"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a></li>
      <li ><a href="/competence"><i class="fa fa-tasks" aria-hidden="true"></i></a></li>
      <li ><a href="/projet"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></li>
      <li ><a href="/contact"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
    </ul>
<h2>Bienvenue sur mon Portfolio :  Développeur web et Mobile</h2>
<div class="space"></div>
<p>Je suis Dinh Nguyen,<br>Développeur Web & Mobile à Lyon <br>
Je suis diplômé d'un DUT informatique et je poursuis avec une formation sur le développement web et mobile.
Je suis actuellement à la recherche d'un emploi dans ce domaine et dans le développement d'applications.<br>
Ce portfolio a pour but de présenter mon parcours, mes projets et mes experiences.</p>
<div class="space"></div>
</div>
<div class="col-md-4 map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.2129419628427!2d4.906797851480422!3d45.786961479003615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4c06578cdc1d7%3A0xb1a155b103f7930d!2s16+Rue+des+Groli%C3%A8res%2C+69120+Vaulx-en-Velin!5e0!3m2!1sen!2sfr!4v1484393582412" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
<div class="info">
  <p>Informations utiles :<br></p>
  <span><i style="color:lightpink" class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;06 13 75 59 71</span><br>
  <span><i style="color:blue" class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;dyner@hotmail.fr</span>
</div>
</div>
@endsection
