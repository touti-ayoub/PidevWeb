<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXMxbybC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXMxbybC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXMxbybC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXMxbybC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXMxbybC\App_KernelDevDebugContainer([
    'container.build_hash' => 'XMxbybC',
    'container.build_id' => '09441077',
    'container.build_time' => 1712116497,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXMxbybC');
