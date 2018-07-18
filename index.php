<?php
$pkgName = 'apps.phar';
Phar::mapPhar($pkgName);
define('__ROOT__', 'phar://' . $pkgName);
require 'phar://' . $pkgName . '/vendor/autoload.php';
__HALT_COMPILER();
