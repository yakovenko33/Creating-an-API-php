<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit98b15f2cd62a1b96cdce2e8a26f3de62
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit98b15f2cd62a1b96cdce2e8a26f3de62::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit98b15f2cd62a1b96cdce2e8a26f3de62::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}