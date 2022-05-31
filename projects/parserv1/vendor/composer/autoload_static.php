<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf0142214f98e2492c8a0fdeab0deddfe
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Parser\\Siteparser\\' => 18,
        ),
        'K' => 
        array (
            'Krugozor\\Database\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Parser\\Siteparser\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Krugozor\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/krugozor/database/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf0142214f98e2492c8a0fdeab0deddfe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf0142214f98e2492c8a0fdeab0deddfe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf0142214f98e2492c8a0fdeab0deddfe::$classMap;

        }, null, ClassLoader::class);
    }
}