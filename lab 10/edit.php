<?php
    include('config.php');
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM `registrations` WHERE id='$id'");
    $row = mysqli_fetch_array($query);
    
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
 
     
        
        $sql = "UPDATE registrations SET 
        surname='$surname',
        name='$name',
        patronymic='$patronymic',
        competition_date='$competition_date',
        competition_time='$competition_time',
        previous_participation='$previous_participation',
        registration_address='$registration_address',
        email='$email',
        age='$age',
        preparation_level='$preparation_level',
        sport_type='$sport_type',
        team_number='$team_number',
        parental_consent='$parental_consent'

        WHERE id='$id'";
        
        if (mysqli_query($conn, $sql)) {
            echo "Данные успешно обновлены.";
        } else {
            echo "Ошибка при обновлении данных: " . mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Редактирование данных</title>
</head>
<body>
    <h2>Редактирование данных</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . "?id=$id"; ?>">
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
           
                </td>
                <td><label><b>Согласие родителей (детям до 18)</b></label>
                    <input type="checkbox" name="prm14" value="Согласие родителей" <?php echo isset($_POST['prm14']) ? 'checked' : ''; ?>>
                    
                </td>

        <input type="submit" name="submit" value="Сохранить">
        <a href="index.php">Назад</a>
    </form>
</body>
</html>
