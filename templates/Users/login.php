<?php $this->layout="default_login"; ?>

<h5>Acceso a Siti Pagos Soft</h5>

<!-- form -->
<?= $this->Form->create() ?>
    <input name="email" type="email" class="form-control" placeholder="Email" required >
    <br>
    <input name="password" type="password" class="form-control" placeholder="Password" required autofocus>

    <button class="btn btn-primary btn-block">Sign in</button>
    <hr>
    <a href="./login.html" class="btn btn-sm btn-outline-light ml-1">Sign out</a>
<?= $this->Form->end() ?>
<!-- ./ form -->