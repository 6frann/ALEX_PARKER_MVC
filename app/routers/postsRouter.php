<?php
use \App\Controllers\PostsController;
include_once '../app/controllers/postsController.php';

switch ($_GET['posts']):
    case 'show':
        PostsController\showAction($connexion, $_GET['id']);
        break;
    case 'form':
            PostsController\formAction();
            break;
endswitch;