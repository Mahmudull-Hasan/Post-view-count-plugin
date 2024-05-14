<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit238666d86b14aae6d5a7025b7e92405f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit238666d86b14aae6d5a7025b7e92405f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit238666d86b14aae6d5a7025b7e92405f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit238666d86b14aae6d5a7025b7e92405f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
