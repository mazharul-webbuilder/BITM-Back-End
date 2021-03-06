<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c042f4d43e4a9c270cea60a0f75e68b
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c042f4d43e4a9c270cea60a0f75e68b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c042f4d43e4a9c270cea60a0f75e68b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2c042f4d43e4a9c270cea60a0f75e68b::$classMap;

        }, null, ClassLoader::class);
    }
}
