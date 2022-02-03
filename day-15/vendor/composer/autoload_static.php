<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit63d203270ebb69d043e82114448722fd
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit63d203270ebb69d043e82114448722fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit63d203270ebb69d043e82114448722fd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit63d203270ebb69d043e82114448722fd::$classMap;

        }, null, ClassLoader::class);
    }
}
