<?
define('LANG','ru'); // Язык страницы
define('TITLE','Название'); // Название, метатег title
define('DESCRIPTION','Описание'); // Название, метатег description
define('KEYWORDS','Ключевые слова'); // Название, метатег keywords
define('ROBOTS','all'); // Название, метатег robots

/* Метатег robots управляет индексированием страниц. 
Можно запретить роботам не только индексацию самого документа, 
но и прохождение по имеющимся в нем ссылкам. Возможные значения:

    index / noindex — индексировать / не индексировать эту страницу;
    follow / nofollow — идти / не идти по ссылкам с этой страницы;
    all = "index, follow"
    none = "noindex, nofollow" */

define('FAVICON_PATH','favicon'); // Путь для favicon
define('FAVICON','it.png'); // Файл PNG размером не менее 152x152 для создания favicon. 





define('DB_HOST', 'localhost'); 	// Адрес базы данных, может называться localhost
define('DB_NAME', 'drop'); 	// Название базы данных
define('DB_LOGIN', 'drop'); 	// Логин базы данных
define('DB_PASS', 'drop'); 	// Пароль базы данных
?>