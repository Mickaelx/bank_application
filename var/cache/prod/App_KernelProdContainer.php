<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQnvjdwa\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQnvjdwa/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerQnvjdwa.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerQnvjdwa\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerQnvjdwa\App_KernelProdContainer([
    'container.build_hash' => 'Qnvjdwa',
    'container.build_id' => 'f26008dc',
    'container.build_time' => 1593080903,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQnvjdwa');
