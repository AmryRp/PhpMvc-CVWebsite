<?php
session_start();
 if(isset($_SESSION['user']) && $_SESSION['user'] != "")
 {
header("location: https://arp-cv.website/admin/");
}
require($_SERVER['DOCUMENT_ROOT'] . "/cv/templates/config/databaseconnect.php");

$username = $_POST['username'];
$password = $_POST['password'];
$messeg = "";
 $sqls = "SELECT password FROM admin WHERE username=:username";
        $query =  Database::getBdd()->prepare($sqls);
        $query->bindValue(':username', $username);
        $query->execute();
        $result = $query->fetch();
        
if(empty($username) || empty($password)) {
    $messeg = "Username/Password con't be empty";
   
} elseif ($username && password_verify($password, $result['password'] )) {
    $sql = "SELECT username, password FROM admin WHERE username=? ";
    $req = Database::getBdd()->prepare($sql);
    $query->execute($username);

    if($query->rowCount() >= 1) {
        $_SESSION['user'] = $username;
        $_SESSION['time_start_login'] = time();
        header("location: https://arp-cv.website/admin/");
         echo '<p>valid</p>';
    } else {
        
        $messeg = "Username/Password is wrong";
         echo '<p>Invalid password</p>';
        header("location: https://arp-cv.website/admin/login/");
    }
} else {
    echo '<p>Invalid password</p>';
    
    header("location: https://arp-cv.website/admin/login/");
} 
    

?>