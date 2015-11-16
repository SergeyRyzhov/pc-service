<?php
    sleep(2);
    
    $login = preg_replace("/[^\w_\.\-]/", "", $_POST['login']);
    $password = trim($_POST['password']);
    
    if (strlen($_POST['login']) > 16) {
        $err = 'Слишком длинная строка. Введите правильный логин.';
    } elseif (strlen($_POST['pswd']) > 16) {
        $err = 'Слишком длинная строка. Введите правильный пароль.';
    } elseif (preg_match("/\W+/", $pswd)) {
        $err = 'Строка пароля содержит недопустимые символы. Введите правильный пароль.';
    } else {
    
    
        $sql = "SELECT id, name, email FROM users WHERE (email = '{$login}' OR name = '{$login}') AND password = MD5('{$password}')";
        $res = mysql_query($sql) or exit('Ошибка при выполнении запроса к базе данных.');
        
        if (mysql_num_rows($res) == 1) {
        
            $row = mysql_fetch_assoc($res);
            
            $userId = $row['id'];
            $userName = $row['name'];
            $email = $row['email'];
            
            $rolesql = "SELECT role FROM roles WHERE id IN ( SELECT roleid FROM userinroles WHERE userid = {$userId})";
            $roleres = mysql_query($rolesql) or exit('Ошибка при выполнении запроса к базе данных.');
            
            $roles = array();

            while(($rrow =  mysql_fetch_assoc($roleres))) {
                $roles[] = $rrow['role'];
            }
            //$roles = mysql_fetch_array ($roleres);
            
            $_SESSION['userid'] = $userId;
            $_SESSION['user'] = $userName;
            $_SESSION['roles'] = $roles;
            header('Location: index.php');
            exit;
        } else {
            $err = 'Отказано в доступе. Проверьте логин и пароль и попробуйте еще раз.';
        }
    }
?>