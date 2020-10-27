<?php

echo file_get_contents('index.html');
if(isset($_GET['input'])){
    echo '<div>' . $_GET['input'] . '</div>';
}

?>
