<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfbeac1db03ff5b3a0b4e8aaf9bd15313
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitfbeac1db03ff5b3a0b4e8aaf9bd15313', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfbeac1db03ff5b3a0b4e8aaf9bd15313', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfbeac1db03ff5b3a0b4e8aaf9bd15313::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
