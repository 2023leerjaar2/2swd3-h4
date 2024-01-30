<?php 
function connect(){
    try {
        return new mysqli ('localhost', 'root', '', 'testdb');
    }catch (Exception $e){
        echo "database connect niet";
    }
}
?>