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

function addAction(PDO $connexion, array $data) {
    include_once '../app/models/postsModel.php';
    $id = PostsModel\addOne($connexion, $data);

    header('Location: ' . BASE_PUBLIC_URL );
}

function editFormAction(PDO $connexion, int $id) {
    include_once '../app/models/postsModel.php';
    $post = PostsModel\findOneById($connexion, $id);
    
    GLOBAL $content, $title;
    $title = 'Alex Parker - Edit a post';
    ob_start();
    include_once '../app/views/posts/editForm.php';
    $content = ob_get_clean(); 
}

function updateFormAction(PDO $connexion, int $id) {
    include_once '../app/models/postsModel.php';
    $response = PostsModel\updateOneById($connexion, $id, $_POST);

    header('Location: ' . BASE_PUBLIC_URL . 'posts/' . $id . '/' . \Core\Helpers\slugify($_POST['title']));
    exit;
}
function deleteAction(PDO $connexion, int $id) {
    include_once '../app/models/postsModel.php';
    $response = PostsModel\deleteOneById($connexion, $id);

    header('Location: ' . BASE_PUBLIC_URL );
}