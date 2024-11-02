<?php
    session_start();
    // Подключение
    echo '
            <div class="dannie-user">
            <div class="inf-boxs-users">
                <div class="on-lin-innfor">
                    <div class="text-user">Имя</div>
                    <div class="box-inf-us">'.$_SESSION['name'].'</div>
                </div>
                <div class="on-lin-innfor">
                    <div class="text-user">Фамилия</div>
                    <div class="box-inf-us">'.$_SESSION['surname'].'</div>
                </div>
                <div class="on-lin-innfor">
                    <div class="text-user">Логин</div>
                    <div class="box-inf-us">'.$_SESSION['login'].'</div>
                </div>
                <div class="on-lin-innfor">
                    <div class="text-user">Дата
                        рождения</div>
                    <div class="box-inf-us">'. $_SESSION['date'].'</div>
                </div>
            </div>
    ';
?>