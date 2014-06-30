<header>
    <a href="index.html"><img src="images/SilikonUniLogo.png" alt="logo" /></a>
    <nav>
        <ul>
            <?php foreach ($view->getPages() as $key => $pages): ?>
            <li>
                <a href="<?=$pages[View::KEY_URL];?>" <?= $view->isCurrent($pages[View::KEY_URL]) ? "class='current'" : "";?> title="<?=$pages[View::KEY_TITLE];?>"><?=$pages[View::KEY_HEADERR];?></a>
                <?php if (is_array($pages[View::KEY_SUB])): ?>
                    <ul class="sub-nav-list">
                        <?php foreach ($pages[View::KEY_SUB] as $subPage): ?>
                        <li>
                            <a href="<?=$subPage[View::KEY_URL];?>" <?= $view->isCurrent($pages[View::KEY_URL]) ? "class='current'" : "";?> title="<?=$subPage[View::KEY_TITLE];?>"><?=$subPage[View::KEY_HEADER];?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif;?>
            </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>