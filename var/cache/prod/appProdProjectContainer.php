<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOzltrsy\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOzltrsy/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerOzltrsy.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerOzltrsy\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerOzltrsy\appProdProjectContainer([
    'container.build_hash' => 'Ozltrsy',
    'container.build_id' => '03ff9453',
    'container.build_time' => 1691634857,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOzltrsy');