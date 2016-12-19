<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit71dcfd2cc8f12f73e209fefe67189a83
{
    public static $files = array (
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '69ad9ca0e3474f038920e2cc58adf11c' => __DIR__ . '/../..' . '/config/constants.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'C' => 
        array (
            'Coinbase\\Wallet\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Coinbase\\Wallet\\' => 
        array (
            0 => __DIR__ . '/..' . '/coinbase/coinbase/src',
        ),
    );

    public static $classMap = array (
        'AdminAdsController' => __DIR__ . '/../..' . '/controllers/admin/AdminAdsController.php',
        'AdminBase' => __DIR__ . '/../..' . '/components/AdminBase.php',
        'AdminController' => __DIR__ . '/../..' . '/controllers/admin/AdminController.php',
        'AdminMessagesController' => __DIR__ . '/../..' . '/controllers/admin/AdminMessagesController.php',
        'AdminTicketsController' => __DIR__ . '/../..' . '/controllers/admin/AdminTicketsController.php',
        'AdminUserController' => __DIR__ . '/../..' . '/controllers/admin/AdminUserController.php',
        'AdminWalletsController' => __DIR__ . '/../..' . '/controllers/admin/AdminWalletsController.php',
        'Advertisement' => __DIR__ . '/../..' . '/models/Advertisement.php',
        'Agreement' => __DIR__ . '/../..' . '/models/Agreement.php',
        'CabinetController' => __DIR__ . '/../..' . '/controllers/CabinetController.php',
        'Capture' => __DIR__ . '/../..' . '/components/Capture.php',
        'Category' => __DIR__ . '/../..' . '/models/Test1.php',
        'Coinbase' => __DIR__ . '/../..' . '/components/Coinbase.php',
        'Currency' => __DIR__ . '/../..' . '/models/Currency.php',
        'Db' => __DIR__ . '/../..' . '/components/Db.php',
        'Deposit' => __DIR__ . '/../..' . '/models/Deposit.php',
        'EmailActivation' => __DIR__ . '/../..' . '/models/EmailActivation.php',
        'ErrorController' => __DIR__ . '/../..' . '/controllers/ErrorController.php',
        'Messages' => __DIR__ . '/../..' . '/models/Messages.php',
        'News' => __DIR__ . '/../..' . '/models/News.php',
        'Order' => __DIR__ . '/../..' . '/models/Test3.php',
        'Pagination' => __DIR__ . '/../..' . '/components/Pagination.php',
        'PlaceBillForm' => __DIR__ . '/../..' . '/models/PlaceBillForm.php',
        'Product' => __DIR__ . '/../..' . '/models/Test2.php',
        'Reserve' => __DIR__ . '/../..' . '/models/Reserve.php',
        'Router' => __DIR__ . '/../..' . '/components/Router.php',
        'Security' => __DIR__ . '/../..' . '/components/Security.php',
        'Service' => __DIR__ . '/../..' . '/models/Service.php',
        'ServiceController' => __DIR__ . '/../..' . '/controllers/ServiceController.php',
        'SigninForm' => __DIR__ . '/../..' . '/models/SigninForm.php',
        'SignupForm' => __DIR__ . '/../..' . '/models/SignupForm.php',
        'SiteController' => __DIR__ . '/../..' . '/controllers/SiteController.php',
        'Ticket' => __DIR__ . '/../..' . '/models/Ticket.php',
        'User' => __DIR__ . '/../..' . '/models/User.php',
        'UserController' => __DIR__ . '/../..' . '/controllers/UserController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit71dcfd2cc8f12f73e209fefe67189a83::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit71dcfd2cc8f12f73e209fefe67189a83::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit71dcfd2cc8f12f73e209fefe67189a83::$classMap;

        }, null, ClassLoader::class);
    }
}
