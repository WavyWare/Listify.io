<?php
    session_start();
    if (isset($_SESSION['user_id'])) {
        header('Location: ./../panel/index.php');
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
    <style>
        body {
            background-image: url('./../img/stock/login.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #000;
            height: 100vh;
        }
    </style>
</head>
<body>
<div class="navbar bg-primary pb-3 sticky">
    <div class="navbar-start invisible">
        <button class="btn btn-ghost text-lg">Odkryj Funkcje Listify!</button>
        <!--            <div class="dropdown">-->
        <!--                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">-->
        <!--                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>-->
        <!--                </div>-->
        <!--                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">-->
        <!--                    <li><a>Homepage</a></li>-->
        <!--                    <li><a>Portfolio</a></li>-->
        <!--                    <li><a>About</a></li>-->
        <!--                </ul>-->
        <!--            </div>-->
    </div>
    <div class="navbar-center rounded-none border-b-primary border-b-2">
        <a href="./../" class="btn btn-ghost text-xl text-logo pb-0"><i class="bi bi-card-checklist"></i>Listify.io</a>
    </div>
    <div class="navbar-end invisible">
        <button class="btn btn-primary text-lg">Zaloguj się!</button>
    </div>
</div>
    <div class="flex justify-center items-center h-screen img-login">
        <div class="border-zinc-300 border-4 text-center py-5 rounded-3xl glass">
            <h1 class="text-2xl text-center py-2 font-semibold">Zaloguj się</h1>
            <form action="login.php" method="post">
                <label>
                    <input type="text" placeholder="Wpisz e-mail lub nazwe użytkownika" class="input input-bordered w-full max-w-xs my-2" name="username"/>
                </label>
                <label>
                    <input type="password" placeholder="Wpisz hasło" class="input input-bordered w-full max-w-xs mb-2" name="password"/>
                </label><br />
                <label>
                    <input type="submit" class="btn btn-wide my-2" value="Przejdź">
                </label><br />
                <span style="display: none; transition: all .2s ease-in-out;" id="error" class="text-center text-sm text-red-600 font-bold">Nieprawidłowy adres e-mail.<br/></span>
                <a href="./../register/" class="link text-white">Nie masz konta? Zarejestruj się!</a>
                <?php
                if (isset($_SESSION['err'])) {
                    echo '<p class="mx-3 font-bold text-red-600">' . $_SESSION['err'] . '</p>';
                    unset($_SESSION['err']);
                }
                ?>
            </form>
        </div>
    </div>

<script src="./login.js" type="text/javascript"></script>
</body>
</html>