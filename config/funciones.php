<?php

function debuguear($variable) : string {
   echo '<pre>';
   var_dump($variable);
   echo '</pre>';
   exit;
}

function stringHTML($html): string {
   $sanitizado = htmlspecialchars($html);
   return $sanitizado;
}

function paguinaActual($path) : bool {
   return str_contains($_SERVER['PATH_INFO'] ?? '/', $path) ? true : false;
}

function isLogin() : bool {
   if(!isset($_SESSION)) {
      session_start();
   }
   return isset($_SESSION['nombre']) && !empty($_SESSION);
}

function isAdmin() : bool {
   if(!isset($_SESSION)) {
      session_start();
   }
   return isset($_SESSION['admin']) && !empty($_SESSION['admin']);
}