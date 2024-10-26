<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited7da5671e6f589ed9a979490687d475
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Badtito\\Ipt10Lab11Main\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Badtito\\Ipt10Lab11Main\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInited7da5671e6f589ed9a979490687d475::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited7da5671e6f589ed9a979490687d475::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInited7da5671e6f589ed9a979490687d475::$classMap;

        }, null, ClassLoader::class);
    }
}
