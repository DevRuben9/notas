<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit68a97eb6371e6900d353927c5f40c9ed
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Ruben\\Notas\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ruben\\Notas\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit68a97eb6371e6900d353927c5f40c9ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit68a97eb6371e6900d353927c5f40c9ed::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit68a97eb6371e6900d353927c5f40c9ed::$classMap;

        }, null, ClassLoader::class);
    }
}