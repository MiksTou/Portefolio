<?php
function flash(){
    if(isset($_SESSION['Flash'])){
        extract($_SESSION['FLash']);
        unset($_SESSION['Flash']);
        return "<div class='alert alert-success' role='alert'>$message</div>";
    }
}

function setFlash($message, $type = 'succes'){
    $_SESSION['Flash']['message'] = $message;
    $_SESSION['Flash']['type'] = $type;
}