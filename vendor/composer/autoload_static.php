<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit608874c99663f26e51d23d3868d1d099
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Phue' => 
            array (
                0 => __DIR__ . '/..' . '/sqmk/phue/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit608874c99663f26e51d23d3868d1d099::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit608874c99663f26e51d23d3868d1d099::$classMap;

        }, null, ClassLoader::class);
    }
}
