<?php
session_start();
session_destroy();
header("Location: http://localhost/WorldStream/frontend/pages/login.php");
exit;