`sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(255),
    role VARCHAR(20)
);

CREATE TABLE members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100),
    gender VARCHAR(10),
    phone VARCHAR(15),
    address VARCHAR(100),
    join_date DATE
);

CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    event_date DATE,
    description TEXT
);

CREATE TABLE attendance (
    id INT AUTO_INCREMENT PRIMARY KEY,
    member_name VARCHAR(100),
    status VARCHAR(10),
    date DATE
);

CREATE TABLE tithes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    member_name VARCHAR(100),
    amount DECIMAL(10,2),
    date DATE
);
