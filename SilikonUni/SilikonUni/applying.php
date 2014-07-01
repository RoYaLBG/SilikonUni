<?php require_once 'app.php'; /* @var $view View */ ?>﻿
<?php $view->partial()->header(); ?>
        <section class="oneColumnSection">
            <article>
                <header><h2>Как да кандидатстваме</h2></header>
                <ul>
                    <li>Всички желаещи са добре дошли в <a href="https://softuni.bg/apply">СиликонУни</a> независимо дали могат да пеят!</li>
                    <li>
                        Не е необходимо да имате предишен опит на сцена, нито завършено средно образование
                        – на приемния изпит ще бъде оценен вашият артистичен и скандален потенциал.
                    </li>
                    <li>
                        За приема през есента на 2014г. се организира подготвителен курс  2 месеца – стартира началото на м. Юли
                        в Крапец и завършва началото на м. Септември в Резово – ще се проведе на живо във всички видни Поп фолк
                        заведения по цялото Черноморието в най-актуалния сезон. По време на курса в ще усвоите всички основни умения –
                        мятане на гюбеци, пеене на плейбек, правене на селфита,  soft skills – как да привлека вниманието по
                        най-скандален начин и др.
                    </li>
                    <li>Приемните изпити ще се проведат през м. Септември пред комисия от 3 души.</li>
                </ul>
            </article>
            <article>
                <div id="leftfieldset">
                    <fieldset id="left">
                        <legend>Основна информация</legend>
                        <input type="text" name="first-name" placeholder="Име" class="non-important">
                        <input type="text" name="last-name" placeholder="Фамилия" class="non-important">
                        <input type="email" name="nickname" placeholder="Артистичен псевдоним" class="non-important"
                               pattern="[a-zA-Z0-9_]{3,}@[a-zA-Z0-9_]{3,}.[a-zA-Z0-9_]{2,4}">
                        <input type="tel" name="phone-number" placeholder="Телефон" class="non-important"
                               pattern="\+[0-9]{3}\-[0-9]{3}\-[0-9]{2}\-[0-9]{2}\-[0-9]{2}">
                        <label for="birthday" class="label">Рожден ден</label>
                        <div id="birthday">
                            <input type="text" name="date" placeholder="Дата" />
                            <input type="text" name="month" placeholder="Месец" />
                            <select>
                                <option selected="selected">Година</option>
                                <option value="young">Не се в разплодна възраст</option>
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
                        <div id="gender">
                            <input type="radio" name="sex" value="female" id="female"><label for="female">Жена</label>
                            <input type="radio" name="sex" value="male" id="male"><label for="male">Мъж</label>
                            <input type="radio" name="sex" value="other" id="other"><label for="other">Травестит</label>
                        </div>
                    </fieldset>
                </div>
                <div id="rightfieldset">
                    <fieldset id="right">
                        <legend>Важна информация</legend>
                        <input type="text" name="bust" placeholder="Гръдна обиколка" class="important-info" required>
                        <input type="text" name="hair-colour" placeholder="Цвят на косата" class="important-info" required>
                        <select name="plastic-surgery" id="plastic-surgery" class="three-inarow" required>
                            <option selected="selected">Имате ли пластични операции</option>
                            <option value="L">Не, но това ми е детска мечта</option>
                            <option value="XL">Да - 1</option>
                            <option value="XXL">Между 2 - 5</option>
                            <option value="XXXL">Не мога да им хвана края вече</option>
                        </select>
                        <input id="register-button" type="submit" value="Снимка *" />
                        <p>Имате ли си спонсор?</p>
                        <div id="sponsor">
                            <input type="radio" name="sex" value="have-sponsor" id="yes"><label for="female">
                                Да, вече имам спонсор,
                                който ще ми помогне в бъдещата кариера
                            </label> <br>
                            <input type="radio" name="sex" value="no-sponsor" id="no"><label for="male">
                                Не, бих желала СиликонУни
                                да ми помогнИ
                            </label>
                        </div>
                        <label for="personal" class="label">Друга важна информация</label>
                        <textarea name="personal-info" placeholder="Разкажете ни нещо пикантно за себе си" required></textarea>
                        <p>* приемат се само снимки по бански (може и без)!!!</p>
                    </fieldset>
                </div>
            </article>
        </section>
<?php $view->partial()->footer(); ?>