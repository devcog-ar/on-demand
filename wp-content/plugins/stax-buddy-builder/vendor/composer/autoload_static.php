<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd97c5e02153389a9585d0bf8b88a5d58
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd97c5e02153389a9585d0bf8b88a5d58::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd97c5e02153389a9585d0bf8b88a5d58::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
