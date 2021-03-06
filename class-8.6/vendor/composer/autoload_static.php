<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitffa8b0f026eaa36fb7f31f1de79f4949
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitffa8b0f026eaa36fb7f31f1de79f4949::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitffa8b0f026eaa36fb7f31f1de79f4949::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitffa8b0f026eaa36fb7f31f1de79f4949::$classMap;

        }, null, ClassLoader::class);
    }
}
