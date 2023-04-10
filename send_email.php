<?php
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "vasilipupkin127@gmail.com"; // Замените на свой e-mail
    $subject = "Сообщение с сайта от $name";
    $body = "Имя: $name\n\nE-mail: $email\n\nСообщение:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Ваше сообщение было отправлено.";
    } else {
        echo "Произошла ошибка. Пожалуйста, попробуйте еще раз.";
    }
} else {
    echo "Пожалуйста, заполните все поля формы.";
}
?>