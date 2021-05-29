<nav class="top-nav">
    <ul>
        <li>
            <a href="<?php echo URLROOT; ?>/index">Pocetna</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/about">O nama</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/projects">Projekti</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/posts">Blog</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/contact">Kontakt</a>
        </li>
        <li class="btn-login">
            <?php if(isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/users/logout">Odjava</a>
            <?php else : ?>
                <a href="<?php echo URLROOT; ?>/users/login">Prijava</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>