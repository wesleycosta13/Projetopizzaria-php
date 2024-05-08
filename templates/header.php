<?php
    include("process/conn.php");

    $msg = "";

    if (isset ($_SESSION["msg"])){
        $msg = $_SESSION["msg"];
        $status = $_SESSION["status"];

        $_SESSION["msg"] = "";
        $_SESSION["status"] = "";


    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça seu pedido</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--App CSS-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
        <a href="index.php" class="navbar-brand">
            <img src="img/logo-pizza.jpg" alt="pizzaria" id="brand-logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a href="index.php" class="nav-link">Peça sua pizza</a>
            </li>
            </ul>
        </div>
        </nav>
    </header>
    <?php if ($msg != ""): ?>
    <div class="alert alert-sucess-<?=$status?>">
      <p><?=$msg?></p>
    </div>
    <?php endif; ?>