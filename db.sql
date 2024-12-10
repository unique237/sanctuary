CREATE TABLE admin (
    adminId serial PRIMARY KEY,
    fname VARCHAR(50),
    lname VARCHAR(50),
    email VARCHAR(50),
    password VARCHAR(50),
    acct_creation_date TIMESTAMP DEFAULT NOW()
);

CREATE TABLE article (
    articleId serial PRIMARY KEY,
    image_link VARCHAR(150),
    title VARCHAR(50),
    short VARCHAR(75),
    category VARCHAR(50),
    post_date TIMESTAMP DEFAULT NOW(),
    title_one VARCHAR(50),
    paragraph_one TEXT,
    title_two VARCHAR(50),
    paragraph_two TEXT,
    title_three VARCHAR(50),
    paragraph_three TEXT,
    title_four VARCHAR(50),
    paragraph_four TEXT,
	situation VARCHAR(15),
    localization VARCHAR(15),
    link_des_one VARCHAR(50), -- Increased length
    link_one VARCHAR(100),    -- Increased length
    link_des_two VARCHAR(50), -- Increased length
    link_two VARCHAR(100),    -- Increased length
    link_des_three VARCHAR(50), -- Increased length
    link_three VARCHAR(100), -- Increased length
    publish_date TIMESTAMP DEFAULT NOW(),
    adminId INT,
    FOREIGN KEY (adminId) REFERENCES admin(adminId)
);

CREATE TABLE testimony (
    testimony_id serial PRIMARY KEY,
    title VARCHAR(50),
    youtube VARCHAR(250),
    adminId INT,
    description VARCHAR(150),
    image_ink VARCHAR(150),
    FOREIGN KEY (adminId) REFERENCES admin(adminId)
);

CREATE TABLE weekly (
    weekly_id serial PRIMARY KEY,
    category VARCHAR(25),
    image_ink VARCHAR(150),
    title VARCHAR(50),
    description TEXT,
    link VARCHAR(100), -- Increased length
    adminId INT,
    FOREIGN KEY (adminId) REFERENCES admin(adminId)
);



CREATE TABLE church (
    church_id serial PRIMARY KEY,
    church_name VARCHAR(75),
    image_link VARCHAR(150),
    country VARCHAR(50),
    localization VARCHAR(50),
    description VARCHAR(150),
    organization VARCHAR(150),
    contact VARCHAR(50)
);

CREATE TABLE predication(
    id serial PRIMARY KEY,
    title VARCHAR(50),
    description VARCHAR(255),
    image_url VARCHAR(150),
    author VARCHAR(25),
    publish_date TIMESTAMP DEFAULT NOW(),
    fb_link VARCHAR(150)
);

CREATE TABLE media(
    id serial PRIMARY KEY,
    category VARCHAR(25),
    title VARCHAR(50),
    description VARCHAR(255),
    image_url VARCHAR(150),
    publish_date TIMESTAMP,
    fb_link VARCHAR(150)
);