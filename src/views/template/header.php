<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="author" content="Rodrigo Anchieta"/>
  <meta name="copyright" content="Rodrigo Anchieta"/>
  <meta name="contact" content="rodrigoganchieta@gmail.com"/>
	<meta name="robots" content="all"/>
	<meta name="googlebot" content="all"/>
	<meta name="robots" content="index,follow"/>
	<meta name="googlebot" content="index,follow"/>
	<meta name="distribution" content="global"/>
	<meta name="rating" content="general"/>
	<meta name="rating" content="safe for kids"/>
	<meta name="classification" content="Sites">

  <meta name="description" content="PHP 7 Completo - Curso do Desenvolvedor Web + Projetos criado pela COD3R, aluno Rodrigo Anchieta">
	<meta name="abstract" content="PHP 7 Completo - Curso do Desenvolvedor Web + Projetos criado pela COD3R, aluno Rodrigo Anchieta">
	<meta name="keywords" content="PHP 7 Completo, desenvolvedor back-end, Rodrigo Anchieta, rodrigoganchieta, Rodrigo Gonçalves de Anchieta">
	<link rel="shortcut icon" type="image/x-icon" href="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

  <link rel="stylesheet" href="assets/css/fonts.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/icofont.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>In N' Out</title>
</head>
<body>
  <header class="header">
    <div class="logo">
      <i class="icofont-travelling mr-2"></i>
      <span class="font-weight-light">In </span>
      <span class="font-weight-bold mx-2">N'</span>
      <span class="font-weight-light">Out</span>
      <i class="icofont-runner-alt-1 ml-2"></i>
    </div>
    <div class="menu-toggle mx-3">
      <i class="icofont-navigation-menu"></i>
    </div>
    <div class="spacer"></div>
    <div class="dropdown">
      <div class="dropdown-button">
        <img class="avatar" src="<?= "http://www.gravatar.com/avatar.php?gravatar_id=".md5(strtolower(trim($_SESSION['user']->email))) ?>" alt="user">
        <span class="ml-3"><?= $_SESSION['user']->name ?></span>
        <i class="icofont-simple-down mx-2"></i>
      </div>
      <div class="dropdown-content">
        <ul class="nav-list">
          <li class="nav-item">
            <a href="javascript:void(0)" onclick="sair();"><i class="icofont-logout mr-2"></i>Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </header>
