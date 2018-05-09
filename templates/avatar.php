<?php if($is_auth == true): ?>
    <div class="user-menu__image">
        <img src= <?= $user_avatar?> alt="Пользователь" width="40" height="40">
    </div>
    <div class="user-menu__logged">
        <p><?= $user_name ?></p>
    </div>
    <?php else: ?>
    <ul class="user-menu__list">
        <li class="user-menu__item">
            <a href="#">Регистрация</a>
        </li>
        <li class="user-menu__item">
            <a href="#">Вход</a>
        </li>
    </ul>
<?php endif;?>
