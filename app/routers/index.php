<?php 
if(isset ($_GET['posts'])):
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\showAction($connexion, $_GET['id']);
else:
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($connexion);
endif;