<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Siti Pagos Soft</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=$webroot;?>media/image/favicon.png"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="<?=$webroot;?>vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="<?=$webroot;?>css/app.min.css" type="text/css">
</head>
<body class="form-membership">

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->

<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
        <img class="logo" src="<?=$webroot;?>/media/image/logo.png" alt="image">
        <img class="logo-dark" src="<?=$webroot;?>/media/image/logo-dark.png" alt="image">
    </div>
    <!-- ./ logo -->

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>  

</div>

<!-- Plugin scripts -->
<script src="<?=$webroot;?>vendors/bundle.js"></script>

<!-- App scripts -->
<script src="<?=$webroot;?>/js/app.min.js"></script>
</body>
</html>