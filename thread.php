<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Не работает скрипт // программирование</title>
    <link rel="stylesheet" href="board-style.css">
</head>
<body>

<div class="l-header">
    <div class="wrap">
        <h1>Не работает скрипт</h1>
    </div>
    <div class="overlay"></div>
</div>

<div class="page-thread">

    <div class="b-threads-list">
        <div class="b-thread">        
            <?php require __DIR__.'/thread-body.php' ?>

            <form action="" class="b-in-thread-form b-big-form">
                <div class="row row-header">
                    <h2>Вам слово</h2>
                    <p class="mb-0">Хотите добавить свой комментарий? 
                    Пожалуйста, воспользуйтесь этой формой.</p>
                </div>

                <div class="row">
                    <div class="row-comment">Ведите себя воспитанно. Невоспитанных ловят
                    наши коты-модераторы.</div>
                    <label class="row-label" for="add-text">Комментарий:</label>
                    <textarea id="add-text" class="textarea-wide textarea-medium">Код надо писать не как 
попало, а аккуратно и красиво. Почему? Потому, что на неакуратно написанный 
код не хочется даже смотреть.

Если тебе лень выравнивать код руками, закачай его на http://beta.phpformatter.com/ и
нажми «format». Робот исправит выравнивание и отступы в мгновение ока. 

Самый распространенный стандарт оформления — это Zend Coding Guides 
(http://framework.zend.com/manual/1.12/en/coding-standard.html — на англ. яз.),
вот их суть:

- переменные и функции пишутся с маленькой буквы, _ не используется, 
используется camelCase, пример: $x, $numberOfPeople, printResults()
- Название функции начинается с глагола, в стиле «сделайЧтоТо»
- не знаешь английский? Не беда, в 21 веке есть решение этой проблемы. Не пиши транслитом,
открой лучше Гугл Транслейт или slovari.yandex.ru и найди название для переменной там
- в именах классов используется CamelCase, первая буква большая, «_» может использоваться
- мы предпочитаем подстановку переменных вместо конкатенации строк: "I am $age years old" —
хорошо, 'I am ' . $age . ' years old' — плохо 
- мы используем для отступов 4 пробела (можно настроить редактор, чтобы при нажатии Tab
он вставлял 4 пробела)
- скобки в for и if/else ставятся так:</textarea>
                </div>

                <div class="row">            
                    <label class="row-label" for="add-name">Ваше имя:</label>
                    <input type="text" id="add-name" class="input-wide">
                    <div class="row-hint">не обязательно</div>
               </div>

               <div class="row row-buttons">
                    <button class="button-action button-main">Добавить комментарий</button>
                    <a href="board.php" class="button-left back-link">← вернуться на главную</a>
               </div>
           </form>            
        </div>
    </div>
</div>

</body>
</html>