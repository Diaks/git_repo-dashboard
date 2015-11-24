<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;
use Symfony\Component\ClassLoader\ApcUniversalClassLoader;

/**
 * @var ClassLoader $loader
 */

#require __DIR__.'/../vendor/symfony/src/Symfony/Component/ClassLoader/ApcUniversalClassLoader.php';

$loader = require __DIR__.'/../vendor/autoload.php';
#$loader = new ApcUniversalClassLoader('apc.loader');

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
