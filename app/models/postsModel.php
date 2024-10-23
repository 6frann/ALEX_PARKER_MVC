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

function findOneById(PDO $connexion, int $id) :array {
    $sql = "SELECT *
            FROM posts
            WHERE id = :id;";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();

    return $rs->fetch(PDO::FETCH_ASSOC);         

}

function addOne(PDO $connexion, array $data): int {
    
    $sql = "INSERT INTO posts
            SET title = :title,
                text = :text,
                quote = :quote,
                image = :image,
                created_at = NOW();";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':title', $data['title'], PDO::PARAM_STR);
    $rs->bindValue(':text', $data['text'], PDO::PARAM_STR);
    $rs->bindValue(':quote', $data['quote'], PDO::PARAM_STR);
    $rs->bindValue(':image', $data['image'], PDO::PARAM_STR);
    $rs->execute();
    return $connexion->lastInsertId();
}

function updateOneById(PDO $connexion, int $id, array $data): bool {
    
    $sql = "UPDATE posts
            SET 
                title = :title,
                text = :text,
                quote = :quote
            WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':title', $data['title'], PDO::PARAM_STR);
    $rs->bindValue(':text', $data['text'], PDO::PARAM_STR);
    $rs->bindValue(':quote', $data['quote'], PDO::PARAM_STR); 
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    return $rs->execute();
}