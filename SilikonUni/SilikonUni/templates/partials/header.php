<?php /* @var $this Partial */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?= $this->getView()->getTitle(); ?></title>
        <?php foreach ($this->getView()->getCss() as $css): ?>
            <link href="<?= APPLICATION_HOST . View::FOLDER_CSS . $css; ?>" rel="stylesheet" />
        <?php endforeach; ?>
        <meta charset="utf-8" />
        <?php foreach ($this->getScripts() as $script): ?>
            <?= $script; ?>
        <?php endforeach; ?>
        <?php foreach ($this->getStyles() as $style): ?>
            <?= $style; ?>
        <?php endforeach; ?>
    </head>
    <body>
        <div id="wrapper">
            <header>
                <a href="<?= APPLICATION_HOST . DIRECTORY_SEPARATOR . 'index.php';?>">
                    <img src="<?= APPLICATION_HOST . View::FOLDER_IMAGES . 'SilikonUniLogo.png'; ?>" alt="logo" />
                </a>
                <audio controls autoplay>
                    <source src="/media/Doko-Doko.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                </audio>
                <nav>
                    <ul>
                        <?php foreach ($this->getView()->getPages() as $key => $pages): ?>
                            <li>
                                <a href="<?= $pages[View::KEY_MAIN][View::KEY_URL]; ?>" <?= $this->getView()->isCurrent($pages[View::KEY_MAIN][View::KEY_URL]) ? "class='current'" : ""; ?> title="<?= $pages[View::KEY_MAIN][View::KEY_TITLE]; ?>"><?= $pages[View::KEY_MAIN][View::KEY_HEADER]; ?></a>
                                <?php if (is_array($pages[View::KEY_MAIN][View::KEY_SUB])): ?>
                                    <ul class="sub-nav-list">
                                        <?php foreach ($pages[View::KEY_MAIN][View::KEY_SUB] as $subPage): ?>
                                            <li>
                                                <a href="<?= $subPage[View::KEY_URL]; ?>" <?= $this->getView()->isCurrent($subPage[View::KEY_URL]) ? "class='current'" : ""; ?> title="<?= $subPage[View::KEY_TITLE]; ?>"><?= $subPage[View::KEY_HEADER]; ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </header>