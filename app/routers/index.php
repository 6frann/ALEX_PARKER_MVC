<?php 
if(isset ($_GET['posts'])):
    include_once '../app/routers/postsRouter.php';
else:
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($connexion);
endif;