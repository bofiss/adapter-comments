<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.Liip\FunctionalTestBundle\Command\RunParatestCommand' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\liip\\functional-test-bundle\\src\\Command\\RunParatestCommand.php';

return $this->services['console.command.public_alias.Liip\\FunctionalTestBundle\\Command\\RunParatestCommand'] = new \Liip\FunctionalTestBundle\Command\RunParatestCommand();
