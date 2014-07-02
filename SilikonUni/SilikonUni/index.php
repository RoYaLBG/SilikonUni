<?php require_once 'app.php'; /* @var $view View */ ?>﻿
<?php $view->partial()->header(); ?>
<section class="indexSection">
    <article>
        <header>
            <h1>Нашата кауза е да направим България Силиконовата долина на Европа!!!
            </h1>
            <div>
                <img src="images/tits.gif" alt="">
            </div>
            <h2 class="blinking"><a href="https://softuni.bg/about" target="_blank">SILIKON UNIVERSITY</a> - вашият път към успеха!</h2>

        </header>
    </article>
</section>
<section class="threeColumnsSection">
    <!--Той всъщност ще е под секшъна, но смислово е aside, за това съм го сложила така-->
    <article>
        <header>
            <h2>За Университета</h2>
        </header>
        <p>
            За нас, <a href="softuni.bg" target="_blank">Silikon University</a>, както и за цялата Силиконова индустрия, е най-важен практическият опит.
            Нашата мисия е да направим хората, които обучаваме, истински професионалисти
            в Силиконовата индустрия и да им съдействаме в намирането на работа.
        </p>
    </article>
    <article>
        <header>
            <h2>Fast Track курсове</h2>
        </header>
        <p>
            За най-пробивните ни млади надежди предвиждаме специално ускорено обучение!
                     За да свършите бързо и успешно е най-добре да си премахнете сливиците предварително.
        </p>
        <p>
            Забележка: Задължителният силикон, който трябва да си добавите е в размер на 400 кубика.
                     Местата на слагане са по Ваш избор!
        </p>
        <p>
            Очаквайте скоро обучение по <a href="http://www.investopedia.com/terms/h/hard-skills.asp" target="_blank">Hard Skills</a>
            (работа с твърди... неща)!
        </p>
    </article>
    <article>
        <header>
            <h2>Новини</h2>
        </header>
        <ul>
            <li>
                <a href="news.php">Прашка Васева - The great comeback</a>
            </li>
            <li>
                <a href="news.php">Зазиз отново увеличи ...</a>
            </li>
            <li>
                <a href="news.php">Благотворителен концерт на звездите</a>
            </li>
        </ul>
    </article>
</section>
<?php $view->partial()->footer(); ?>