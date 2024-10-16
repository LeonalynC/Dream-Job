<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspiring Developers Registration</title>
    <style>
        body { font-family: "Arial"; }
        input, textarea { font-size: 1.5em; height: 50px; width: 200px; }
        table, th, td { border: 1px solid black; }
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
    <h3>Register as an Aspiring Software Developer!</h3>
    <form action="/dream_job_registration/core/handleForms.php" method="post">
        <p><label for="firstName">First Name</label><input type="text" name="firstName" required></p>
        <p><label for="lastName">Last Name</label><input type="text" name="lastName" required></p>
        <p><label for="age">Age</label><input type="number" name="age" required></p>
        <p><label for="gender">Gender</label><input type="text" name="gender" required></p>
        <p><label for="course">Course</label><input type="text" name="course" required></p>
        <p><label for="yearGraduated">Year Graduated</label><input type="number" name="yearGraduated" required></p>
        <p><label for="schoolName">School Name</label><input type="text" name="schoolName" required></p>
        <p><label for="programmingLanguages">Programming Languages</label><textarea name="programmingLanguages"></textarea></p>
        <p><label for="frameworksTools">Frameworks & Tools</label><textarea name="frameworksTools"></textarea></p>
        <p><label for="githubProfile">GitHub Profile</label><input type="url" name="githubProfile"></p>
        <p><label for="professionalExperience">Professional Experience</label><textarea name="professionalExperience"></textarea></p>
        <p><label for="preferredField">Preferred Field</label><input type="text" name="preferredField"></p>
        <p><label for="personalStatement">Personal Statement</label><textarea name="personalStatement"></textarea></p>
        <p><input type="submit" name="insertDeveloperBtn" value="Register"></p>
    </form>

    <table style="width:100%; margin-top: 50px;">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Course</th>
            <th>Year Graduated</th>
            <th>School Name</th>
            <th>Programming Languages</th>
            <th>Frameworks & Tools</th>
            <th>GitHub Profile</th>
            <th>Professional Experience</th>
            <th>Preferred Field</th>
            <th>Personal Statement</th>
            <th>Action</th>
        </tr>
        <?php 
        require_once 'core/dbConfig.php';
        require_once 'core/models.php';
        $developers = seeAllAspiringDevelopers($pdo);
        foreach ($developers as $developer) { ?>
        <tr>
            <td><?php echo $developer['id']; ?></td>
            <td><?php echo $developer['first_name']; ?></td>
            <td><?php echo $developer['last_name']; ?></td>
            <td><?php echo $developer['age']; ?></td>
            <td><?php echo $developer['gender']; ?></td>
            <td><?php echo $developer['course']; ?></td>
            <td><?php echo $developer['year_graduated']; ?></td>
            <td><?php echo $developer['school_name']; ?></td>
            <td><?php echo $developer['programming_languages']; ?></td>
            <td><?php echo $developer['frameworks_tools']; ?></td>
            <td><?php echo $developer['github_profile']; ?></td>
            <td><?php echo $developer['professional_experience']; ?></td>
            <td><?php echo $developer['preferred_field']; ?></td>
            <td><?php echo $developer['personal_statement']; ?></td>
            <td>
                <a href="editDeveloper.php?id=<?php echo $developer['id'];?>">Edit</a>
                <a href="deleteDeveloper.php?id=<?php echo $developer['id'];?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>