<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit823e92ae3d3deceb390860de731975bf
{
    public static $files = array (
        '4cdafd4a5191caf078235e7dd119fdaf' => __DIR__ . '/..' . '/flightphp/core/flight/autoload.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit823e92ae3d3deceb390860de731975bf::$classMap;

        }, null, ClassLoader::class);
    }
}
