<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1dc4941238a60e3c6b99c00663c815ec
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1dc4941238a60e3c6b99c00663c815ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1dc4941238a60e3c6b99c00663c815ec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1dc4941238a60e3c6b99c00663c815ec::$classMap;

        }, null, ClassLoader::class);
    }
}
