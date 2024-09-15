CREATE DATABASE IF NOT EXISTS memoanniv_db;
USE memoanniv_db;

DROP TABLE IF EXISTS timestamps, user, birthday, category;


CREATE TABLE user (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL,
  role VARCHAR(10) DEFAULT 'user' NOT NULL,
  isActive BOOLEAN DEFAULT true NOT NULL,
  phone VARCHAR(20),
  lastLogin DATETIME,
  country VARCHAR(80),
  img VARCHAR(255),
  theme VARCHAR(100) DEFAULT 'standard' NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
  updated_at DATETIME,
  deleted_at DATETIME
) ENGINE=InnoDB;


CREATE TABLE category (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  user_id INT NOT NULL,
  FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE birthday (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  description TEXT,
  birthday_date DATETIME,
  message TEXT,
  phone VARCHAR(20),
  email VARCHAR(255) UNIQUE NOT NULL,
  likes TEXT,
  user_id INT NOT NULL,
  category_id INT NOT NULL,
  FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE,
  FOREIGN KEY (category_id) REFERENCES category(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- INJECTION DE DONNEES DE TEST ---
INSERT INTO user (name, password, email, role, isActive, theme) 
VALUES 
("anais", "anais", "anais@gmail.com", "admin", true, "standard"),
("xavier", "xavier", "xavier@gmail.com", "user", true, "standard");
