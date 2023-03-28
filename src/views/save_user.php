<main class="content">
  <?php
    renderTitle(
      'Cadastro de Usuário',
      'Crie e atualize o usuário',
      'icofont-user'
    );

    include(TEMPLATE_PATH . "/messages.php");
  ?>

  <form action="#" method="post">
    <input type="hidden" name="id" value="<?= $id ?>">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name">Nome</label>
        <input type="text" id="name" name="name" value="<?= $name ?>" placeholder="Informe o nome" class="form-control <?= $errors['name'] ? 'is-invalid' : '' ?>">
        <div class="invalid-feedback"><?= $errors['name'] ?></div>
      </div>
      <div class="form-group col-md-6">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" value="<?= $email ?>" placeholder="Informe o email" class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>">
        <div class="invalid-feedback"><?= $errors['email'] ?></div>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="password">Senha</label>
        <input type="password" id="password" name="password" placeholder="Informe a senha"
          class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>">
        <div class="invalid-feedback"><?= $errors['password'] ?></div>
      </div>
      <div class="form-group col-md-6">
        <label for="confirm_password">Confirmação de Senha</label>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirme a senha"
          class="form-control <?= $errors['confirm_password'] ? 'is-invalid' : '' ?>">
        <div class="invalid-feedback"><?= $errors['confirm_password'] ?></div>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="start_date">Data de Admissão</label>
        <input type="date" id="start_date" name="start_date" value="<?= $start_date ?>" class="form-control <?= $errors['start_date'] ? 'is-invalid' : '' ?>">
        <div class="invalid-feedback"><?= $errors['start_date'] ?></div>
      </div>
      <div class="form-group col-md-6">
        <label for="end_date">Data de Desligamento</label>
        <input type="date" id="end_date" name="end_date" value="<?= $end_date ?>" class="form-control <?= $errors['end_date'] ? 'is-invalid' : '' ?>">
        <div class="invalid-feedback"><?= $errors['end_date'] ?></div>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="is_admin">Administrador?</label>
        <select name="is_admin" id="is_admin"  class="form-control <?= $errors['is_admin'] ? 'is-invalid' : '' ?>">
          <option value="0">Não</option>
          <option value="1">Sim</option>
        </select>
        <div class="invalid-feedback"><?= $errors['is_admin'] ?></div>

      </div>
    </div>
    <div>
      <button class="btn btn-primary btn-lg">Salvar</button>
      <a href="/users.php" class="btn btn-secondary btn-lg">Cancelar</a>
    </div>
  </form>
</main>
