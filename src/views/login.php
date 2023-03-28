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
  <link rel="stylesheet" href="assets/css/login.css">
  <title>In N' Out</title>
</head>
<body>
  <form class="form-login" action="#" method="post">
    <div class="login-card card">
      <div class="card-header">
        <i class="icofont-travelling mr-2"></i>
        <span class="font-weight-light">In </span>
        <span class="font-weight-bold mx-2">N'</span>
        <span class="font-weight-light">Out</span>
        <i class="icofont-runner-alt-1 ml-2"></i>
      </div>
      <div class="card-body">
        <?php include(TEMPLATE_PATH . '/messages.php') ?>
        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="email" id="email" name="email" value="rodrigoganchieta@gmail.com" class="form-control
            <?= $errors['email'] ? 'is-invalid' : '' ?>" placeholder="Informe o e-mail" autofocus>
          <div class="invalid-feedback"><?= $errors['email'] ?></div>
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" id="password" name="password" value="123456" class="form-control
              <?= $errors['password'] ? 'is-invalid' : '' ?>" placeholder="Informe a senha">
            <div class="invalid-feedback"><?= $errors['password'] ?></div>
        </div>
      </div>
      <div class="card-footer">
        <button class="btn btn-lg btn-primary">Entrar</button>
      </div>
    </div>
  </form>
</body>
</html>
