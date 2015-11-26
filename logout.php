<?php
setcookie("User", "", time() - 864000);
header('Location: login.php');
?>