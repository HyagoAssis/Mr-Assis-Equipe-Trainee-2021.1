<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInite9642032c4858df052ef47d6a0e3c9dc
=======
class ComposerAutoloaderInit8c9bc3b2d6daf2ac3ae67e2a139ddbf0
>>>>>>> main
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

<<<<<<< HEAD
        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInite9642032c4858df052ef47d6a0e3c9dc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(\dirname(__FILE__)));
        spl_autoload_unregister(array('ComposerAutoloaderInite9642032c4858df052ef47d6a0e3c9dc', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInit8c9bc3b2d6daf2ac3ae67e2a139ddbf0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(\dirname(__FILE__)));
        spl_autoload_unregister(array('ComposerAutoloaderInit8c9bc3b2d6daf2ac3ae67e2a139ddbf0', 'loadClassLoader'));
>>>>>>> main

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require __DIR__ . '/autoload_static.php';

<<<<<<< HEAD
            call_user_func(\Composer\Autoload\ComposerStaticInite9642032c4858df052ef47d6a0e3c9dc::getInitializer($loader));
=======
            call_user_func(\Composer\Autoload\ComposerStaticInit8c9bc3b2d6daf2ac3ae67e2a139ddbf0::getInitializer($loader));
>>>>>>> main
        } else {
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
        }

        $loader->register(true);

        if ($useStaticLoader) {
<<<<<<< HEAD
            $includeFiles = Composer\Autoload\ComposerStaticInite9642032c4858df052ef47d6a0e3c9dc::$files;
=======
            $includeFiles = Composer\Autoload\ComposerStaticInit8c9bc3b2d6daf2ac3ae67e2a139ddbf0::$files;
>>>>>>> main
        } else {
            $includeFiles = require __DIR__ . '/autoload_files.php';
        }
        foreach ($includeFiles as $fileIdentifier => $file) {
<<<<<<< HEAD
            composerRequiree9642032c4858df052ef47d6a0e3c9dc($fileIdentifier, $file);
=======
            composerRequire8c9bc3b2d6daf2ac3ae67e2a139ddbf0($fileIdentifier, $file);
>>>>>>> main
        }

        return $loader;
    }
}

<<<<<<< HEAD
function composerRequiree9642032c4858df052ef47d6a0e3c9dc($fileIdentifier, $file)
=======
function composerRequire8c9bc3b2d6daf2ac3ae67e2a139ddbf0($fileIdentifier, $file)
>>>>>>> main
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        require $file;

        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
    }
}
