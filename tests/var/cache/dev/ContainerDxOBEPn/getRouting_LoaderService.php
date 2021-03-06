<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'routing.loader' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\Loader\\Loader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\Loader\\DelegatingLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Routing\\DelegatingLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\Loader\\LoaderResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\Loader\\LoaderResolver.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Loader\\XmlFileLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\FileLocatorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\FileLocator.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Config\\FileLocator.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Loader\\YamlFileLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Loader\\PhpFileLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Loader\\GlobFileLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Loader\\DirectoryLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Loader\\ObjectRouteLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Loader\\DependencyInjection\\ServiceRouterLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Loader\\AnnotationClassLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Routing\\AnnotatedRouteControllerLoader.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\Reader.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\CachedReader.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\Cache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\FlushableCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\ClearableCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiGetCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiDeleteCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiPutCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiOperationCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\CacheProvider.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\ArrayCache.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Loader\\AnnotationFileLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Loader\\AnnotationDirectoryLoader.php';

$a = new \Symfony\Component\Config\Loader\LoaderResolver();

$b = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->targetDirs[3].'\\src/Resources'), [0 => ($this->targetDirs[3].'\\src')]);
$c = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->load('getAnnotations_ReaderService.php')), new \Doctrine\Common\Cache\ArrayCache(), true);
$c->cacheProviderBackup = function () {
    return ($this->privates['annotations.cache'] ?? $this->load('getAnnotations_CacheService.php'));
};

$d = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader($c);

$a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
$a->addLoader($d);
$a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $d));
$a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $d));

return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(($this->privates['controller_name_converter'] ?? ($this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))), $a, ['utf8' => true]);
