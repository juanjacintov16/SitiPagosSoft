<?php

if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <h4 class="alert-heading">Notificación!</h4>
  <p class="mb-0"><?= $message ?></p>
</div>