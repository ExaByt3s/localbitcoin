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
                
                <!--Currency::getExchangeRate('rur')'usd'-->
                <select class="sel-new-ob" name="currency_id">
                    <option disabled>Выберите валюту</option>
                    <option value = "1">USD</option>    
                    <option selected="selected" value = "2">RUR</option>
                </select>
                <select class="sel-new-ob" name="payment_id">
                    <option disabled>Выберите способ оплаты</option>
                    <option value = "1">Банковской картой (VISA, MasterCard)</option>
                    <option value = "2">WebМоney</option>
                    <option value = "3">QIWI Wallet</option>
                    <option value = "4">Яндекс.Деньги</option>
                </select>
                <div id="insert_here">
                    <?php foreach ($requistes as $req): ?>
                        <div class="container-lk-1">
                            <div class="in-lk-1">
                                <a class="fa fa-times rm-cart" style="top: 0px;" aria-hidden="true" href="/cabinet/placebill?rm=<?= $req['id'] ?>"></a>
                                <img src="../../template/bit.team/img/system_oplat/op<?= $req['system_id'] ?>.png" alt="">
                                <span class="text-lk-add"><?= $req['card_num'] ?></span>
                                <div class="clear"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="block-newcart block-newcart-2" style="display:flex;flex-direction: column">
                    <div class="add-adv-sys-container">
                        <input type="hidden" id="system_id" value="1">
                        <input type="hidden" id="user_id" value="<?= User::getUserIdFromSession()?>">
                        <div class="container-lk-1" id="sys-1">
                        <div class="in-lk-1">
                            <button class="btn-add-cart" type="button"></button>
                            <img src="../../template/bit.team/img/system_oplat/op6.png" alt="">
                            <input type="text" placeholder="Введите реквизиты" id="6">
                            <div class="clear"></div>
                        </div>
                        </div>
                        <div class="container-lk-1" id="sys-2">
                        <div class="in-lk-1">
                            <button class="btn-add-cart" type="button"></button>
                            <img src="../../template/bit.team/img/system_oplat/op5.png" alt="">
                            <input type="text" placeholder="Введите реквизиты" id="5">
                            <div class="clear"></div>
                        </div>
                        </div>
                        <div class="container-lk-1" id="sys-3">
                        <div class="in-lk-1">
                            <button class="btn-add-cart" type="button"></button>
                            <img src="../../template/bit.team/img/system_oplat/op4.png" alt="">
                            <input type="text" placeholder="Введите реквизиты" id="4">
                            <div class="clear"></div>
                        </div>
                        </div>
                        <div class="container-lk-1" id="sys-4">
                        <div class="in-lk-1">
                            <button class="btn-add-cart" type="button"></button>
                            <img src="../../template/bit.team/img/system_oplat/op3.png" alt="">
                            <input type="text" placeholder="Введите реквизиты" id="3">
                            <div class="clear"></div>
                        </div>
                        </div>
                        <div class="container-lk-1" id="sys-5">
                        <div class="in-lk-1">
                            <button class="btn-add-cart" type="button"></button>
                            <img src="../../template/bit.team/img/system_oplat/op2.png" alt="">
                            <input type="text" placeholder="Введите реквизиты" id="2">
                            <div class="clear"></div>
                        </div>
                        </div>
                        <div class="container-lk-1" id="sys-6">
                        <div class="in-lk-1">
                            <button class="btn-add-cart" type="button"></button>
                            <img src="../../template/bit.team/img/system_oplat/op1.png" alt="">
                            <input type="text" placeholder="Введите реквизиты" id="1">
                            <div class="clear"></div>
                        </div>
                        </div>
                    </div>
                    <a class="btn-new-cart btn-new-cart-2" id="add_paymethod" style="min-width: 230px;">   
                    </a>
                </div>

                <div class="block-system-cart">
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
                <input type="number" step="0.1" name="price" class="inp-newob-2" placeholder="Размер прибыли которую вы хотите получить в %">
                <input style="padding-right:5px" type="number" step="0.1" name="min_amount" class="inp-newob" placeholder="Минимальный лимит транзакций">
                <input style="padding-right:5px" type="number" step="0.1" name="max_amount" class="inp-newob" placeholder="Максимальный лемит транзакций">
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