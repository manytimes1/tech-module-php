<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.a3kzq15' shared service.

return $this->services['service_locator.a3kzq15'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['books' => function () {
    $f = function (\AppBundle\Repository\BookRepository $v = null) { return $v; }; return $f(${($_ = isset($this->services['AppBundle\Repository\BookRepository']) ? $this->services['AppBundle\Repository\BookRepository'] : $this->load('getBookRepositoryService.php')) && false ?: '_'});
}]);