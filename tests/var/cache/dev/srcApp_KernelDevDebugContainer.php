<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSI0Rlq4\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSI0Rlq4/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSI0Rlq4.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSI0Rlq4\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerSI0Rlq4\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'SI0Rlq4',
    'container.build_id' => 'c5664b97',
    'container.build_time' => 1565943815,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSI0Rlq4');