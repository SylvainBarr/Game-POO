<?php

require_once('acceptCookies.php');
require_once('view/header.php');

// TODO : Test if character exists in cookies

if(!empty($_GET['page'])) {
    if($_GET['page'] == 'create-character'){
        require_once('controller/CharacterCreationController.php');
    } elseif($_GET['page'] == ''){
        require_once('controller/');
    }
} else {
    require_once('controller/CharacterCreationController.php');
}



?>
</body>
</html>