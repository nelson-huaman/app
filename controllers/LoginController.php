<?php

namespace Controllers;

use MVC\Router;

class LoginController {

   public static function login(Router $router) {

      $router->renderizar('login/login', [
         'titulo' => 'Iniciar Sesión'
      ]);

   }

}