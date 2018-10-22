<?php

switch ($_SERVER['REQUEST_URI']){
    case '/':
        require_once 'pages/drawme.html';
        break;

    default:
        echo "Some troubles";
}