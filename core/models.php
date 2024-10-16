<?php

require_once 'dbConfig.php';

function insertIntoAspiringDevelopers($pdo, $data) {
    $sql = "INSERT INTO aspiring_developers (first_name, last_name, age, gender, course, year_graduated, school_name, programming_languages, frameworks_tools, github_profile, professional_experience, preferred_field, personal_statement) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute($data);
}

function seeAllAspiringDevelopers($pdo) {
    $sql = "SELECT * FROM aspiring_developers";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getDeveloperByID($pdo, $id) {
    $sql = "SELECT * FROM aspiring_developers WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function updateADeveloper($pdo, $id, $data) {
    $sql = "UPDATE aspiring_developers SET first_name = ?, last_name = ?, age = ?, gender = ?, course = ?, year_graduated = ?, school_name = ?, programming_languages = ?, frameworks_tools = ?, github_profile = ?, professional_experience = ?, preferred_field = ?, personal_statement = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([...$data, $id]);
}

function deleteADeveloper($pdo, $id) {
    $sql = "DELETE FROM aspiring_developers WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$id]);
}
?>