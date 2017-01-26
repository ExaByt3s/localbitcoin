<?php require_once ROOT . '/views/layouts/cabinet/header.php'; ?>

<div class="content_newob">
    <div class="block-btn-bur">
        <a href="?type=1" class="btn-sale-main<?php $type == 1 ? print ' active-bue-m' : ''; ?>">Быстрая продажа</a>
        <a href="?type=2" class="btn-bue-main<?php $type == 2 ? print ' active-bue-m' : ''; ?>">Быстрая покупка</a>
        <div class="clear"></div>
    </div>

    <?php if ($result): ?>
        <p>Объявление размещено. <a href="/">На главную</a>.</p>
    <?php else: ?>
        <?php if (isset($errors) && is_array($errors)): ?>
            <div class="error-messege">     
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="post">
            <div class="form-newob">
                <!-- <input class = "text-form" type = "text" name = "price" pattern = "\d+(\.\d{2,})?" value = "<?= $price ?>" placeholder = "Укажите цену за 1 BTC, например
                <?php
                echo Currency::getExchangeRate('rur') . '  для рублей или ' . Currency::getExchangeRate('usd') . ' для долларов';
                ?>" required> -->

                <input type = "text" name = "location" pattern="^[А-Яа-яЁё\s]+$" value = "<?= $location ?>" placeholder = "Введите местоположение, только русские буквы" required class="inp-newob-2">
                <select class="sel-new-ob" name="currency_id">
                    <option disabled>Выберите валюту</option>
                    <option value = "2">RUR</option>
                    <option value = "1">BTK</option>    
                </select>
                <select class="sel-new-ob" name="payment_id">
                    <option disabled>Выберите способ оплаты</option>
                    <option value = "1">Банковской картой (VISA, MasterCard)</option>
                    <option value = "2">WebМоney</option>
                    <option value = "3">QIWI Wallet</option>
                    <option value = "3">Яндекс.Деньги</option>
                </select>
                <input type="text" placeholder="Цена за BTC" name="price" value = "<?= $price ?>" class="inp-newob-2">
                <input type="text" style="margin-bottom:15px;" placeholder="Реквизиты для оплаты" name="reqs" class="inp-newob-2">

                <div class="block-newcart block-newcart-2">
                    <a class="btn-new-cart btn-new-cart-2">   
                    </a>
                    <div class="add-adv-sys-container">
                        <div class="container-lk-1" id="sys-1">
                        <div class="in-lk-1">
                            <button class="btn-add-cart"></button>
                            <img src="../../template/bit.team/img/system_oplat/op6.png" alt="">
                            <input type="text" placeholder="Введите реквизиты">
                            <div class="clear"></div>
                        </div>
                        </div>
                        <div class="container-lk-1" id="sys-2">
                        <div class="in-lk-1">
                            <button class="btn-add-cart"></button>
                            <img src="../../template/bit.team/img/system_oplat/op5.png" alt="">
                            <input type="text" placeholder="Введите реквизиты">
                            <div class="clear"></div>
                        </div>
                        </div>
                        <div class="container-lk-1" id="sys-3">
                        <div class="in-lk-1">
                            <button class="btn-add-cart"></button>
                            <img src="../../template/bit.team/img/system_oplat/op4.png" alt="">
                            <input type="text" placeholder="Введите реквизиты">
                            <div class="clear"></div>
                        </div>
                        </div>
                        <div class="container-lk-1" id="sys-4">
                        <div class="in-lk-1">
                            <button class="btn-add-cart"></button>
                            <img src="../../template/bit.team/img/system_oplat/op3.png" alt="">
                            <input type="text" placeholder="Введите реквизиты">
                            <div class="clear"></div>
                        </div>
                        </div>
                        <div class="container-lk-1" id="sys-5">
                        <div class="in-lk-1">
                            <button class="btn-add-cart"></button>
                            <img src="../../template/bit.team/img/system_oplat/op2.png" alt="">
                            <input type="text" placeholder="Введите реквизиты">
                            <div class="clear"></div>
                        </div>
                        </div>
                        <div class="container-lk-1" id="sys-6">
                        <div class="in-lk-1">
                            <button class="btn-add-cart"></button>
                            <img src="../../template/bit.team/img/system_oplat/op1.png" alt="">
                            <input type="text" placeholder="Введите реквизиты">
                            <div class="clear"></div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="block-system-cart block-system-cart-2">
                    <ul>
                        <li>
                            <div class="sysOp" id="btn-sys-1">
                                <img src="../../template/bit.team/img/system_oplat/op6.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="sysOp" id="btn-sys-2">
                                <img src="../../template/bit.team/img/system_oplat/op5.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="sysOp" id="btn-sys-3">
                                <img src="../../template/bit.team/img/system_oplat/op4.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="sysOp" id="btn-sys-4">
                                <img src="../../template/bit.team/img/system_oplat/op3.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="sysOp" id="btn-sys-5">
                                <img src="../../template/bit.team/img/system_oplat/op2.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="sysOp" id="btn-sys-6">
                                <img src="../../template/bit.team/img/system_oplat/op1.png" alt="">
                            </div>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>

                <input type="number" min="0" value="0.000000" step="0.000001" placeholder="Количество BTC" name="max_amount" value = "<?= $max_amount ?>" class="inp-newob-2">
                Объявление активно до: 
                <input type="date" name="expires_in" min="<?= $todayHtml ?>" max="<?= $plusYearHtml ?>" value="<?= $plusMonthHtml ?>" class="inp-newob">
                <input type="text" placeholder="Дни и часы работы (например, &laquo;с 9 утра до 12 вечера, пн-сб&raquo;)" name="time_of_work" class="inp-newob-2">
                <textarea class="are-new" name="comment" placeholder = "Комментарий к объявлению"><?php isset($comment) ? print $comment : ''; ?></textarea>
                <input class="inp-newob" type="password" name="password" placeholder="Пароль">
            </div>
            <div class="newob-create">
                <button type="submit" name="submit" value="1" class="btn-create"><i><img src="/template/bit.team/img/icon/i-new.png" alt=""></i>Опубликовать объявление</button>
            </div>
            <div class="clear"></div>
        </form>
    </div>
<?php endif; ?>


<?php require_once ROOT . '/views/layouts/footer.php'; ?>