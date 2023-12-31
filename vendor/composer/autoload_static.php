<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3d348a0661c3591f64a4d5b909fc24b
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nishadil\\Placeholderimg\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nishadil\\Placeholderimg\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd3d348a0661c3591f64a4d5b909fc24b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd3d348a0661c3591f64a4d5b909fc24b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd3d348a0661c3591f64a4d5b909fc24b::$classMap;

        }, null, ClassLoader::class);
    }
}
