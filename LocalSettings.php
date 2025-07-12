<?php
# Защита от попытки захода во время неустановленной MediaWiki
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}
# $wgDisableOutputCompression = true; комрпессия вызодных файлов, лучше оставить закоменченным

$wgSitename = "PM_IP-1_WIKI";
$wgScriptPath = "";

## Имя сервера и протокол
$wgServer = "http://158.255.1.180:8080";

##URL ссылка к статичным ресурсам (картинки скрипты и тд)
$wgResourceBasePath = $wgScriptPath;

$wgLogos = [
	'1x' => "$wgResourceBasePath/images/logo.png",
	'icon' => "$wgResourceBasePath/images/logo.png",
];
$wgFavicon = "$wgResourceBasePath/images/favicon.png";
## UPO означает что было выбрано пользователем

$wgEnableEmail = false;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "";
$wgPasswordSender = "";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## настройки БД
$wgDBtype = "mysql";
$wgDBserver = "mariadb";
$wgDBname = "mediawiki";
$wgDBuser = "mediawiki_rw";
$wgDBpassword = "rbEd7aYCPTet";

# Спецфичные настройки БД
$wgDBprefix = "";
$wgDBssl = false;

# отвечает за префикс таблицы
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";


$wgSharedTables[] = "actor";


$wgMainCacheType = CACHE_ACCEL;
$wgMemCachedServers = [];

## Отвечает за загрузку файлов на вики
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# Позволяет вики использовать картинки из ВикиБазы
$wgUseInstantCommons = false;


$wgPingback = false;

# Язык Вики
$wgLanguageCode = "ru";

# Временная зона
$wgLocaltimezone = "UTC";

$wgSecretKey = "cfbd26e97e7fd3ac2da973b1c701621924e3a0418270284fc1d3d702279950fb";

$wgAuthenticationTokenVersion = "1"; #возможность разлогинить всех пользователей


$wgUpgradeKey = "a9f838f36ffcf4d2";

#настройки упоминайний лицензий
$wgRightsPage = "";
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

$wgDiff3 = "/usr/bin/diff3";

# Разрешения для пользовавателей без аккаунта
$wgGroupPermissions["*"]["createaccount"] = false;
$wgGroupPermissions["*"]["edit"] = false;
$wgGroupPermissions["*"]["read"] = false;

#дефолтный скин вики при заходе
$wgDefaultSkin = "vector";

#включенныне скины
wfLoadSkin( 'MinervaNeue' );
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Timeless' );
wfLoadSkin( 'Vector' );


#Включенные расширения
wfLoadExtension( 'AbuseFilter' );
wfLoadExtension( 'CategoryTree' ); #делает красивые древа категорий
wfLoadExtension( 'CheckUser' ); # позволяет админам подтверждать регистрацию пользователя
wfLoadExtension( 'Cite' ); # красивое цитирование
wfLoadExtension( 'CiteThisPage' ); # красивое цитирование страниц
wfLoadExtension( 'CodeEditor' ); # позволяет редактировать страницы вики прямо в самой вики
wfLoadExtension( 'ConfirmEdit' ); # подтверждение изменений - полезно в модерации
wfLoadExtension( 'DiscussionTools' ); # создает страницы обсуждения, по типу коментов под постом
wfLoadExtension( 'Echo' ); # позваляет уведомлять пользователя о разном
wfLoadExtension( 'ImageMap' );
wfLoadExtension( 'InputBox' ); #поисковая строка
wfLoadExtension( 'Interwiki' ); #парсит меж-виковые ссылки
wfLoadExtension( 'Linter' );
wfLoadExtension( 'LoginNotify' ); # позволяет уведомлять когда кто-то хаходил в аккаунт
wfLoadExtension( 'Math' ); # парсер математических формул
wfLoadExtension( 'MultimediaViewer' ); # позволяет пользователям просматривать раздичные картинки
wfLoadExtension( 'Nuke' ); #позволяет уничтажать огромное кол-во страниц разом
wfLoadExtension( 'OATHAuth' );# позволяет пользователям настроить двухфакторную аутентифифкацию
wfLoadExtension( 'ParserFunctions' ); #функции для различных парсеров
wfLoadExtension( 'PdfHandler' ); # позволяет обрабатывать пдф файлы прям в вики
wfLoadExtension( 'Poem' ); # позволяет красиво вставлять текста
wfLoadExtension( 'ReplaceText' ); # позволяет поменять кажлое вхождение какого либо текста во всей вики на другое
wfLoadExtension( 'Scribunto' );
wfLoadExtension( 'SpamBlacklist' ); #закидывает автоматически пользователя в черный список за подозрение на спам
wfLoadExtension( 'SyntaxHighlight_GeSHi' ); #подсвечивает синтакис в редакторе кода для вики
wfLoadExtension( 'TemplateData' ); #дата для шаблонов
wfLoadExtension( 'TemplateStyles' ); #стили для шаблонов
wfLoadExtension( 'TitleBlacklist' ); #позваоляет запрещать некоторые названия страниц
wfLoadExtension( 'VisualEditor' ); # включает визуальное редактирование страниц
wfLoadExtension( 'WikiEditor' ); #включает редактирование страниц на языке вики

