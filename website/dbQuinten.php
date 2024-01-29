<?php 
function connect(){
    try {
        return new mysqli ('localhost', 'root', '', 'kamadoing');
    }catch (Exception $e){
        echo "database connect niet";
    }
}
?>