CREATE TABLE application (id INT AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, state VARCHAR(100), description VARCHAR(255), company_id INT, INDEX company_id_idx (company_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE company (id INT AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, is_active TINYINT(1) DEFAULT '0' NOT NULL, country_id INT, INDEX country_id_idx (country_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE country (id INT AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE guide (id INT AUTO_INCREMENT, code VARCHAR(255) NOT NULL UNIQUE, name VARCHAR(255) NOT NULL UNIQUE, url VARCHAR(255) NOT NULL, description VARCHAR(255), tool_id INT, INDEX tool_id_idx (tool_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE project (id INT AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, url VARCHAR(255), description VARCHAR(255), company_id INT, INDEX company_id_idx (company_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE project_tool (project_id INT, tool_id INT, PRIMARY KEY(project_id, tool_id)) ENGINE = INNODB;
CREATE TABLE tool (id INT AUTO_INCREMENT, code VARCHAR(255) NOT NULL UNIQUE, name VARCHAR(255) NOT NULL UNIQUE, url VARCHAR(255), description VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_forgot_password (id BIGINT AUTO_INCREMENT, user_id BIGINT NOT NULL, unique_key VARCHAR(255), expires_at DATETIME NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group_permission (group_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(group_id, permission_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_permission (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_remember_key (id BIGINT AUTO_INCREMENT, user_id BIGINT, remember_key VARCHAR(32), ip_address VARCHAR(50), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user (id BIGINT AUTO_INCREMENT, first_name VARCHAR(255), last_name VARCHAR(255), email_address VARCHAR(255) NOT NULL UNIQUE, username VARCHAR(128) NOT NULL UNIQUE, algorithm VARCHAR(128) DEFAULT 'sha1' NOT NULL, salt VARCHAR(128), password VARCHAR(128), is_active TINYINT(1) DEFAULT '1', is_super_admin TINYINT(1) DEFAULT '0', last_login DATETIME, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX is_active_idx_idx (is_active), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_group (user_id BIGINT, group_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, group_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_permission (user_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, permission_id)) ENGINE = INNODB;
ALTER TABLE application ADD CONSTRAINT application_company_id_company_id FOREIGN KEY (company_id) REFERENCES company(id);
ALTER TABLE company ADD CONSTRAINT company_country_id_country_id FOREIGN KEY (country_id) REFERENCES country(id);
ALTER TABLE guide ADD CONSTRAINT guide_tool_id_tool_id FOREIGN KEY (tool_id) REFERENCES tool(id);
ALTER TABLE project ADD CONSTRAINT project_company_id_company_id FOREIGN KEY (company_id) REFERENCES company(id);
ALTER TABLE project_tool ADD CONSTRAINT project_tool_tool_id_tool_id FOREIGN KEY (tool_id) REFERENCES tool(id);
ALTER TABLE project_tool ADD CONSTRAINT project_tool_project_id_project_id FOREIGN KEY (project_id) REFERENCES project(id);
ALTER TABLE sf_guard_forgot_password ADD CONSTRAINT sf_guard_forgot_password_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_remember_key ADD CONSTRAINT sf_guard_remember_key_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
