<?php
const SERVER = "localhost";
const DB = "mylesson5";
const LOGIN = "root";
const PASS = "";
CONST PHOTO = './images/big/';
CONST PHOTO_SMALL = './images/small/';

$connect = mysqli_connect(SERVER,LOGIN,PASS,DB) or 
    die("Ошибка соединения с базой данных");
	