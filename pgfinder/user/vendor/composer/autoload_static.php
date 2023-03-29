<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit454c3576904fa12c1b8b606f4554f605
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit454c3576904fa12c1b8b606f4554f605::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit454c3576904fa12c1b8b606f4554f605::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit454c3576904fa12c1b8b606f4554f605::$classMap;

        }, null, ClassLoader::class);
    }
}
