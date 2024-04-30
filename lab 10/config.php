<?php
// Параметры подключения к серверу базы данных
$servername = "localhost"; // Хост
$username = "root"; // Имя пользователя
$password = ""; // Пароль

// Создание соединения
$conn = new mysqli($servername, $username, $password);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Создание базы данных "iddo", если она не существует
$sql_create_db = "CREATE DATABASE IF NOT EXISTS iddo";
if ($conn->query($sql_create_db) === TRUE) {
    echo "Database created successfully or already exists<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// Параметры подключения к базе данных
$dbname = "iddo"; // Имя базы данных

// Создание нового соединения с базой данных
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения с базой данных
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql_create_table = "CREATE TABLE IF NOT EXISTS registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    surname VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    patronymic VARCHAR(255),
    competition_date DATE NOT NULL,
    competition_time TIME NOT NULL,
    previous_participation ENUM('Да', 'Нет') NOT NULL,
    registration_address VARCHAR(255),
    email VARCHAR(255) NOT NULL,
    age INT,
    preparation_level ENUM('Новичок', 'Средний', 'Опытный') NOT NULL,
    sport_type ENUM('Футбол', 'Волейбол', 'Плавание', 'Хоккей', 'Тенис') NOT NULL,
    team_number INT,
    parental_consent BOOLEAN
)";

if ($conn->query($sql_create_table) === TRUE) {
    echo "таблица существует или же успешно создана<br>";
} else {
    echo "Error creating table: " . $conn->error;
}
?>
