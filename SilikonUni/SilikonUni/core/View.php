<?php

class View {

    const KEY_MAIN = 'main';
    const KEY_SUB = 'sub';
    const KEY_TITLE = 'title';
    const KEY_URL = 'url';
    const KEY_CLASS = 'class';
    const KEY_HEADER = 'header';
    const KEY_INFO = 'info';

    private $_pages = array(
        self::KEY_MAIN => array(
            self::KEY_URL => 'news.html',
            self::KEY_TITLE => 'news',
            self::KEY_TITLE => 'Новини',
            self::KEY_SUB => false
        ),

        self::KEY_MAIN => array(
            self::KEY_URL => '#',
            self::KEY_TITLE => 'About the university',
            self::KEY_TITLE => 'За университета',
            self::KEY_SUB => array(
                array(
                    self::KEY_URL => 'aboutus.html',
                    self::KEY_TITLE => 'about us',
                    self::KEY_TITLE => 'За нас',
                ),
                array(
                    self::KEY_URL => 'partners.html',
                    self::KEY_TITLE => 'partners',
                    self::KEY_TITLE => 'Партньори',
                ),
                array(
                    self::KEY_URL => 'trainers.html',
                    self::KEY_TITLE => 'trainers us',
                    self::KEY_TITLE => 'Преподаватели',
                ),
                array(
                    self::KEY_URL => 'applying.html',
                    self::KEY_TITLE => 'applying',
                    self::KEY_TITLE => 'Кандидатстване',
                ),
            )
        ),

        self::KEY_MAIN => array(
            self::KEY_URL => 'trainings.html',
            self::KEY_TITLE => 'trainings',
            self::KEY_TITLE => 'Обучения',
            self::KEY_SUB => array(
                array(
                    self::KEY_URL => 'trainings.html#chalga',
                    self::KEY_TITLE => 'chalga',
                    self::KEY_TITLE => 'Чалга примадона',
                ),
                array(
                    self::KEY_URL => 'trainings.html#greek',
                    self::KEY_TITLE => 'greek',
                    self::KEY_TITLE => 'Хит певец на гръцки песни',
                ),
                array(
                    self::KEY_URL => 'trainings.html#travestite',
                    self::KEY_TITLE => 'travestite',
                    self::KEY_TITLE => 'Как да стана известен травестит',
                ),
                array(
                    self::KEY_URL => 'trainings.html#fastTrack',
                    self::KEY_TITLE => 'fast track',
                    self::KEY_TITLE => 'Fast track курсове',
                ),
                array(
                    self::KEY_URL => 'trainings.html#threeWeeks',
                    self::KEY_TITLE => 'three weeks',
                    self::KEY_TITLE => 'Стани звезда за три седмици',
                ),
            )
        ),

        self::KEY_MAIN => array(
            self::KEY_URL => 'contacts.html',
            self::KEY_TITLE => 'contacts',
            self::KEY_TITLE => 'Контакти',
            self::KEY_SUB => false
        ),
    );

    public function isCurrent($page) {
        return $page == $_SERVER['PHP_SELF'];
    }

    public function getPages() {
        return $this->_pages;
    }




}