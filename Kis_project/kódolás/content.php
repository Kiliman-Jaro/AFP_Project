<?php
    function checAuth()
    {
        if(!isset($_SESSION['id']))
            return false;
        return true;
    }

    if(!isset($_GET['page']) || empty($_GET['page'])) {
        header('Location: index.php?page=2');
    }
    switch($_GET['page']) {
        case 1:
            require_once('register_form.php');
            break;
        case 2:
            require_once('login_form.php');
            break;
        case 3:
            if (checAuth())
                require_once('gallery.php');
            else
                header('Location: index.php?page=1');
            break;
        case 4:
            if (checAuth())
            require_once('addkep_form.php');
            else
                header('Location: index.php?page=1');
            break;           
        case 5:
            if (checAuth())
            require_once('updatekep_form.php');
            else
                header('Location: index.php?page=1');
            break;
        case 6:
            if (checAuth())
            require_once('updateuser_form.php');
            else
                header('Location: index.php?page=1');
            break;
        case 7:
            if (checAuth())
            require_once('logout.php');
            else
                header('Location: index.php?page=1');
            break;
    }
?>