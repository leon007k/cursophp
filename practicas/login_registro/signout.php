<?php

session_start();
session_destroy();

$_SESSIO[] = array();
header('Location: login.php');