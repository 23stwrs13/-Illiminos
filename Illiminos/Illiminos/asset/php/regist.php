<?php
    session_start();
    // Подключение
    include './connect.php';
    if($_POST['twopassword']==$_POST['password']){
        // Внисение данных в таб юзер
        $sql = sprintf("INSERT INTO `user`(`id`,`name`,`surname`,`login`,`password`,`date`,`id_role`) VALUES (NULL,'%s','%s','%s','%s','%s','2')",
            $_POST['name'],
            $_POST['surname'],
            $_POST['login'],
            $_POST['password'],
            $_POST['date']
        );
        // Проверка на отправление данных
        if(!$connect -> query($sql)){
            echo "Ошибка добавления данных";
            header('Location: ../pages/regist.php?message=Вы не зарегистрировались');
            exit;
        }
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['surname'] = $_POST['surname'];
        $_SESSION['date'] = $_POST['date'];
        $mail=$_SESSION['login'];
        $role = "2";
        // Нахождение роли пользователя
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
        header('Location: regist.php?message=Разные пароли');
    }
?>