<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita5517bdfca7144469255510b404b528f
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wiaamtaleb\\LaravelDbEncryption\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wiaamtaleb\\LaravelDbEncryption\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita5517bdfca7144469255510b404b528f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita5517bdfca7144469255510b404b528f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita5517bdfca7144469255510b404b528f::$classMap;

        }, null, ClassLoader::class);
    }
}
