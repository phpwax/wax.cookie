<?
class Cookie{

  public static function get($name){
    return $_COOKIE[$name];
  }
  //1728000 = 60*60*24*40 - 20 days
  public static function set($name, $value, $expires=1728000){
    return setcookie($name, $value, time()+$expires, "/");
  }
  public static function unset_var($name){
    return setcookie($name, "", time()-60, "/");
  }
}
?>