<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOBFlBbT\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOBFlBbT/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerOBFlBbT.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerOBFlBbT\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerOBFlBbT\appAppKernelProdContainer([
    'container.build_hash' => 'OBFlBbT',
    'container.build_id' => '58dd2fe2',
    'container.build_time' => 1707683218,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOBFlBbT');