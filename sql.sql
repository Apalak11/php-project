CREATE TABLE admins (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL
);

CREATE TABLE content (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    body TEXT
);


INSERT INTO content (title, body)
VALUES
    ('Introduction to Web Development', 'Web development is the process of creating websites and web applications...'),
    ('Getting Started with HTML', 'HTML (Hypertext Markup Language) is the standard markup language for creating web pages...'),
    ('CSS Styling Techniques', 'CSS (Cascading Style Sheets) is used for styling the visual presentation of web pages...'),
    ('JavaScript Basics', 'JavaScript is a versatile scripting language that adds interactivity and dynamic behavior to websites...'),
    ('Database Management with SQL', 'SQL (Structured Query Language) is used for managing and querying databases...'),
    ('Responsive Web Design', 'Responsive web design ensures that websites look and function well on different devices...'),
    ('Introduction to PHP', 'PHP (Hypertext Preprocessor) is a server-side scripting language for building dynamic web pages...');