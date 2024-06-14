<?php
global $pdo;
session_start();
    if (!isset($_SESSION['user_id'])) {
        header('Location: ./../login/index.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Listify - your shared shop list</title>
        <link href="./../src/output.css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>
    <div class="navbar bg-base-100 md:container mx-auto">

        <div class="navbar-start">
            <a href="./../" class="rounded-none btn btn-ghost text-xl text-logo pb-0 border-b-primary border-b-2"><i class="bi bi-card-checklist"></i>Listify.io</a>
        </div>
        <div class="navbar-end">
            Zalogowano jako:&nbsp;<span class="font-bold mx-2"><?php echo htmlspecialchars($_SESSION['username']);?>&nbsp;</span>
            <a class="btn btn-accent mx-2" href="./logout.php">Wyloguj się</a>
        </div>
    </div>
    <div class="md:container mx-auto pt-8">
        <div class="flex justify-evenly">
            <h1 class="text-3xl">Panel list:</h1>
            <a class="btn btn-accent rounded-full" href="./stworz/">Dodaj nową <i class="bi bi-plus-lg"></i></a>
        </div>

    </div>
    </body>
</html>
