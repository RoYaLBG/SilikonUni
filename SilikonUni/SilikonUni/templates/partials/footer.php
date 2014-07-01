<?php /* @var $this Partial */ ?>
<footer>
    <?php foreach ($this->getView()->getFooterPages() as $footerPages): ?>
            <section>
                <h2><?= $footerPages[View::KEY_MAIN][View::KEY_HEADER]; ?></h2>
                <?php if (is_array($footerPages[View::KEY_MAIN][View::KEY_SUB])): ?>
                    <ul>
                        <?php foreach ($footerPages[View::KEY_MAIN][View::KEY_SUB] as $page): ?>
                            <li>
                                <a href="<?= $page[View::KEY_URL]; ?>" title="<?= $page[View::KEY_TITLE]; ?>"><?= $page[View::KEY_HEADER]; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </section>
    <?php endforeach; ?>
</footer>
</div>
</body>
</html>