<?php

const BASEDIR = '/Users/ahmetcan/Desktop/Projects/php_todo_app';
const URL = 'http://localhost:9000/';
const DEV_MODE = true;

try {
    $db = new PDO('mysql:host=localhost;dbname=todoapp;','root','root');
}catch (PDOException $e){
    echo $e->getMessage();
}