CREATE TABLE Author(
	Authorid integer,
	Authorname varchar(20),
	PRIMARY KEY (Authorid)
);

CREATE TABLE book (
    bookid INTEGER,
    authorid INTEGER,
    amount NUMERIC(7,2),
    rating INTEGER,
    booktype VARCHAR(25),
    CHECK(rating >= 1 AND rating <= 10),
    CHECK(
        booktype = "Adult Fiction" OR 
        booktype = "Adult non-fiction" OR
        booktype = "Youth fiction" OR
        booktype = "Youth non-fiction"
    ),
    PRIMARY KEY (bookid),
    FOREIGN KEY (authorid) REFERENCES author(authorid)
    ON UPDATE CASCADE ON DELETE CASCADE
);