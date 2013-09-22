<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="board-style.css">
</head>
<body>
 <div class="l-header-clean">
    <h1>Начать новый тред</h1>
</div>
<div class="page-add-form">
   <form action="" class="b-add-thread-form b-big-form">
        <div class="row">
            <label class="row-label" for="add-title">Заголовок:</label>
            <input type="text" id="add-title" class="input-wide" value="Проблема с PHP">
            <div class="row-hint">не обязательно</div>
        </div>

        <label class="row-error" for="add-text">
            Пожалуйста, не используйте слишком сложные слова в тексте поста.
        </label>
        
        <div class="row">
            <div class="row-comment">Пожалуйста, не пишите здесь ничего плохого, иначе наши суровые 
                модераторы вынуждены будут лишить вас этой возможности.</div>
            <label class="row-label" for="add-text">Текст поста:</label>
            <textarea id="add-text" class="textarea-wide textarea-large">Код надо писать не как попало, а аккуратно и красиво. Почему? Потому, что на неакуратно написанный код не хочется даже смотреть.

Если тебе лень выравнивать код руками, закачай его на http://beta.phpformatter.com/ и нажми «format». Робот исправит выравнивание и отступы в мгновение ока. 

Самый распространенный стандарт оформления — это Zend Coding Guides (http://framework.zend.com/manual/1.12/en/coding-standard.html — на англ. яз.), вот их суть:

- переменные и функции пишутся с маленькой буквы, _ не используется, используется camelCase, пример: $x, $numberOfPeople, printResults()
- Название функции начинается с глагола, в стиле «сделайЧтоТо»
- не знаешь английский? Не беда, в 21 веке есть решение этой проблемы. Не пиши транслитом, открой лучше Гугл Транслейт или slovari.yandex.ru и найди название для переменной там
- в именах классов используется CamelCase, первая буква большая, «_» может использоваться
- мы предпочитаем подстановку переменных вместо конкатенации строк: "I am $age years old" — хорошо, 'I am ' . $age . ' years old' — плохо 
- мы используем для отступов 4 пробела (можно настроить редактор, чтобы при нажатии Tab он вставлял 4 пробела)
- скобки в for и if/else ставятся так:</textarea>
        </div>

        <div class="row">            
            <label class="row-label" for="add-name">Ваше имя:</label>
            <input type="text" id="add-name" class="input-wide">
            <div class="row-hint">не обязательно</div>
       </div>

       <div class="row row-buttons">
            <button class="button-action button-main">Создать тред</button>
            <a href="board.php" class="button-left back-link">← вернуться на главную</a>
       </div>
   </form>
</div>
</body>
</html>