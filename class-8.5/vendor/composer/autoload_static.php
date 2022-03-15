<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit18570fed665e15a8798ef903a2e5eb4f
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit18570fed665e15a8798ef903a2e5eb4f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit18570fed665e15a8798ef903a2e5eb4f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit18570fed665e15a8798ef903a2e5eb4f::$classMap;

        }, null, ClassLoader::class);
    }
}
