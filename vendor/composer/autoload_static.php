<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a5f42685d3d2ca05fd14dc548f3722a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0a5f42685d3d2ca05fd14dc548f3722a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0a5f42685d3d2ca05fd14dc548f3722a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0a5f42685d3d2ca05fd14dc548f3722a::$classMap;

        }, null, ClassLoader::class);
    }
}
