CREATE TABLE api_token (id INT, token VARCHAR(255) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE employee (id INT AUTO_INCREMENT, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE user (user_name VARCHAR(50), password VARCHAR(255) NOT NULL, employee_id INT, INDEX employee_id_idx (employee_id), PRIMARY KEY(user_name)) ENGINE = INNODB;
ALTER TABLE user ADD CONSTRAINT user_employee_id_employee_id FOREIGN KEY (employee_id) REFERENCES employee(id);
