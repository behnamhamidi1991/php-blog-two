<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita198cac0fc4e1b6bac95145df3603fcf
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

        spl_autoload_register(array('ComposerAutoloaderInita198cac0fc4e1b6bac95145df3603fcf', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita198cac0fc4e1b6bac95145df3603fcf', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita198cac0fc4e1b6bac95145df3603fcf::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
