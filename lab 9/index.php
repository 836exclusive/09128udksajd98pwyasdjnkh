<!DOCTYPE html>
<html>
<head>
    <title>Регистрация на соревнование</title>
    <meta charset="utf-8">
    <style>
        td{
            text-align: left;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>Регистрация на соревнование</h1>
        <table border="1" cellspacing="0" cellpadding="15">
            <tr>    
                <td colspan="2">
                    <label><b>Фамилия:</b></label> <input type="text" name="prm1" id="prm1" size="15"   value="<?php echo isset($_POST['prm1']) ? htmlspecialchars($_POST['prm1']) : ''; ?>"><br>
                    <label><b>Имя:</b></label> <input type="text" name="prm2" id="prm2" size="15"   value="<?php echo isset($_POST['prm2']) ? htmlspecialchars($_POST['prm2']) : ''; ?>"><br>
                    <label><b>Отчество:</b></label><input type="text" name="prm3" id="prm3" size="15"   value="<?php echo isset($_POST['prm3']) ? htmlspecialchars($_POST['prm3']) : ''; ?>"><br>
                </td>
                <td>
                    <label><b><u>Дата:</u></b></label> <input type="date" name="prm4" id="prm4" size="15"   value="<?php echo isset($_POST['prm4']) ? htmlspecialchars($_POST['prm4']) : ''; ?>"><br><br>
                    <label><b><u>Время:</u></b></label> <input type="time" name="prm5" id="prm5" size="20"   value="<?php echo isset($_POST['prm5']) ? htmlspecialchars($_POST['prm5']) : ''; ?>">
                </td>
            </tr>
            <tr>    
                <td style="text-align:center">
                    <label><b>Участие в прошлом году:</b></label><br>
                    Да <input type="radio" name="prm6" value="Да" <?php echo (isset($_POST['prm6']) && $_POST['prm6'] == 'Да') ? 'checked' : ''; ?>  ><br> 
                    Нет <input type="radio" name="prm6" value="Нет" <?php echo (isset($_POST['prm6']) && $_POST['prm6'] == 'Нет') ? 'checked' : ''; ?>  >
                </td>
                <td colspan="2" style="text-align:right">
                    <label><b>Адрес места регистрации: </b></label><input type="text" name="prm7" id="prm7" size="20"   value="<?php echo isset($_POST['prm7']) ? htmlspecialchars($_POST['prm7']) : ''; ?>"><br><br>
                    <label><b>Электронная почта: </b></label><input type="email" name="prm8" id="prm8" size="20"   value="<?php echo isset($_POST['prm8']) ? htmlspecialchars($_POST['prm8']) : ''; ?>"><br>
                </td>
            </tr>
            <tr>    
                <td>
                    <label><b>Полных лет </b></label><input type="text" name="prm9" id="prm9" size="15"   value="<?php echo isset($_POST['prm9']) ? htmlspecialchars($_POST['prm9']) : ''; ?>">
                </td>
                <td style="text-align:center">
                    <label><b>Уровень подготовки:</b></label><br>
                    Новичок <input type="radio" name="prm10" value="Новичок" <?php echo (isset($_POST['prm10']) && $_POST['prm10'] == 'Новичок') ? 'checked' : ''; ?>  ><br> 
                    Средний <input type="radio" name="prm10" value="Средний" <?php echo (isset($_POST['prm10']) && $_POST['prm10'] == 'Средний') ? 'checked' : ''; ?>  ><br>
                    Опытный <input type="radio" name="prm10" value="Опытный" <?php echo (isset($_POST['prm10']) && $_POST['prm10'] == 'Опытный') ? 'checked' : ''; ?>  >
                </td>
                <td> <label><b>Вид спорта:</b></label><br>
                    <select name="prm11" id="prm11"  >
                        <option value="Футбол" <?php echo (isset($_POST['prm11']) && $_POST['prm11'] == 'Футбол') ? 'selected' : ''; ?>>Футбол</option>
                        <option value="Волейбол" <?php echo (isset($_POST['prm11']) && $_POST['prm11'] == 'Волейбол') ? 'selected' : ''; ?>>Волейбол</option>
                        <option value="Плавание" <?php echo (isset($_POST['prm11']) && $_POST['prm11'] == 'Плавание') ? 'selected' : ''; ?>>Плавание</option>
                        <option value="Хоккей" <?php echo (isset($_POST['prm11']) && $_POST['prm11'] == 'Хоккей') ? 'selected' : ''; ?>>Хоккей</option>
                        <option value="Тенис" <?php echo (isset($_POST['prm11']) && $_POST['prm11'] == 'Тенис') ? 'selected' : ''; ?>>Тенис</option>
                    </select>
                </td>
            </tr>
            <tr>    
                <td style="text-align:center">
                    <label><b>Номер команды:</b></label><br>
                    <input type="radio" name="prm12" value="1" <?php echo (isset($_POST['prm12']) && $_POST['prm12'] == '1') ? 'checked' : ''; ?>  > 1 
                    <input type="radio" name="prm12" value="2" <?php echo (isset($_POST['prm12']) && $_POST['prm12'] == '2') ? 'checked' : ''; ?>  > 2 
                    <input type="radio" name="prm12" value="3" <?php echo (isset($_POST['prm12']) && $_POST['prm12'] == '3') ? 'checked' : ''; ?>  > 3 
                </td>
                <td style="text-align:center">
                    <input type="submit" name="prm13" value="Записаться">
                </td>
                <td><label><b>Согласие родителей (детям до 18)</b></label>
                    <input type="checkbox" name="prm14" value="Согласие родителей" <?php echo isset($_POST['prm14']) ? 'checked' : ''; ?>>
                </td>

            </tr>

        </table>
    </form> 
    <php>

  
    <?php
    require_once 'config.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Получение данных из формы
        $surname = $_POST["prm1"];
        $name = $_POST["prm2"];
        $patronymic = $_POST["prm3"];
        $competition_date= $_POST["prm4"];
        $competition_time = $_POST["prm5"];
        $previous_participation = $_POST["prm6"];
        $registration_address = $_POST["prm7"];
        $email = $_POST["prm8"];
        $age = $_POST["prm9"];
        $preparation_level = $_POST["prm10"];
        $sport_type = $_POST["prm11"];
        $team_number = $_POST["prm12"];
        $parental_consent = isset($_POST['prm14']);

    
        $sql = "INSERT INTO registrations (surname, name, patronymic, competition_date, competition_time, previous_participation, registration_address, email, age, preparation_level, sport_type, team_number, parental_consent)
                VALUES ('$surname', '$name', '$patronymic', '$competition_date', '$competition_time', '$previous_participation', '$registration_address', '$email', $age, '$preparation_level', '$sport_type', $team_number, '$parental_consent')";
        
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            echo "Данные успешно добавлены в базу данных.";
        } else {
            echo "Ошибка при выполнении запроса: " . mysqli_error($conn);
        }
    
    
        }
        $sql = "SELECT * FROM registrations";
        $result = mysqli_query($conn, $sql);
        
        if (!$result) {
            die("Ошибка при выполнении запроса: " . mysqli_error($conn));
        }
        
        if (mysqli_num_rows($result) > 0) {
            echo "<h2>Данные из базы данных:</h2>";
            echo "<table border='1' cellspacing='0' cellpadding='10'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Фамилия</th>";
            echo "<th>Имя</th>";
            echo "<th>Отчество</th>";
            echo "<th>Дата</th>";
            echo "<th>Время</th>";
            echo "<th>Участие в прошлом году</th>";
            echo "<th>Адрес регистрации</th>";
            echo "<th>E-mail</th>";
            echo "<th>Возраст</th>";
            echo "<th>Уровень подготовки</th>";
            echo "<th>Вид спорта</th>";
            echo "<th>Номер команды</th>";
            echo "<th>Согласие родителей</th>";
            echo "</tr>";
        
            // Вывод данных из таблицы
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['surname']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['patronymic']}</td>";
                echo "<td>{$row['competition_date']}</td>";
                echo "<td>{$row['competition_time']}</td>";
                echo "<td>{$row['previous_participation']}</td>";
                echo "<td>{$row['registration_address']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['age']}</td>";
                echo "<td>{$row['preparation_level']}</td>";
                echo "<td>{$row['sport_type']}</td>";
                echo "<td>{$row['team_number']}</td>";
                echo "<td>{$row['parental_consent']}</td>";
                echo "</tr>";
            }
        
            echo "</table>";
        } else {
            echo "Данные не найдены.";
        }
        
        mysqli_free_result($result);
      
        mysqli_close($conn);
    ?>
    
</body>
</html>
