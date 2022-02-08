<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31c66fd3459a2c967d8b878b5d3b1c3d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit31c66fd3459a2c967d8b878b5d3b1c3d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31c66fd3459a2c967d8b878b5d3b1c3d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit31c66fd3459a2c967d8b878b5d3b1c3d::$classMap;

        }, null, ClassLoader::class);
    }
}
