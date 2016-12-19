<?php require_once ROOT . '/views/layouts/cabinet/header.php'; ?>

<div class="title-lk-block-2">
    <a href="/cabinet/placebill" class="link-newob"></a>
    <h4>Активные объявления</h4>
    <div class="clear"></div>
</div>
<div class="content-lk-2">
    <?php if (@count($adses) == 0): ?>
        <div class="informate-messege">    
            У вас пока нет объявлений.<br><br> <a href="/cabinet/placebill">Создать</a>
        </div>
    <?php else: ?>
        <div class="table-lk-2">
            <table>
                <tr>
                    <th><span class="lrft-pol-td">Пользователь</span></th>
                    <th>Сумма сделки</th>
                    <th>Дата</th>
                    <th class="right-td">Тип сделки</th>
                    <th class="right-td">Статус</th>
                    <th class="right-td">Просмотр</th>
                    <th class="width-td-lk"></th>
                </tr>
                <?php foreach ($adses as $ads): ?>
                    <tr>
                        <td><span class="lrft-pol-td"> <?= User::getUsernameById($ads['user_id']) ?></span></td>
                        <td><?= Currency::getSymbol($ads['currency_id']), ' ', $ads['min_amount'], ' - ', $ads['max_amount'] ?></td>
                        <td><?= date('d.m.Y', strtotime($ads['created_on'])) ?></td>
                        <td class="right-td"><span class="red-lk"><?= Advertisement::getInvertStringType($ads['type']) ?></span></td>
                        <td class="right-td"><?= Advertisement::getStatusStringType($ads['status']) ?></td>
                        <th class="right-td"><a href="/cabinet/info?ads=<?= $ads['id_advertisement'] ?>">Просмотреть</a></th>
                        <td><a href="/cabinet/delAds?ads=<?= $ads['id_advertisement'] ?>" class="tab-close"></a><a href="/cabinet/info?ads=<?= $ads['id_advertisement'] ?>" class="tab-red"></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    <?php endif; ?>
    <div class="clear"></div>
</div>

<?php require_once ROOT . '/views/layouts/footer.php'; ?>


