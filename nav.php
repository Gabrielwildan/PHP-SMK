<nav>

    <ul>
        <li><a href="?menu=contact">contact</a></li>
        <li><a href="?menu=history">history</a></li>
        <li><a href="?menu=subject">subject</a></li>
    </ul>

</nav>

<?php

    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];

        require_once $menu.'.php' ;
    }

?>