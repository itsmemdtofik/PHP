<<?php

session_start();

if(isset($_SESSION['uname'])){

    echo "<script>alert('Welcome to the index page')</script>";

    echo  "<br><a href='welcome_page.php'><input type=button name=back value=Back></a>";
}
else{

    echo "<script>location.href='login.php'</script>";
}






?>