drop table if exists users;
create table users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(50) NOT NULL,
    user_email VARCHAR(50) NOT NULL UNIQUE,
    user_password VARCHAR(50) NOT NULL,
    user_state INTEGER(1) DEFAULT 1,
    user_time_created DATETIME DEFAULT CURRENT_TIMESTAMP,
    usuario_time_updated DATETIME DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
);
