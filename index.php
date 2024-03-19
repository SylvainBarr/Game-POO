<?php

require_once('acceptCookies.php');
require_once('view/header.php');

// TODO : Test if character exists in cookies

if(!empty($_GET['page'])) {
    if($_GET['page'] == 'create-character'){
        require_once('view/characterCreation.php');
    } elseif($_GET['page'] == ''){
        require_once('view/');
    }
} else {
    require_once('view/characterCreation.php');
}



?>
</body>
</html>