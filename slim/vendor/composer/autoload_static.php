<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef83a0571c4398f11b512533bb9ec2b6
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wingu\\OctopusCore\\Reflection\\' => 29,
        ),
        'S' => 
        array (
            'Slim\\Views\\' => 11,
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'PHP2WSDL\\' => 9,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wingu\\OctopusCore\\Reflection\\' => 
        array (
            0 => __DIR__ . '/..' . '/wingu/reflection/src',
        ),
        'Slim\\Views\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/php-view/src',
            1 => __DIR__ . '/..' . '/slim/twig-view/src',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'PHP2WSDL\\' => 
        array (
            0 => __DIR__ . '/..' . '/php2wsdl/php2wsdl/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef83a0571c4398f11b512533bb9ec2b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef83a0571c4398f11b512533bb9ec2b6::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitef83a0571c4398f11b512533bb9ec2b6::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
