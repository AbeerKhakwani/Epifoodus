<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInit871ac5390b9a485b5bc8f0928a305fdf
=======
class ComposerAutoloaderInit204a45276a1656ef6d2ab0831ca0bbdf
>>>>>>> 42038e9fc703489cc70da7e453e11853ee94d197
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit871ac5390b9a485b5bc8f0928a305fdf', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
<<<<<<< HEAD
        spl_autoload_unregister(array('ComposerAutoloaderInit871ac5390b9a485b5bc8f0928a305fdf', 'loadClassLoader'));
=======
        spl_autoload_unregister(array('ComposerAutoloaderInit204a45276a1656ef6d2ab0831ca0bbdf', 'loadClassLoader'));
>>>>>>> 42038e9fc703489cc70da7e453e11853ee94d197

        $includePaths = require __DIR__ . '/include_paths.php';
        array_push($includePaths, get_include_path());
        set_include_path(join(PATH_SEPARATOR, $includePaths));

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->set($namespace, $path);
        }

        $map = require __DIR__ . '/autoload_psr4.php';
        foreach ($map as $namespace => $path) {
            $loader->setPsr4($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register(true);

        return $loader;
    }
}

<<<<<<< HEAD
function composerRequire871ac5390b9a485b5bc8f0928a305fdf($file)
=======
function composerRequire204a45276a1656ef6d2ab0831ca0bbdf($file)
>>>>>>> 42038e9fc703489cc70da7e453e11853ee94d197
{
    require $file;
}
