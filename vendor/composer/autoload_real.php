<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita220a8ba15a799676e75cb18d4fd5660
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

        spl_autoload_register(array('ComposerAutoloaderInita220a8ba15a799676e75cb18d4fd5660', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita220a8ba15a799676e75cb18d4fd5660', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita220a8ba15a799676e75cb18d4fd5660::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
