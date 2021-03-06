<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite605aae401803ee618760459dd447b27
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abraham\\TwitterOAuth\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abraham\\TwitterOAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/abraham/twitteroauth/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite605aae401803ee618760459dd447b27::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite605aae401803ee618760459dd447b27::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
