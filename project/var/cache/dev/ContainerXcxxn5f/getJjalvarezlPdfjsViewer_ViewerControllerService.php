<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jjalvarezl_pdfjs_viewer.viewer_controller' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\DependencyInjection\\ContainerAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller.php';
include_once $this->targetDirs[3].'\\vendor\\jjalvarezl\\pdfjs-viewer-bundle\\jjalvarezl\\PDFjsViewerBundle\\Controller\\ViewerController.php';

$this->services['jjalvarezl_pdfjs_viewer.viewer_controller'] = $instance = new \jjalvarezl\PDFjsViewerBundle\Controller\ViewerController();

$instance->setContainer($this);

return $instance;