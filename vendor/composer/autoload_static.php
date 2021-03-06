<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc1a1c8f194d3a9449760551dec325705
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hrisha\\AlpineNginxPhp8\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hrisha\\AlpineNginxPhp8\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc1a1c8f194d3a9449760551dec325705::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc1a1c8f194d3a9449760551dec325705::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc1a1c8f194d3a9449760551dec325705::$classMap;

        }, null, ClassLoader::class);
    }
}
