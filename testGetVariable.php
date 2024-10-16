<?php

require_once 'core/dbConfig.php';
require_once 'core/models.php';


if (isset($_GET['id'])) {
    $developer = getDeveloperByID($pdo, $_GET['id']);
    if ($developer) {
        echo "<h2>Developer Information:</h2>";
        echo "<p>First Name: " . htmlspecialchars($developer['first_name']) . "</p>";
        echo "<p>Last Name: " . htmlspecialchars($developer['last_name']) . "</p>";
        echo "<p>Age: " . htmlspecialchars($developer['age']) . "</p>";
        echo "<p>Gender: " . htmlspecialchars($developer['gender']) . "</p>";
        echo "<p>Course: " . htmlspecialchars($developer['course']) . "</p>";
        echo "<p>School Name: " . htmlspecialchars($developer['school_name']) . "</p>";
        echo "<p>Programming Languages: " . htmlspecialchars($developer['programming_languages']) . "</p>";
        echo "<p>Frameworks & Tools: " . htmlspecialchars($developer['frameworks_tools']) . "</p>";
        echo "<p>GitHub Profile: <a href=\"" . htmlspecialchars($developer['github_profile']) . "\" target=\"_blank\">" . htmlspecialchars($developer['github_profile']) . "</a></p>";
        echo "<p>Professional Experience: " . htmlspecialchars($developer['professional_experience']) . "</p>";
        echo "<p>Preferred Field: " . htmlspecialchars($developer['preferred_field']) . "</p>";
        echo "<p>Personal Statement: " . htmlspecialchars($developer['personal_statement']) . "</p>";
    } else {
        echo "<p>No developer found with the specified ID.</p>";
    }
} else {
    echo "<p>ID parameter not provided in the URL.</p>";
}

?>