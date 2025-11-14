<?php
session_start();
session_unset();
session_destroy();
header("Location: ../Frontend/Login.php?cerrado=1");
exit();
?>