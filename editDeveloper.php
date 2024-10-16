<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<?php $developer = getDeveloperByID($pdo, $_GET['id']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Developer</title>
    <style>
        body { font-family: "Arial"; }
        input, textarea { font-size: 1.5em; height: 50px; width: 200px; }
        form p {
    margin-bottom: 10px; 
}

label {
    display: inline-block;
    width: 90px;
}

input, textarea {
    width: 200px; 
    margin-left: 10px; 
    font-size: 1em;
    padding: 8px;
    box-sizing: border-box; 
}
    </style>
</head>
<body>
    <form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <p><label for="firstName">First Name</label><input type="text" name="firstName" value="<?php echo htmlspecialchars($developer['first_name']); ?>"></p>
        <p><label for="lastName">Last Name</label><input type="text" name="lastName" value="<?php echo htmlspecialchars($developer['last_name']); ?>"></p>
        <p><label for="age">Age</label><input type="number" name="age" value="<?php echo htmlspecialchars($developer['age']); ?>"></p>
        <p><label for="gender">Gender</label><input type="text" name="gender" value="<?php echo htmlspecialchars($developer['gender']); ?>"></p>
        <p><label for="course">Course</label><input type="text" name="course" value="<?php echo htmlspecialchars($developer['course']); ?>"></p>
        <p><label for="yearGraduated">Year Graduated</label><input type="number" name="yearGraduated" value="<?php echo htmlspecialchars($developer['year_graduated']); ?>"></p>
        <p><label for="schoolName">School Name</label><input type="text" name="schoolName" value="<?php echo htmlspecialchars($developer['school_name']); ?>"></p>
        <p><label for="programmingLanguages">Programming Languages</label><textarea name="programmingLanguages"><?php echo htmlspecialchars($developer['programming_languages']); ?></textarea></p>
        <p><label for="frameworksTools">Frameworks & Tools</label><textarea name="frameworksTools"><?php echo htmlspecialchars($developer['frameworks_tools']); ?></textarea></p>
        <p><label for="githubProfile">GitHub Profile</label><input type="url" name="githubProfile" value="<?php echo htmlspecialchars($developer['github_profile']); ?>"></p>
        <p><label for="professionalExperience">Professional Experience</label><textarea name="professionalExperience"><?php echo htmlspecialchars($developer['professional_experience']); ?></textarea></p>
        <p><label for="preferredField">Preferred Field</label><input type="text" name="preferredField" value="<?php echo htmlspecialchars($developer['preferred_field']); ?>"></p>
        <p><label for="personalStatement">Personal Statement</label><textarea name="personalStatement"><?php echo htmlspecialchars($developer['personal_statement']); ?></textarea></p>
        <p><input type="submit" name="editDeveloperBtn" value="Update"></p>
    </form>
</body>
</html>