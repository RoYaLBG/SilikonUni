<?php require_once 'app.php'; /* @var $view View */ ?>﻿
<?php $view->partial()->header(); ?>
<section class="oneColumnSection">
    <article>
        <header>
            <h2>Как да кандидатстваме</h2>
        </header>
        <p>Всички желаещи са добре дошли в <a href="https://softuni.bg/apply">Silikon University</a> независимо дали могат да пеят!</p>
        <p>
            Не е необходимо да имате предишен опит на сцена, нито завършено средно образование
                        – на приемния изпит ще бъде оценен вашият артистичен и скандален потенциал.
        </p>
        <p>
            За приема през есента на 2014г. се организира подготвителен курс  2 месеца – стартира началото на м. Юли
                        в Крапец и завършва началото на м. Септември в Резово – ще се проведе на живо във всички видни Поп фолк
                        заведения по цялото Черноморието в най-актуалния сезон. По време на курса в ще усвоите всички основни умения –
                        мятане на гюбеци, пеене на плейбек, правене на селфита,  Soft Skills – как да привлека вниманието по
                        най-скандален начин..
        </p>
        <p>
            За най-схватливите ще има практика по Hard Skills - работа с твърди предмети.
        </p>
        <p>Приемните изпити ще се проведат през м. Септември пред комисия от 3 души.</p>
    </article>
    <article>
        <form>
            <fieldset>
                <legend>Важна информация</legend>
                <input type="text" name="bust" placeholder="Гръдна обиколка" class="important-info" required>
                <input type="text" name="hair-colour" placeholder="Цвят на косата" class="important-info" required>

                <select name="plastic-surgery" id="plastic-surgery" class="three-inarow" required>
                    <option selected="selected">Имате ли пластични операции</option>
                    <option value="L">Не, но това ми е детска мечта</option>
                    <option value="XXL">Между 2 - 5</option>
                    <option value="XXXL">Не мога да им хвана края вече</option>
                </select>
                <input type="button" value="Снимка *" />
                <p>* приемат се само снимки по бански (може и без)!!!</p>

                <div>
                    <input type="radio" name="sex" value="have-sponsor" id="yes" /><label for="yes">Имам си спонсор</label><br />
                    <input type="radio" name="sex" value="no-sponsor" id="no"><label for="no">Нямам спонсор, бих желал/а Silikon University да ми помогнИ</label>
                </div>
                <br />
                <label for="personal" class="label">Друга важна информация</label>
                <textarea id="personal" placeholder="Разкажете ни нещо пикантно за себе си" required></textarea>
            </fieldset>
            <fieldset>
                <legend>Основна информация</legend>
                <input type="text" name="first-name" placeholder="Име">
                <input type="text" name="last-name" placeholder="Фамилия">
                <input type="text" name="nickname" placeholder="Артистичен псевдоним"
                    pattern="[a-zA-Z0-9_]{3,}@[a-zA-Z0-9_]{3,}.[a-zA-Z0-9_]{2,4}" title="nickname">
                <input type="tel" name="phone-number" placeholder="Телефон"
                    pattern="\+[0-9]{3}\-[0-9]{3}\-[0-9]{2}\-[0-9]{2}\-[0-9]{2}" title="phone">
                <label for="birthday">Рожден ден</label>
                <div>
                    <select id="birthday" name="day">
                        <option>Ден</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <select name="month">
                        <option>Месец</option>
                        <option value="1">Януари</option>
                        <option value="2">Февруари</option>
                        <option value="3">Март</option>
                        <option value="4">Април</option>
                        <option value="5">Май</option>
                        <option value="6">Юни</option>
                        <option value="7">Юли</option>
                        <option value="8">Август</option>
                        <option value="9">Септември</option>
                        <option value="10">Октомври</option>
                        <option value="11">Ноември</option>
                        <option value="12">Декември</option>
                    </select>
                    <select>
                        <option selected="selected">Година</option>
                        <option value="young">Не сте в разплодна възраст</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="old">Мноо сте дърт за СиликонУни</option>
                    </select>
                </div>
                <div>
                    <input type="radio" name="sex" value="female" id="female"><label for="female">Жена</label>
                    <input type="radio" name="sex" value="male" id="male"><label for="male">Мъж</label>
                    <input type="radio" name="sex" value="other" id="other"><label for="other">Травестит</label>
                </div>
                <input type="submit" value="КАНДИДАТСТВАЙ" />
            </fieldset>
        </form>
    </article>
</section>
<?php $view->partial()->footer(); ?>