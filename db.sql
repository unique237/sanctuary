CREATE TABLE admin(
	adminId serial,
	fname VARCHAR(50),
	lname VARCHAR(50),
	email VARCHAR(50),
	password VARCHAR(50),
	acct_creation_date TIMESTAMP DEFAULT NOW(),
);

CREATE TABLE predication(
	predicationId serial,
	title VARCHAR(50),
	preview VARCHAR(50),
	content TEXT,
	author VARCHAR(50),
	authro_rank VARCHAR(50),
	pred_date TIMESTAMP DEFAULT NOW(),
	adminId INT,
	FOREIGN KEY adminId REFERENCES admin(adminId)
);

CREATE TABLE article(
	articleId serial,
	title VARCHAR(50),
	CATEGORY VARCHAR(50),
	description VARCHAR(255),
	content TEXT,
	publish_date TIMESTAMP DEFAULT NOW(),
	adminId INT,
	FOREIGN KEY adminId REFERENCES admin(adminId)
);

