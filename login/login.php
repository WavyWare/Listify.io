<?php
global $pdo;
session_start();
require './../php/db.php';

if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
    header('Location: ./../panel/index.php');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $identifier = $_POST['username']; // Może być nazwą użytkownika lub adresem e-mail
    $password = $_POST['password'];

    // Przygotowanie zapytania SQL
    $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ? OR email = ?');
    $stmt->execute([$identifier, $identifier]);
    $user = $stmt->fetch();

    // Sprawdzenie, czy użytkownik istnieje i czy hasło jest poprawne
    if ($user && password_verify($password, $user['pwd_hash'])) {
        // Ustawienie zmiennych sesji
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // Przekierowanie do strony chronionej
        header('Location: ./../panel/index.php');
        exit;
    } else {
        $_SESSION['err'] = 'Nieprawidłowa nazwa użytkownika, adres e-mail lub hasło.';
        header('Location: ./index.php');
    }
}