<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Listify - your shared shop list</title>
        <link href="src/output.css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    </head>
    <body>
    <div class="navbar bg-base-100 md:container mx-auto pb-3">
        <div class="navbar-start invisible md:visible">
            <a class="btn btn-ghost text-lg" href="./login/">Odkryj Funkcje Listify!</a>
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
            <a class="btn btn-ghost text-xl text-logo pb-0" href="./"><i class="bi bi-card-checklist"></i>Listify.io</a>
        </div>
        <div class="navbar-end invisible md:visible">
            <a class="btn btn-primary text-lg" href="./login/">Zaloguj się!</a>
        </div>
    </div>
    <div class="md:container mx-auto">
        <div class="bg-primary rounded-t-2xl rounded-b-lg flex text-center">
            <div class="md:w-2/3">
                <h1 class="text-6xl font-bold text-center py-24">Odkryj zakupy na nowo!</h1>
                <p class="text-white text-lg px-10 md:px-24 pb-12 font-semibold lg:text-3xl">
                    Zarządzaj wspólnymi listami zakupów z domownikami w czasie rzeczywistym dzięki Listify.io. Nasza intuicyjna aplikacja pozwala na precyzyjne planowanie zakupów, co przekłada się na mniejsze wydatki i unikanie spontanicznych, nieprzemyślanych zakupów. Oszczędzaj pieniądze i ciesz się lepszą organizacją każdego dnia.
                </p>
                <a class="btn btn-wide m-5" href="./login/">Przejdź do swoich list.</a>
                <div class="flex justify-evenly py-6">
                    <div class="block visible md:invisible ">
                        <a class="btn btn-accent" href="./login/">Zaloguj się!</a>
                        <a class="btn btn-accent">Odkryj funkcje Listify.io.</a>
                    </div>

                </div>

            </div>
            <div class="w-1/3 m-0 p-0 md:block hidden ">
                <img src="./img/stock/grocery.jpg" alt="Woman in front of shop fridges" class="h-full rounded-tr-2xl rounded-br-lg img-landing w-full object-cover flex img"/>
            </div>
        </div>
    </div>
    
    <script src="src/script.js" type="text/javascript"></script>
    </body>
</html>