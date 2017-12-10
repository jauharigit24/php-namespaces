<?php
require_once 'bootstrapp.php';
Class Product{
    function __construct(){
        echo "Products are loaded.<br/>";
    }
}
new DB();
new Product();

