CREATE USER DDL_USER@localhost IDENTIFIED BY '777becarioDDL777';
GRANT CREATE, ALTER, DROP, CREATE VIEW, DROP VIEW, SHOW VIEW ON pelianalitic.* TO DDL@localhost WITH GRANT OPTION;
FLUSH PRIVILEGES;

CREATE USER DML@localhost IDENTIFIED BY '11becarioDML11';
GRANT INSERT, UPDATE, DELETE, SELECT ON pelianalitic.* TO DML@localhost WITH GRANT OPTION;
FLUSH PRIVILEGES;

CREATE USER ibeth_IBT@localhost IDENTIFIED BY 'twice129';
GRANT ALL PRIVILEGES pelianalitic.* TO ibeth_IBT@localhost WITH GRANT OPTION;
FLUSH PRIVILEGES;

CREATE USER valeria@localhost IDENTIFIED BY 'bangtan228';
GRANT ALL PRIVILEGES ON pelianalitic.* TO valeria@localhost WITH GRANT OPTION;
FLUSH PRIVILEGES;

CREATE USER supremo@localhost IDENTIFIED BY 'abc123muydificl';
GRANT ALL PRIVILEGES ON pelianalitic.* TO supremo@localhost WITH GRANT OPTION;
FLUSH PRIVILEGES;