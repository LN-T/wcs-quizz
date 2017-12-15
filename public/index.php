<?php

// Get Vendor autoload
require_once '../vendor/autoload.php';

use Quest_109_Cookies\Controllers\DefaultController;

$defaultController = new DefaultController();

if (empty($_GET)) {
    echo $defaultController->indexAction();
}

elseif ( ($_GET['page'] === 'question1') ){
    echo $defaultController->question1Action();
}

elseif ( ($_GET['page'] === 'answer1') ){
    echo $defaultController->answer1Action();
}

elseif ( ($_GET['page'] === 'question2') ){
    echo $defaultController->question2Action();
}

elseif ( ($_GET['page'] === 'answer2') ){
    echo $defaultController->answer2Action();
}

elseif ( ($_GET['page'] === 'question3') ){
    echo $defaultController->question3Action();
}

elseif ( ($_GET['page'] === 'answer3') ){
    echo $defaultController->answer3Action();
}

elseif ( ($_GET['page'] === 'question4') ){
    echo $defaultController->question4Action();
}

elseif ( ($_GET['page'] === 'answer4') ){
    echo $defaultController->answer4Action();
}

elseif ( ($_GET['page'] === 'question5') ){
    echo $defaultController->question5Action();
}

elseif ( ($_GET['page'] === 'answer5') ){
    echo $defaultController->answer5Action();
}

elseif ( ($_GET['page'] === 'success') ){
    echo $defaultController->successAction();
}

elseif ( ($_GET['page'] === 'logout') ){
    echo $defaultController->logoutAction();
}
