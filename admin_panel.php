<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Аdmin. panel</title>
</head>
<body>
<center><a href='index.php'><button>Объявления!</button></a></center>
<?php
if($_POST['Password'] == "11111" && $_POST['Login'] == "11111")
{
    echo
        '
                <table style="background-color: black; margin-top: 20%; margin-left: 50%; color: deepskyblue">
                    <tr>
                        <td>
                            <h1>
                                <label>Вы ввели правильный пароль и логин!</label>
                            </h1>
                            <p>Самый популярный товар - Защитное стекло на айфон х,11Pro/11Pro Max,6,7,8+,Хr,5,5s,se</p>
                        </td>
                    </tr>
                </table>
         ';
}
else
{
    echo
    '
            <form method="post" action="admin_panel.php">
                <p>Введите пароль:<input type="password" name="Password" max="20" min="5"></p>
                <p>Введите логин:<input name="Login" max="20" min="1"></p>
                <input type="submit">
            </form>
    ';
}
?>
</body>
</html>