<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3d7cdd9555a5c57f4502a64134d9cc27
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3d7cdd9555a5c57f4502a64134d9cc27::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3d7cdd9555a5c57f4502a64134d9cc27::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}