<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3bb7d79ed8d590b2b47c652c1ecb54e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita3bb7d79ed8d590b2b47c652c1ecb54e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3bb7d79ed8d590b2b47c652c1ecb54e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita3bb7d79ed8d590b2b47c652c1ecb54e::$classMap;

        }, null, ClassLoader::class);
    }
}
