-- Create database if not exists - **MUST** match the DB_NAME in .env
CREATE DATABASE IF NOT EXISTS my_database CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE my_database;

-- Create Users table
CREATE TABLE IF NOT EXISTS Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(50) NOT NULL DEFAULT '',
    firstName VARCHAR(50) NOT NULL DEFAULT '',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Create Post table
CREATE TABLE IF NOT EXISTS Post (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    date DATETIME DEFAULT CURRENT_TIMESTAMP,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert sample users (passwords are stored in plain text for this example - NOT recommended for production!)
INSERT INTO Users (login, password) VALUES
    ('admin', 'admin1234567'),
    ('defaut', 'password1234'),
    ('user1', 'test123');

-- Insert sample posts
INSERT INTO Post (title, body, date, user_id) VALUES
    ('Premier article', 'Ceci est le contenu du premier article de blog. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2024-01-15 10:00:00', 1),
    ('Deuxieme article', 'Voici un autre article interessant sur le developpement web et les bonnes pratiques.', '2024-01-16 14:30:00', 1),
    ('Article sur PHP', 'PHP est un langage de programmation cote serveur tres populaire pour le developpement web.', '2024-01-17 09:15:00', 2),
    ('Les bases de donnees', 'MySQL est un systeme de gestion de base de donnees relationnelle largement utilise.', '2024-01-18 16:45:00', 2),
    ('Securite web', 'La securite est un aspect crucial du developpement d applications web modernes.', '2024-01-19 11:20:00', 3);
