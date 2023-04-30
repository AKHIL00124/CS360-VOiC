<?php

session_start();

session_destroy();

header("Location: Log-In.php");
exit;