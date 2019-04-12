
<div class="headerMain">
    <div class="headerSeeInfo">
        <p> Статус действий:<?php if (isset($_SESSION['headerInfo'])) print $_SESSION['headerInfo'];
            $_SESSION['headerInfo'] = "";?></p>
    </div>
    <a href="?show=addProducts">Добавить товар</a>
    <a href="?show=phones">посмотреть телефоны</a>
    <a href="?show=books">посмотреть книги</a>

</div>