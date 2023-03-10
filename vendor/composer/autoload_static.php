<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f688aae755f26b66b9843303279f5bb
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f688aae755f26b66b9843303279f5bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f688aae755f26b66b9843303279f5bb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6f688aae755f26b66b9843303279f5bb::$classMap;

        }, null, ClassLoader::class);
    }
}
