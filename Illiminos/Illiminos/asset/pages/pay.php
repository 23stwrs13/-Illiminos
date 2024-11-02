<?php        
        session_start();
        include '../php/sait/header.php';
    ?>
        <!-- Main  -->
        <main class="main">
            <div class="pay-box">
                <form action="https://sbp.nspk.ru/?utm_source=yandex.ru&utm_medium=organic&utm_campaign=yandex.ru&utm_referrer=yandex.ru" method="post">
                    <div class="pay-two-boxs">
                        <div class="pay-two-box-one">
                            <input type="text" maxlength="16" name="numbercard" id="numbercard" placeholder="Номер карты" required>
                            <div class="on-li-pay">
                                <input type="text" name="sroc" id="sroc" maxlength="4" placeholder="Годен до" required>
                                <input type="text"  maxlength="3" name="cvc" id="cvc" placeholder="CVC" required>
                            </div>
                            <div class="tip-pay">
                                <div class="tip-one">
                                    <input type="radio" name="pay" id="gpay">
                                    <label for="gpay"><img src="../img/gpay.png" alt="gpay"></label>
                                </div>
                                <div class="tip-one">
                                    <input type="radio" name="pay" id="paypal">
                                    <label for="paypal"><img src="../img/paypal.png" alt="paypal"></label>
                                </div>
                                <div class="tip-one">
                                    <input type="radio" name="pay" id="mirpay">
                                    <label for="mirpay"><img src="../img/mirpay.png" alt="mirpay"></label>
                                </div>
                            </div>
                        </div>
                        <div class="pay-two-box-two">
                            <h5 class="zag-p-t-b-two">Тарифы</h5>
                            <div class="trafics">
                                <div class="trafic">
                                    <p>Мини-тариф</p>
                                    новинки и популярные<br>фильмы/сериалы
                                </div>
                                <div class="trafic">
                                    <p>Стандартный-тариф</p>
                                    Доступны все<br>фильмы/сериалы<br>*за исключением спец.категории
                                </div>
                                <div class="trafic">
                                    <p>Полный-тариф</p>
                                    Доступны все фильмы/сериалы<br>и также категория Спец.Категории
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="otpppay" id="otpppay" value="Оплатить">
                </form>
            </div>
        </main>
        <script>
            $(function() {
              $("#sroc").mask("99/99", {placeholder: "Годен до" });
            });
        </script>
        <?php        
            include '../php/sait/footer.php';
        ?>