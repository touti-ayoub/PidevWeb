<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHDUwtUx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHDUwtUx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHDUwtUx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHDUwtUx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHDUwtUx\App_KernelDevDebugContainer([
    'container.build_hash' => 'HDUwtUx',
    'container.build_id' => '7bd7fee1',
    'container.build_time' => 1711892214,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHDUwtUx');
