<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<?php $developer = getDeveloperByID($pdo, $_GET['id']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Developer</title>
    <style>
        body { font-family: "Arial"; }
    </style>
</head>
<body>
    <h1>Are you sure you want to delete this developer?</h1>
    <form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div>
            <p>First Name: <?php echo htmlspecialchars($developer['first_name']); ?></p>
            <p>Last Name: <?php echo htmlspecialchars($developer['last_name']); ?></p>
            <p>Age: <?php echo htmlspecialchars($developer['age']); ?></p>
            <p>Gender: <?php echo htmlspecialchars($developer['gender']); ?></p>
            <p>Course: <?php echo htmlspecialchars($developer['course']); ?></p>
            <p>School Name: <?php echo htmlspecialchars($developer['school_name']); ?></p>
            <p>Programming Languages: <?php echo htmlspecialchars($developer['programming_languages']); ?></p>
            <p>Frameworks & Tools: <?php echo htmlspecialchars($developer['frameworks_tools']); ?></p>
            <p>GitHub Profile: <a href="<?php echo htmlspecialchars($developer['github_profile']); ?>" target="_blank"><?php echo htmlspecialchars($developer['github_profile']); ?></a></p>
            <p>Professional Experience: <?php echo htmlspecialchars($developer['professional_experience']); ?></p>
            <p>Preferred Field: <?php echo htmlspecialchars($developer['preferred_field']); ?></p>
            <p>Personal Statement: <?php echo htmlspecialchars($developer['personal_statement']); ?></p>
            <input type="submit" name="deleteDeveloperBtn" value="Delete">
        </div>
    </form>
</body>
</html>