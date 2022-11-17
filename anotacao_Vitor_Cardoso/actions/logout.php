<?php
session_start();
unset($_SESSION['Id_user']);
header ("Location: ../pages/login.php");
