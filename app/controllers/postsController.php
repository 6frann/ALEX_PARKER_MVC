<?php
namespace App\Controllers\PostsController;
use \PDO, \App\Models\PostsModel;

function indexAction(PDO $connexion) {
    include_once '../app/models/postsModel.php';
    $posts = PostsModel\findAll($connexion);
    
    GLOBAL $content, $title;
    $title = 'Alex Parker - Blog';
    ob_start();
    include_once '../app/views/posts/index.php';
    $content = ob_get_clean(); 
}

function showAction(PDO $connexion, int $id) {
    include_once '../app/models/postsModel.php';
    $post = PostsModel\findOneById($connexion, $id);
    
    GLOBAL $content, $title;
    $title = 'Alex Parker -' . $post['title'];
    ob_start();
    include_once '../app/views/posts/show.php';
    $content = ob_get_clean(); 
}

function formAction() {
    GLOBAL $content, $title;
    $title = 'Add a post';
    ob_start();
    include_once '../app/views/posts/form.php';
    $content = ob_get_clean(); 
}