<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGMOp1Iq\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGMOp1Iq/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerGMOp1Iq.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerGMOp1Iq\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerGMOp1Iq\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'GMOp1Iq',
    'container.build_id' => '420a0678',
    'container.build_time' => 1536086407,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerGMOp1Iq');
