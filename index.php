<?php
require __DIR__ . '/autoload.php';

use App\Exceptions\Db\DbException;
use App\Exceptions\Http\{
	HttpCode,
	Http403Exception
};

$urlParts = explode('/', $_SERVER['REQUEST_URI']);
$ctrl = !empty($urlParts[1]) ? ucfirst($urlParts[1]) . 'Controller' :
	'ArticleController';
$action = !empty($urlParts[2]) ? $urlParts[2] : 'index';

try {
	$class = '\\App\\Controllers\\' . $ctrl;
	$controller = new $class;
	$controller->action($action);
} catch (DbException $e) {
	$controller->action('ErrorDb');
} catch (Http403Exception $e) {
	http_response_code($e->getCode());
	echo $e->getMessage();
	exit;
} catch (HttpCode $e) {
	http_response_code($e->getCode());
	echo $e->getMessage();
} catch (Throwable $e) {
	echo $e->getMessage();
}
