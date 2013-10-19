            <div class="b-post first-post">            
                <div class="post-number">#36541</div>
                
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
                 <code>.htaccess</code> прописывал…</p>

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

            <div class="b-post">            
                <div class="post-number">#36545</div>
                
                <p>Иди мануал почитай что ли</p>        
            </div>

            <div class="b-post">            
                <div class="post-number">#36545</div>
                
                <p>Держи кота. Удачи тебе.</p>        
            </div>

            <div class="b-post">            
                <div class="post-number">#36545</div>
                
                <p>PHP не нужен.</p>        
            </div>

            <div class="b-post">            
                <div class="post-number">#36545</div>
                
                <p>Код надо писать не как попало, а аккуратно и красиво. Почему? Потому, что на неакуратно написанный код не хочется даже смотреть.</p>

                <p>Если тебе лень выравнивать код руками, закачай его на http://beta.phpformatter.com/ 
                и нажми «format». Робот исправит выравнивание и отступы в мгновение ока. <p>

                <p>Самый распространенный стандарт оформления — это Zend Coding Guides 
                (http://framework.zend.com/manual/1.12/en/coding-standard.html — на англ. яз.), 
                вот их суть:</p>

                <ul><li> переменные и функции пишутся с маленькой буквы, _ не используется, используется camelCase, пример: $x, $numberOfPeople, printResults()
                <li>Название функции начинается с глагола, в стиле «сделайЧтоТо»
                <li>не знаешь английский? Не беда, в 21 веке есть решение этой проблемы. Не пиши транслитом, открой лучше Гугл Транслейт или slovari.yandex.ru и найди название для переменной там
                <li>в именах классов используется CamelCase, первая буква большая, «_» может
                 использоваться
- мы предпочитаем подстановку переменных вместо конкатенации строк:
 "I am $age years old" — хорошо, 'I am ' . $age . ' years old' — плохо       
                </ul>
            </div>

            <div class="b-post">            
                <div class="post-number">#36545</div>
                
                 <p>Код надо писать не как попало, а аккуратно и красиво. Почему? Потому, что на неакуратно написанный код не хочется даже смотреть.</p>

                <p>Если тебе лень выравнивать код руками, закачай его на http://beta.phpformatter.com/ 
                и нажми «format». Робот исправит выравнивание и отступы в мгновение ока. <p>    
            </div>

            <div class="b-post">            
                <div class="post-number">#36545</div>
                
                <p>Иди мануал почитай что ли</p>        
            </div>

            <div class="b-post">            
                <div class="post-number">#36545</div>
                
                <p>Держи кота. Удачи тебе.</p>        
            </div>

            <div class="b-post">            
                <div class="post-number">#36545</div>
                
                <p>Умри в муках. Удачи тебе.</p>        
            </div>

            <div class="b-post">            
                <div class="post-number">#36545</div>
                
                <p>Код сам себя не напишет нужно написать код.</p>        
            </div>

            <div class="b-post">            
                <div class="post-number">#36545</div>
                
                <p>Умри в муках, неудачник</p>        
            </div>

            <div class="b-post last-post">            
                <div class="post-number">#36545</div>
                
                <p>Я ненавижу весь мир и тебя лично</p>        
            </div>
            