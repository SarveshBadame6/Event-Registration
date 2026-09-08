CREATE TABLE college_events (
    id INT NOT NULL AUTO_INCREMENT,
    student_name VARCHAR(100) NOT NULL,
    roll_no VARCHAR(50) NOT NULL,
    department VARCHAR(100) NOT NULL,
    event_name VARCHAR(100) NOT NULL,
    team_size INT NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO college_events
(student_name, roll_no, department, event_name, team_size, email, phone)
VALUES
('Rahul', '101', 'CSE', 'Hackathon', 2, 'rahul@example.com', '9876543210');

INSERT INTO college_events
(student_name, roll_no, department, event_name, team_size, email, phone)
VALUES
('Amit', '102', 'IT', 'Quiz Competition', 1, 'amit@example.com', '9876543211');

INSERT INTO college_events
(student_name, roll_no, department, event_name, team_size, email, phone)
VALUES
('Sarvesh', '103', 'AI & ML', 'Coding Competition', 3, 'sarvesh@example.com', '9876543212');