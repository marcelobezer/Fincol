

## About this project

This project is a college assignment to create a collective funding web application using Laravel 5.

## About Migrations

+------------+------------------+------+-----+---------+----------------+
| Field      | Type             | Null | Key | Default | Extra          |
+------------+------------------+------+-----+---------+----------------+
| id         | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
| login      | varchar(16)      | NO   | UNI | NULL    |                |
| senha      | varchar(64)      | NO   |     | NULL    |                |
| nome       | varchar(50)      | NO   |     | NULL    |                |
| created_at | timestamp        | YES  |     | NULL    |                |
| updated_at | timestamp        | YES  |     | NULL    |                |
+------------+------------------+------+-----+---------+----------------+

+------------+------------------+------+-----+---------+----------------+
| Field      | Type             | Null | Key | Default | Extra          |
+------------+------------------+------+-----+---------+----------------+
| id         | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
| titulo     | varchar(50)      | NO   |     | NULL    |                |
| descricao  | varchar(5000)    | NO   |     | NULL    |                |
| custo      | double(12,2)     | NO   |     | NULL    |                |
| duracao    | int(11)          | NO   |     | NULL    |                |
| created_at | timestamp        | YES  |     | NULL    |                |
| updated_at | timestamp        | YES  |     | NULL    |                |
+------------+------------------+------+-----+---------+----------------+

+------------+------------------+------+-----+---------+----------------+
| Field      | Type             | Null | Key | Default | Extra          |
+------------+------------------+------+-----+---------+----------------+
| id         | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
| id_projeto | int(11)          | NO   |     | NULL    |                |
| id_usuario | int(11)          | NO   |     | NULL    |                |
| valor      | double(12,2)     | NO   |     | NULL    |                |
| created_at | timestamp        | YES  |     | NULL    |                |
| updated_at | timestamp        | YES  |     | NULL    |                |
+------------+------------------+------+-----+---------+----------------+

## About the Routes and Controllers

+-----------+---------------------------+-------------------+-------------------+
| **Verb**	| **Path**					| **Action**		| **Route Name** 	|
+-----------+---------------------------+-------------------+-------------------+
| GET		| /usuario/index			| index				| usuario.index		|
| GET		| /usuario/login			| login				| usuario.login		|
| POST		| /usuario/login			| authorizer		| usuario.verificar	|
| GET		| /usuario/cadastrar		| create user		| usuario.cadastrar	|
| POST		| /usuario/cadastrar		| store user		| usuario.salvar	|
| GET		| /projeto/{id}				| show project		| projeto.projeto	|
| GET		| /projeto/cadastrar		| create project	| projeto.cadastrar	|
| POST		| /projeto/cadastrar		| store project		| projeto.cadastro	|
| GET		| /projeto/apoiar/{id}		| create funding	| projeto.apoiar	|
| POST		| /projeto/apoiar/			| store funding		| projeto.apoio		|
| GET		| /projeto/pesquisar		| search project	| projeto.pesquisar	|
| POST		| /projeto/pesquisar		| performs search	| projeto.pesquisar	|
| GET		| /about					| about				| about				|
+-----------+---------------------------+-------------------+-------------------+
	





