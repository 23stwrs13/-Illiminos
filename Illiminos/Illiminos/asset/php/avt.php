<?php
    session_start();
    // Подключение
    include './connect.php';
        $sql = sprintf("SELECT * FROM `user` WHERE `login` = '%s' AND `password` = '%s'", $_POST['login'], $_POST['password']);
        $res = $connect->query($sql);
        if($res->num_rows){
            $row = $res->fetch_assoc();
            $_SESSION['login'] = $row['login'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['surname'] = $row['surname'];
            $_SESSION['date'] = $row['date'];
            $_SESSION['id'] = $row['id'];
            $role = $row['id_role'];
            // Определение роли человека 
            $rol=sprintf("SELECT `id_role`,`name_role` FROM `role` WHERE `id_role`='%s'",$role);
            $rol_res = $connect->query($rol);
            $rol_row = $rol_res->fetch_assoc();
            if(!$rol_res = $connect->query($rol)){
                echo "Ошибка получения данных";
            }
            $_SESSION['role']=$rol_row['name_role'];
            
            // Сообщение о входе
            header('Location: ../pages/user.php?message=Вы вошли. Здравствуйте, '. $_SESSION["role"]);
            exit;
        }else{
            // Сообщение об ошибке
            header("Location: ../pages/user.php?message=Некорректный логин или пароль");
            exit;
        }
?>