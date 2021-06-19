<?php
/**
*Session Class
**/
class Session{

  // Khởi tạo session
 public static function init(){
  if (version_compare(phpversion(), '5.4.0', '<')) {
        if (session_id() == '') {
            session_start();
        }
    } else {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
 }
 // Gán giá trị cho các đối tượng trong biến Session
 // Ví dụ tạo username là admin thì biến username trong SESSION dược gán bằng admin
 public static function set($key, $val){
    $_SESSION[$key] = $val;
 }
 // Lấy 1 đối tương chứa trong SESSION
 public static function get($key){
    if (isset($_SESSION[$key])) {
     return $_SESSION[$key];
    } else {
     return false;
    }
 }
// Nếu SESSION chưa tồn tại thì quay về trag login
 public static function checkSession(){
    self::init();
    if (self::get("adminlogin")== false) {
     self::destroy();
     header("Location:login.php");
    }
 }
// Nếu tồn tại thì đến trang chủ
 public static function checkLogin(){
    self::init();
    if (self::get("adminlogin")== true) {
     header("Location:index.php");
    }
 }

 public static function destroy(){
  session_destroy();
  header("Location:login.php");
 }
}

?>

