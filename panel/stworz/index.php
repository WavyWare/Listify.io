<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ./../../login/index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Listify - your shared shop list</title>
    <link href="./../../src/output.css" rel="stylesheet" />
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
        <a class="btn btn-accent mx-2 bt" href="./../logout.php">Wyloguj się</a>
    </div>
</div>
<div class="md:container mx-auto">
    <p class="text-center text-3xl my-5">Nowa Lista</p>
    <div class="m-5 bg-zinc-400 border-zinc-600 border-2 flex justify-center items-center h-screen font-semibold">

        <form method="get" action="./create.php">
            <label>
                Nazwa listy:
                <input type="text" placeholder="Nowa lista" class="input input-bordered max-w-xs my-2 w-full" name="list_name" required/>
            </label><br/>
            <label>
                Opis listy:
                <textarea class="textarea textarea-bordered my-2 w-full border" placeholder="Nasza rodzinna lista zakupów..." name="desc"></textarea>
            </label><br>
            <div class="flex justify-stretch mx-auto">
                <a class="btn btn-accent rounded-full mx-auto" type="submit" href="./../">Wróć do panelu</a>
                <input class="btn btn-primary rounded-full mx-auto" type="submit" value="Utwórz">
            </div>
        </form>
    </div>

</div>
</body>
</html>
