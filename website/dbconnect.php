<?php 
function connect(){
    try {
        return new mysqli ('localhost', 'root', '', 'kamadoing');
    }catch (expection $e){
        echo "database connect niet";
    }
}
?>