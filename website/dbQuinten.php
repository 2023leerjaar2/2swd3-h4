<?php 
function connect(){
    try {
        return new mysqli ('localhost', 'root', '', 'testDB');
    }catch (expection $e){
        echo "database connect niet";
    }
}
?>