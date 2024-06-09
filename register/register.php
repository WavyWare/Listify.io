<?php
global $pdo;
session_start();
require './../php/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    // Walidacja długości nazwy użytkownika
    if (strlen($username) < 5) {
        $_SESSION['err'] = 'Nazwa użytkownika musi mieć co najmniej 5 znaków';
        header('Location: ./index.php');
        exit;
    }

    if (strpos($username, ' ') !== false) {
        $_SESSION['err'] = 'Nazwa użytkownika nie może zawierać spacji.';
        header('Location: ./index.php');
        exit;
    }
    if ($password !== $confirm_password) {
        $_SESSION['err'] = 'Hasła muszą być identyczne.';
        header('Location: index.php');
        exit;
    }
    // Walidacja adresu e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['err'] = 'Nieprawidłowy format adresu e-mail.';
        header('Location: ./index.php');
        exit;
    }

    // Walidacja długości hasła
    if (strlen($password) < 8) {
        $_SESSION['err'] = 'Hasło musi mieć co najmniej 8 znaków.';
        header('Location: ./index.php');
        exit;
    }
    if(is_null($username)) {
        $_SESSION['err'] = 'Nazwa użytkownika nie może być pusta';
        header('Location: ./index.php');
        exit;
    }
    if(is_null($password)) {
        $_SESSION['err'] = 'Hasło nie może być puste';
        header('Location: ./index.php');
        exit;
    }
    if(is_null($email)) {
        $_SESSION['err'] = 'E-mail nie może być pusta';
        header('Location: ./index.php');
        exit;
    }
    // Sprawdzenie, czy nazwa użytkownika lub adres e-mail już istnieje
    $stmt = $pdo->prepare('SELECT id FROM users WHERE username = ? OR email = ?');
    $stmt->execute([$username, $email]);
    $user = $stmt->fetch();
    echo htmlspecialchars($_SESSION['err']);
    if ($user) {
        if ($user['username'] === $username) {
            $_SESSION['err'] = 'Nazwa użytkownika jest już zajęta.';
        }
        if ($user['email'] === $email) {
            $_SESSION['err'] = 'Adres e-mail jest już zajęty.';
        }
        header('Location: index.php');

    } else {
        // Hashowanie hasła
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Wstawienie nowego użytkownika do bazy danych
        $stmt = $pdo->prepare('INSERT INTO users (username, email, pwd_hash) VALUES (?, ?, ?)');
        $stmt->execute([$username, $email, $hashed_password]);

        // Automatyczne logowanie użytkownika po rejestracji
        $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ?');
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        // Ustawienie zmiennych sesji
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // Przekierowanie do panelu użytkownika
        header('Location: ../panel/index.php');
    }
    exit;
}
