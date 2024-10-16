<?php
require_once 'dbConfig.php';
require_once 'models.php';

// Insert
if (isset($_POST['insertDeveloperBtn'])) {
    $data = [
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['age'],
        $_POST['gender'],
        $_POST['course'],
        $_POST['yearGraduated'],
        $_POST['schoolName'],
        $_POST['programmingLanguages'],
        $_POST['frameworksTools'],
        $_POST['githubProfile'],
        $_POST['professionalExperience'],
        $_POST['preferredField'],
        $_POST['personalStatement']
    ];

    if (insertIntoAspiringDevelopers($pdo, $data)) {
        header("Location: ../index.php");
    } else {
        echo "Error inserting record.";
    }
}

// Update
if (isset($_POST['editDeveloperBtn'])) {
    $id = $_GET['id'];
    $data = [
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['age'],
        $_POST['gender'],
        $_POST['course'],
        $_POST['yearGraduated'],
        $_POST['schoolName'],
        $_POST['programmingLanguages'],
        $_POST['frameworksTools'],
        $_POST['githubProfile'],
        $_POST['professionalExperience'],
        $_POST['preferredField'],
        $_POST['personalStatement']
    ];

    if (updateADeveloper($pdo, $id, $data)) {
        header("Location: ../index.php");
    } else {
        echo "Update failed.";
    }
}

// Delete
if (isset($_POST['deleteDeveloperBtn'])) {
    $id = $_GET['id'];

    if (deleteADeveloper($pdo, $id)) {
        header("Location: ../index.php");
    } else {
        echo "Deletion failed.";
    }
}
?>