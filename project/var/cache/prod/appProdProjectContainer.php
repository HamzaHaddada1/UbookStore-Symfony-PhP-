<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPsnz4l9\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPsnz4l9/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerPsnz4l9.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerPsnz4l9\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerPsnz4l9\appProdProjectContainer(array(
    'container.build_hash' => 'Psnz4l9',
    'container.build_id' => 'd8fcfbe0',
    'container.build_time' => 1541934868,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerPsnz4l9');