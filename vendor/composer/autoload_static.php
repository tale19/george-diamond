<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1b2c19d9171953188d9cc458ad6435e
{
    public static $classMap = array (
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'ErrorHandler' => __DIR__ . '/../..' . '/composer-setup.php',
        'HttpClient' => __DIR__ . '/../..' . '/composer-setup.php',
        'Installer' => __DIR__ . '/../..' . '/composer-setup.php',
        'News' => __DIR__ . '/../..' . '/models/News.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite1b2c19d9171953188d9cc458ad6435e::$classMap;

        }, null, ClassLoader::class);
    }
}
