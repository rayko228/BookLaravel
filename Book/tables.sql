drop database books;
CREATE database books;
use books;
CREATE TABLE libraries
(
    id              INT AUTO_INCREMENT PRIMARY KEY,
    name            VARCHAR(40) NOT NULL,
    libraryAddress  VARCHAR(40) NOT NULL,
    employeesCount  VARCHAR(40) NOT NULL,
    libraryBudget   VARCHAR(40) NOT NULL,
    noiseLevel      int(11)     NOT NULL,
    booksRange      VARCHAR(40) NOT NULL,
    libraryType     VARCHAR(40) NOT NULL,
    employeesSkills VARCHAR(40) NOT NULL,
    designInterior  VARCHAR(40) NOT NULL,
    updated_at      date,
    created_at      date
);

Create table books
(
    id                INT AUTO_INCREMENT PRIMARY KEY,
    name              varchar(225) UNIQUE NOT NULL,
    bookAuthor        VARCHAR(40)         NOT NULL,
    bookGenre         VARCHAR(40)         NOT NULL,
    bookYear          date                NOT NULL,
    pagesNumber       int                 NOT NULL,
    bookPublishing    VARCHAR(40)         NOT NULL,
    coverType         VARCHAR(40)         NOT NULL,
    psychologicalLoad VARCHAR(40)         NOT NULL,
    bookLanguage      VARCHAR(40)         NOT NULL,
    authorsNumber     int                 NOT NULL,
    library_id        int                 not null,
    updated_at        date,
    created_at        date,
    FOREIGN KEY (library_id) REFERENCES libraries (id) ON DELETE CASCADE
);
