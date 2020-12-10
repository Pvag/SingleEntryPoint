<?php
include 'Operator.php';

$operator = new Operator();
$action = $_GET['action'] ?? 'home';
$title = $operator->$action();

include 'layout.html.php';
