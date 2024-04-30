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
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<h2>Введённые данные:</h2>';
        echo '<p>Фамилия: ' . htmlspecialchars($_POST['prm1']) . '</p>';
        echo '<p>Имя: ' . htmlspecialchars($_POST['prm2']) . '</p>';
        echo '<p>Отчество: ' . htmlspecialchars($_POST['prm3']) . '</p>';
        echo '<p>Дата: ' . htmlspecialchars($_POST['prm4']) . '</p>';
        echo '<p>Время: ' . htmlspecialchars($_POST['prm5']) . '</p>';
        echo '<p>Участие в прошлом году: ' . htmlspecialchars($_POST['prm6']) . '</p>';
        echo '<p>Адрес места регистрации: ' . htmlspecialchars($_POST['prm7']) . '</p>';
        echo '<p>Электронная почта: ' . htmlspecialchars($_POST['prm8']) . '</p>';
        echo '<p>Полных лет: ' . htmlspecialchars($_POST['prm9']) . '</p>';
        echo '<p>Уровень подготовки: ' . htmlspecialchars($_POST['prm10']) . '</p>';
        echo '<p>Вид спорта: ' . htmlspecialchars($_POST['prm11']) . '</p>';
        echo '<p>Номер команды: ' . htmlspecialchars($_POST['prm12']) . '</p>';
        if(isset($_POST['prm14'])) {
            echo '<p>Согласие родителей: Да</p>';
        } else {
            echo '<p>Согласие родителей: Нет</p>';
        }
        echo '<hr>';
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>Регистрация на соревнование</h1>
        <table border="1" cellspacing="0" cellpadding="15">
            <tr>    
                <td colspan="2">
                    <label><b>Фамилия:</b></label> <input type="text" name="prm1" id="prm1" size="15" required value="<?php echo isset($_POST['prm1']) ? htmlspecialchars($_POST['prm1']) : ''; ?>"><br>
                    <label><b>Имя:</b></label> <input type="text" name="prm2" id="prm2" size="15" required value="<?php echo isset($_POST['prm2']) ? htmlspecialchars($_POST['prm2']) : ''; ?>"><br>
                    <label><b>Отчество:</b></label><input type="text" name="prm3" id="prm3" size="15" required value="<?php echo isset($_POST['prm3']) ? htmlspecialchars($_POST['prm3']) : ''; ?>"><br>
                </td>
                <td>
                    <label><b><u>Дата:</u></b></label> <input type="date" name="prm4" id="prm4" size="15" required value="<?php echo isset($_POST['prm4']) ? htmlspecialchars($_POST['prm4']) : ''; ?>"><br><br>
                    <label><b><u>Время:</u></b></label> <input type="time" name="prm5" id="prm5" size="20" required value="<?php echo isset($_POST['prm5']) ? htmlspecialchars($_POST['prm5']) : ''; ?>">
                </td>
            </tr>
            <tr>    
                <td style="text-align:center">
                    <label><b>Участие в прошлом году:</b></label><br>
                    Да <input type="radio" name="prm6" value="Да" <?php echo (isset($_POST['prm6']) && $_POST['prm6'] == 'Да') ? 'checked' : ''; ?> required><br> 
                    Нет <input type="radio" name="prm6" value="Нет" <?php echo (isset($_POST['prm6']) && $_POST['prm6'] == 'Нет') ? 'checked' : ''; ?> required>
                </td>
                <td colspan="2" style="text-align:right">
                    <label><b>Адрес места регистрации: </b></label><input type="text" name="prm7" id="prm7" size="20" required value="<?php echo isset($_POST['prm7']) ? htmlspecialchars($_POST['prm7']) : ''; ?>"><br><br>
                    <label><b>Электронная почта: </b></label><input type="email" name="prm8" id="prm8" size="20" required value="<?php echo isset($_POST['prm8']) ? htmlspecialchars($_POST['prm8']) : ''; ?>"><br>
                </td>
            </tr>
            <tr>    
                <td>
                    <label><b>Полных лет </b></label><input type="text" name="prm9" id="prm9" size="15" required value="<?php echo isset($_POST['prm9']) ? htmlspecialchars($_POST['prm9']) : ''; ?>">
                </td>
                <td style="text-align:center">
                    <label><b>Уровень подготовки:</b></label><br>
                    Новичок <input type="radio" name="prm10" value="Новичок" <?php echo (isset($_POST['prm10']) && $_POST['prm10'] == 'Новичок') ? 'checked' : ''; ?> required><br> 
                    Средний <input type="radio" name="prm10" value="Средний" <?php echo (isset($_POST['prm10']) && $_POST['prm10'] == 'Средний') ? 'checked' : ''; ?> required><br>
                    Опытный <input type="radio" name="prm10" value="Опытный" <?php echo (isset($_POST['prm10']) && $_POST['prm10'] == 'Опытный') ? 'checked' : ''; ?> required>
                </td>
                <td> <label><b>Вид спорта:</b></label><br>
                    <select name="prm11" id="prm11" required>
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
                    <input type="radio" name="prm12" value="1" <?php echo (isset($_POST['prm12']) && $_POST['prm12'] == '1') ? 'checked' : ''; ?> required> 1 
                    <input type="radio" name="prm12" value="2" <?php echo (isset($_POST['prm12']) && $_POST['prm12'] == '2') ? 'checked' : ''; ?> required> 2 
                    <input type="radio" name="prm12" value="3" <?php echo (isset($_POST['prm12']) && $_POST['prm12'] == '3') ? 'checked' : ''; ?> required> 3 
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
</body>
</html>
