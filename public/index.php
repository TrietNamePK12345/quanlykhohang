<?php
use App\Core\Application as App;


/*
| Register The Auto Loader
|--------------------------------------------------------------------------
*/

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/web_root.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$app = new App(dirname(__DIR__));


/*
| Register the Address Page
|--------------------------------------------------------------------------
*/

require_once __DIR__ . '/../routes/web.php';




/*
| Run The Application
|--------------------------------------------------------------------------
*/

$app::run();

