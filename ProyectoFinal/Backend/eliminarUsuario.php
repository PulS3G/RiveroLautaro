<?php 
require_once "User.php";
if (isset($_GET['delete_user'])) {
    $userId = intval($_GET['delete_user']); 
    $user = new User();
    $user->delete($userId);
}
?>