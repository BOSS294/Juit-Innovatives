CREATE TABLE logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    log_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    message TEXT NOT NULL,
    ip_address VARCHAR(45) NOT NULL
);
CREATE TABLE users (
    userId VARCHAR(50) PRIMARY KEY,
    firstName VARCHAR(100) NOT NULL,
    lastName VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    email VARCHAR(255) NOT NULL UNIQUE,
    address VARCHAR(255),
    password VARCHAR(255) NOT NULL,
    status ENUM('Online', 'Offline', 'Banned') DEFAULT 'Offline',
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
