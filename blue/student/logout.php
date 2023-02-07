<?php

session_start();

unset($_SESSION['nisn']);
header("location:login.php");