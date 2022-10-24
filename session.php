<nav>

    <ul>
        <li><a href="?menu=fill">fill</a></li>
        <li><a href="?menu=delete">delete</a></li>
        <li><a href="?menu=destroy">destroy</a></li>
    </ul>

</nav>

<?php

    session_start();

    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];

        echo $menu;

        switch ($menu) {
            case 'fill':
               isisession();
                break;

            case 'delete':
                unset($_SESSION['user']);
                break;
            
            case 'destroy':
                session_destroy();
                break;
            
            default:
                # code...
                break;
        }
    }


    function isisession(){
        
    $_SESSION['user'] = 'stephen';

    $_SESSION['name'] = 'farhan kebab';

    $_SESSION['alamat'] = 'earth';

    }

?>