
<div class="headerMain">
    <div class="headerSeeInfo">
        <p> Статус действий:<?php if (isset($_SESSION['headerInfo'])) print $_SESSION['headerInfo'];
            $_SESSION['headerInfo'] = "";?></p>
    </div>
    <a href="?addProduct">Добавить товар</a>
    <a href="?seePhone">посмотреть телефоны</a>

</div>