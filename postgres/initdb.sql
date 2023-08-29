CREATE USER myuser;
CREATE DATABASE mydb;
GRANT ALL PRIVILEGES ON DATABASE mydb TO myuser;

\connect mydb
CREATE TABLE ejemplo
(
	clave integer NOT NULL,
	nombre character varying,
	direccion caharacter varying,
	CONSTRAINT pk_claver PRIMARY KEY (clave)
);

AFTER TABLE mytable OWNER TO my user;
