<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Программирование // доска обсуждений</title>
    <link rel="stylesheet" href="board-style.css">
</head>
<body>

<div class="l-header">
    <div class="wrap">
        <h1>Программирование</h1>
    </div>
    <div class="overlay"></div>
</div>

<div class="page-threads-list">
    <div class="b-top-actions clearfix">
        <a href="add-thread.php" class="button button-action">Создать новый тред</a>
    </div>

    <div class="b-threads-list">
        <div class="b-thread">
            <div class="b-post first-post">            
                <div class="post-number">#36541</div>
                <h2 class="thread-topic">Не работает скрипт</h2>
                
                <p>Здравствуйте! Есть скрипт:</p>
                
                <pre><code>for ($i = 1; $i &lt; 60; $i++)
{
  sleep(1);
}
echo &quot;Работа скрипта закончена&quot;;</code></pre>

                <p>Этот скрипт выполняется 60 секунд, и выдаёт ответ. В случае 
                изменения <code>60</code> на <code>65</code> скрипт не останавливает свою работу и
                 зависает (браузер продолжает показывать обработку скрипта).</p>
                
                <p>В <code>php.ini</code> прописано <code>max_execution_time = 180000</code>, также 
                в скрипте прописывал <code>set_time_limit(120)</code> и 
                <code>ini_set('max_execution_time', 120)</code>, даже в
                 <code>.htaccess</code> прописывал…

                <div class="hide-text">
                <p> <code>php_value max_execution_time 180000</code>.</p>

                <p>В <code>phpinfo()</code> все мои изменения показывал.
                У меня выделенный сервер. Ответ от поддержки:</p>

                <blockquote>Выполнение скриптов зависит от настройки вашего программного обеспечения.</blockquote>
                <p>На Денвере тот же скрипт обрабатывается до 500 секунд!
                Подскажите, пожалуйста, как заставить скрипт обрабатываться максимально возможное 
                количество времени на моём сервере?</p>
                </div>
            </div>

            <div class="b-post-info-line">
                Пропущено 120 комментариев
            </div>

            <div class="b-post-last-comments">
                <div class="b-comment">
                    <div class="post-number">#36596</div>
                    <p>Что по вашей задумке должен делать тот основной трехминутный скрипт?</p>
                </div>

                <div class="b-comment">
                    <div class="post-number">#36598</div>
                    <p>Обновление информации о товаре в базе данных. Но, по-моему, это не суть.
                     Есть конкретный пример, который выполняется ровно минуту и не более. Может
                      на сервере есть какое-то ограничение, которое "перебивает" вводимые мной настройки?</p>
                </div>

                <div class="b-comment">
                    <div class="post-number">#36601</div>
                    <p><a href="" class="b-user-ref">&gt;&gt;36541</a>, всегда помните, что взаимодействие по сети изначально ненадежно и удаленной 
                    стороне нельзя доверять. Проверяйте целостность файла и его формат.</p>
                </div>
            </div>

            <div class="b-post-actions clearfix">
                <button class="button-action button-reply">Добавить комментарий</button>
                <button class="button-action button-show-thread">Перейти в тред</button>
            </div>
        </div>
        <div class="b-thread">
            <div class="b-post first-post">            
                <div class="post-number">#36765</div>
                <h2 class="thread-topic">Печалька ((</h2>                

                <p>Добрый день!</p>

                <p>Никак не получается составить регулярное выражение.</p>

                <p>Есть html: &lt;img alt=&quot;&quot; src=&quot;images/ads_200x200.png&quot; style=&quot;width: 250px; height: 250px; float:left; border-width: 1px; border-style: solid&quot;&gt; <br />
                нужно найти все картинки с именем ads_200x200.png, удалить все атрибуты кроме src, и оставить float, если он указан в стилях. </p>

                <p>Т.е. если флоат не указан, то результат должен быть такой:<br />
                &lt;img src=&quot;images/ads_200x200.png&quot;&gt; </p>
                <div class="hide-text">
                <p>А если указан, то такой:<br />
                &lt;img src=&quot;images/ads_200x200.png&quot; style=&quot;float:left&quot;&gt; </p>

                <p>Пытаюсь разобраться, но ничего не выходит :( </p>

                <p>Спасибо!</p></div>
            </div>

            <div class="b-post-info-line">
                Пропущено 13 комментариев
            </div>

            <div class="b-post-last-comments">
                <div class="b-comment">
                    <div class="post-number">#36871</div>
                    <p>XPath бы вам помог.</p>
                </div>

                <div class="b-comment">
                    <div class="post-number">#36598</div>
                    <p>если вы у вас есть проблема и вы пытаетесь решить ее с помощью регулярок - у вас две проблемы. 
                        Регулярки помогают при разборе html только в ограниченном количестве простых случаев - 
                        когда достаточно работать с разметкой только как с текстом… 
                        </p>
                        <div class="hide-text"><p> В вашем случае необходимо 
                        скормить код xml парсеру и преобразовывать уже получившийся документ (с помощью xslt, 
                        например). Все остальное - извращение.</p></div>
                </div>

                <div class="b-comment">
                    <div class="post-number">#36601</div>
                    <p>ужастно, разбор HTML на таком уровне однозначно и просто решается с помощью XML парсеров и,
                     в дальнейшем, инструметов работы с XML.</p>
                </div>
            </div>

            <div class="b-post-actions clearfix">
                <button class="button-action button-reply">Добавить комментарий</button>
                <button class="button-action button-show-thread">Перейти в тред</button>
            </div>
        </div>
        <div class="b-thread">
            <div class="b-post first-post">            
                <div class="post-number">#36765</div>
                <h2 class="thread-topic">Не работает скрипт</h2>                

                <p>Добрый день!</p>

                <p>Никак не получается составить регулярное выражение.</p>

                <p>Есть html: &lt;img alt=&quot;&quot; src=&quot;images/ads_200x200.png&quot; style=&quot;width: 250px; height: 250px; float:left; border-width: 1px; border-style: solid&quot;&gt; <br />
                нужно найти все картинки с именем ads_200x200.png, удалить все атрибуты кроме src, и оставить float, если он указан в стилях. </p>

                <p>Т.е. если флоат не указан, то результат должен быть такой:<br />
                &lt;img src=&quot;images/ads_200x200.png&quot;&gt; </p>
                <div class="hide-text">
                <p>А если указан, то такой:<br />
                &lt;img src=&quot;images/ads_200x200.png&quot; style=&quot;float:left&quot;&gt; </p>

                <p>Пытаюсь разобраться, но ничего не выходит :( </p>

                <p>Спасибо!</p>
                </div>
            </div>

            <div class="b-post-info-line">
                Пропущено 13 комментариев
            </div>

            <div class="b-post-last-comments">
                <div class="b-comment">
                    <div class="post-number">#36871</div>
                    <p>XPath бы вам помог.</p>
                </div>

                <div class="b-comment">
                    <div class="post-number">#36598</div>
                    <p>если вы у вас есть проблема и вы пытаетесь решить ее с помощью регулярок - у вас две проблемы. 
                        Регулярки помогают при разборе html только в ограниченном количестве простых случаев - 
                        когда достаточно работать с разметкой только как с текстом… </p>
                        <div class="hide-text"><p> В вашем случае необходимо 
                        скормить код xml парсеру и преобразовывать уже получившийся документ (с помощью xslt, 
                        например). Все остальное - извращение.</p></div>
                </div>

                <div class="b-comment">
                    <div class="post-number">#36601</div>
                    <p>ужастно, разбор HTML на таком уровне однозначно и просто решается с помощью XML парсеров и,
                     в дальнейшем, инструметов работы с XML.</p>
                </div>
            </div>

            <div class="b-post-actions clearfix">
                <button class="button-action button-reply">Добавить комментарий</button>
                <button class="button-action button-show-thread">Перейти в тред</button>
            </div>
        </div>

        <div class="b-thread">
            <div class="b-post first-post">            
                <div class="post-number">#36765</div>
                <h2 class="thread-topic">Не работает скрипт</h2>                

                <p>Добрый день!</p>

                <p>Никак не получается составить регулярное выражение.</p>

                <p>Есть html: &lt;img alt=&quot;&quot; src=&quot;images/ads_200x200.png&quot; style=&quot;width: 250px; height: 250px; float:left; border-width: 1px; border-style: solid&quot;&gt; <br />
                нужно найти все картинки с именем ads_200x200.png, удалить все атрибуты кроме src, и оставить float, если он указан в стилях. </p>

                <p>Т.е. если флоат не указан, то результат должен быть такой:<br />
                &lt;img src=&quot;images/ads_200x200.png&quot;&gt; </p>
                <div class="hide-text">
                <p>А если указан, то такой:<br />
                &lt;img src=&quot;images/ads_200x200.png&quot; style=&quot;float:left&quot;&gt; </p>

                <p>Пытаюсь разобраться, но ничего не выходит :( </p>

                <p>Спасибо!</p>
                </div>
            </div>

            <div class="b-post-info-line">
                Пропущено 13 комментариев
            </div>

            <div class="b-post-last-comments">
                <div class="b-comment">
                    <div class="post-number">#36871</div>
                    <p>XPath бы вам помог.</p>
                </div>

                <div class="b-comment">
                    <div class="post-number">#36598</div>
                    <p>если вы у вас есть проблема и вы пытаетесь решить ее с помощью регулярок - у вас две проблемы. 
                        Регулярки помогают при разборе html только в ограниченном количестве простых случаев - 
                        когда достаточно работать с разметкой только как с текстом… </p>
                        <div class="hide-text"><p> В вашем случае необходимо 
                        скормить код xml парсеру и преобразовывать уже получившийся документ (с помощью xslt, 
                        например). Все остальное - извращение.</p></div>
                </div>

                <div class="b-comment">
                    <div class="post-number">#36601</div>
                    <p>ужастно, разбор HTML на таком уровне однозначно и просто решается с помощью XML парсеров и,
                     в дальнейшем, инструметов работы с XML.</p>
                </div>
            </div>

            <div class="b-post-actions clearfix">
                <button class="button-action button-reply">Добавить комментарий</button>
                <button class="button-action button-show-thread">Перейти в тред</button>
            </div>
        </div>

        <div class="b-thread">
            <div class="b-post first-post">            
                <div class="post-number">#36765</div>
                <h2 class="thread-topic">Не работает скрипт</h2>                

                <p>Добрый день!</p>

                <p>Никак не получается составить регулярное выражение.</p>

                <p>Есть html: &lt;img alt=&quot;&quot; src=&quot;images/ads_200x200.png&quot; style=&quot;width: 250px; height: 250px; float:left; border-width: 1px; border-style: solid&quot;&gt; <br />
                нужно найти все картинки с именем ads_200x200.png, удалить все атрибуты кроме src, и оставить float, если он указан в стилях. </p>

                <p>Т.е. если флоат не указан, то результат должен быть такой:<br />
                &lt;img src=&quot;images/ads_200x200.png&quot;&gt; </p>
                <div class="hide-text">
                <p>А если указан, то такой:<br />
                &lt;img src=&quot;images/ads_200x200.png&quot; style=&quot;float:left&quot;&gt; </p>

                <p>Пытаюсь разобраться, но ничего не выходит :( </p>

                <p>Спасибо!</p>
                </div>
            </div>

            <div class="b-post-info-line">
                Пропущено 13 комментариев
            </div>

            <div class="b-post-last-comments">
                <div class="b-comment">
                    <div class="post-number">#36871</div>
                    <p>XPath бы вам помог.</p>
                </div>

                <div class="b-comment">
                    <div class="post-number">#36598</div>
                    <p>если вы у вас есть проблема и вы пытаетесь решить ее с помощью регулярок - у вас две проблемы. 
                        Регулярки помогают при разборе html только в ограниченном количестве простых случаев - 
                        когда достаточно работать с разметкой только как с текстом… </p>
                        <div class="hide-text"><p> В вашем случае необходимо 
                        скормить код xml парсеру и преобразовывать уже получившийся документ (с помощью xslt, 
                        например). Все остальное - извращение.</p></div>
                </div>

                <div class="b-comment">
                    <div class="post-number">#36601</div>
                    <p>ужастно, разбор HTML на таком уровне однозначно и просто решается с помощью XML парсеров и,
                     в дальнейшем, инструметов работы с XML.</p>
                </div>
            </div>

            <div class="b-post-actions clearfix">
                <button class="button-action button-reply">Добавить комментарий</button>
                <button class="button-action button-show-thread">Перейти в тред</button>
            </div>
        </div>

        <div class="b-thread">
            <div class="b-post first-post">            
                <div class="post-number">#36765</div>
                <h2 class="thread-topic">Не работает скрипт</h2>                

                <p>Добрый день!</p>

                <p>Никак не получается составить регулярное выражение.</p>

                <p>Есть html: &lt;img alt=&quot;&quot; src=&quot;images/ads_200x200.png&quot; style=&quot;width: 250px; height: 250px; float:left; border-width: 1px; border-style: solid&quot;&gt; <br />
                нужно найти все картинки с именем ads_200x200.png, удалить все атрибуты кроме src, и оставить float, если он указан в стилях. </p>

                <p>Т.е. если флоат не указан, то результат должен быть такой:<br />
                &lt;img src=&quot;images/ads_200x200.png&quot;&gt; </p>
                <div class="hide-text">
                <p>А если указан, то такой:<br />
                &lt;img src=&quot;images/ads_200x200.png&quot; style=&quot;float:left&quot;&gt; </p>

                <p>Пытаюсь разобраться, но ничего не выходит :( </p>

                <p>Спасибо!</p>
                </div>
            </div>

            <div class="b-post-info-line">
                Пропущено 13 комментариев
            </div>

            <div class="b-post-last-comments">
                <div class="b-comment">
                    <div class="post-number">#36871</div>
                    <p>XPath бы вам помог.</p>
                </div>

                <div class="b-comment">
                    <div class="post-number">#36598</div>
                    <p>если вы у вас есть проблема и вы пытаетесь решить ее с помощью регулярок - у вас две проблемы. 
                        Регулярки помогают при разборе html только в ограниченном количестве простых случаев - 
                        когда достаточно работать с разметкой только как с текстом… </p>
                        <div class="hide-text"><p> В вашем случае необходимо 
                        скормить код xml парсеру и преобразовывать уже получившийся документ (с помощью xslt, 
                        например). Все остальное - извращение.</p></div>
                </div>

                <div class="b-comment">
                    <div class="post-number">#36601</div>
                    <p>ужастно, разбор HTML на таком уровне однозначно и просто решается с помощью XML парсеров и,
                     в дальнейшем, инструметов работы с XML.</p>
                </div>
            </div>

            <div class="b-post-actions clearfix">
                <button class="button-action button-reply">Добавить комментарий</button>
                <button class="button-action button-show-thread">Перейти в тред</button>
            </div>
        </div>
    </div>

    <div class="b-pager"> 
        <span class="label">Страницы:</span> <span class="current">1</span>
        <a href="">2</a>
        <a href="">3</a>
        <a href="">4</a>
        <a href="">5</a>
        <a href="">6</a>
        <a href="">7</a>
        <a href="">8</a>
        <a href="">9</a>
        <span class="hellip">…</span>
        <a href="">124</a>
    </div>

    <div class="b-footer"></div>
</div>    
</body>
</html>