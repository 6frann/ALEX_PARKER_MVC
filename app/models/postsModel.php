<?php
namespace App\Models\PostsModel;
use \PDO;

function findAll(PDO $connexion): array {
    $sql = "SELECT *
            FROM posts
            ORDER BY created_at DESC
            LIMIT 10;";

    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById(PDO $connexion, int $id) {
    $sql = "SELECT*, p.id, c.id
            FROM posts p
            INNER JOIN categories c ON p.category_id = c.id           
            WHERE p.id = :id;";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();

    return $rs->fetch(PDO::FETCH_ASSOC);         

}