<?php
session_start();
session_destroy();

header('Location: /formpost/formpost.php');
exit();