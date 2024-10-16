CREATE TABLE aspiring_developers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(10) NOT NULL,
    course VARCHAR(50) NOT NULL,
    year_graduated YEAR NOT NULL,
    school_name VARCHAR(100) NOT NULL,
    programming_languages TEXT,
    frameworks_tools TEXT,
    github_profile VARCHAR(255),
    professional_experience TEXT,
    preferred_field VARCHAR(50),
    personal_statement TEXT,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);