<div class="headerMain">
    <div class="headerSeeInfo">
        <p> Статус действий:<?php if (isset($_SESSION['headerInfo'])) print $_SESSION['headerInfo'];
            $_SESSION['headerInfo'] = ""; ?></p>
    </div>
    <div class="aNav">
        <a href="../index.php">Вернуться в магазин</a>
        <a href="?show=addProducts">Добавить товар</a>
        <a href="?show=phones">посмотреть телефоны</a>
        <a href="?show=books">посмотреть книги</a>
        <a href="?show=clothe">посмотреть одежду</a>
        <a href="?show=products">посмотреть продукты</a>
        <a href="?show=users">посмотреть Users</a>
    </div>

</div>