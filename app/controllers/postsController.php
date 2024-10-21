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