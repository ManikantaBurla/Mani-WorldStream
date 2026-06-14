<?php
session_start();
session_destroy();
header("Location: http://localhost/frontend/pages/login.php");
exit;