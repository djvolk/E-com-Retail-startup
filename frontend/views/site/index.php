<?php
/* @var $this yii\web\View */

$this->title = 'Тестовое задание для компании E-com Retail startup';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Тестовое задание</h1>
        <p>для компании E-com Retail startup</p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Условия и технологии</h2>
                <p>На выполнение задания дается максимум 3 дня.</p>
                <p>Использовать фреймворк Yii2 (Advanced)​и Bootstrap. </p>
                <p>База данных MySQL. Веб­приложение должно быть адаптивным.</p>
                <p>Готовое задание выложить на GitHub или BitBucket и не забудьте вложить dump базы</p>
                <p>*.sql (лучше будет, если вы напишите миграции).</p>

                <div class="alert alert-success">Выполнял несколько часов.</div>
            </div>
            <div class="col-lg-4">
                <h2>Задание</h2>
                <p>Создать CRUD приложение(To do list) на фреймворке Yii2. При открытии главной страницы появляется список дел. </p>
                <p>Каждое дело можно создать, отредактировать, удалить, просмотреть на отдельной странице.</p>
                <div class="alert alert-success">Создал приложение через CRUD генератор в gii.</div>
            </div>
            <div class="col-lg-4">
                <h2>База данных</h2>

                <p>Данные хранятся в 2х таблицах:</p>
                </p> 1) todolists</p>
                </p> 2) todolistdesc</p>
                </p> В таблице todolist хранятся дела</p>
                </p> В таблице todolistdesc хранится описания дел и они ссылаются на todolist</p>

                <div class="alert alert-success">Написал миграции.</div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-6">
                <h2>Ссылки</h2>
                <p> Ссылки должны быть ЧПУ Пример: example.com/lists/ </p>
                <div class="alert alert-success"><a href="/lists">/lists</a></div>
            </div>    

            <div class="col-lg-6">
                <h2>Дизайн</h2>
                <p>Дизайн на свое усмотрение (можно оставить стандартный)</p>
                <div class="alert alert-success">Оставил стандартный.</div>
            </div>             

        </div>

    </div>
</div>
