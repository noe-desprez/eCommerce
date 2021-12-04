<?php
class Conf {
  static private $debug = True;
  static private $databases = array(
    // Le nom d'hote est webinfo a l'IUT
    // ou localhost sur votre machine
    'hostname' => 'webinfo.iutmontp.univ-montp2.fr',
    // A l'IUT, vous avez une BDD nommee comme votre login
    // Sur votre machine, vous devrez creer une BDD
    'database' => 'desprezn',
    // A l'IUT, c'est votre login
    // Sur votre machine, vous avez surement un compte 'root'
    'login' => 'desprezn',
    // A l'IUT, c'est votre mdp (INE par defaut)
    // Sur votre machine personelle, vous avez creez ce mdp a l'installation
    'password' => 'pouletkfc'
  );
   
  static public function getLogin() {
    //en PHP l'indice d'un tableau n'est pas forcement un chiffre.
    return self::$databases['login'];
  }
  static public function getDatabase(){
    return self::$databases['database'];
  }
  static public function getHostname(){
    return self::$databases['hostname'];
  }
  static public function getPassword(){
    return self::$databases['password'];
  }
  static public function getDebug(){
    return self::$debug;
  }
   
}
?>