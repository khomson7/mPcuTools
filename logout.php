<?php
    session_start();
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);
?>

<script langquage='javascript'>
//removes the item with key and value
sessionStorage.removeItem('auth_Token');
//clears the entire storage
sessionStorage.clear();
window.location='login.php';

    </script>