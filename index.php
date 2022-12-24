<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
    
    <title>Passwordz - Gerador de Senhas</title>
</head>

<body onload="observer()">

    <? include('inc/navbar.php') ?>

    <div class="container">
        <div class="container-content">
            <?
            include('inc/banner.php');
            include('inc/pass-list.php');
            include('inc/inserc-form.php');
            include('inc/inserc-options.php');
            ?>
        </div>
    </div>

</body>

<script src="js/observer.js"></script>

</html>