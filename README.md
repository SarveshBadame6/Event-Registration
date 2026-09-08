# 🎓 Campus Event Registration System

A simple and secure **database-driven web application** developed to manage student registrations for various college events.

The system allows students to register for events, view registered students, and search registrations by event name.

---

## 📌 Project Information

| Detail | Information |
|---|---|
| **Project Title** | Campus Event Registration System |
| **Student Name** | Sarvesh Badame |
| **Roll Number** | MLU24F194 |
| **Project Statement** | 4 |
| **Technology** | PHP, MySQL, HTML, CSS |
| **Database** | MySQL |
| **Hosting** | InfinityFree |
| **Live Website** | http://campusevent.infinityfree.me/ |

---

## 🎯 Project Objective

The main objective of this project is to develop a simple web-based system for managing college event registrations.

The system provides an easy way for students to:

- Register for college events
- Enter their personal and academic details
- Select an event
- Specify team size
- View all registered students
- Search registrations by event
- Store registration data in a MySQL database

---

## ✨ Features

### 👨‍🎓 Student Registration
Students can enter:

- Student Name
- Roll Number
- Department
- Event Name
- Team Size
- Email
- Phone Number

### 📋 View Registrations
The administrator/user can view all registered students in a table.

### 🔍 Search Registration
Registrations can be searched using the event name.

### 🗄️ MySQL Database
All registration details are stored permanently in a MySQL database.

### 🔐 SQL Injection Protection
Prepared statements with `?` placeholders and parameter binding are used for SQL queries that accept user input.

### 🌐 Online Hosting
The application is hosted online using InfinityFree.

---

## 🛠️ Technologies Used

### Frontend
- HTML5
- CSS3

### Backend
- PHP

### Database
- MySQL

### Hosting
- InfinityFree

---

## 📂 Project Structure

```text
Campus-Event-Registration-System/
│
├── index.php
├── event.php
├── save_event.php
├── view.php
├── search.php
├── connect.php
├── style.css
│
├── database/
│   └── database.sql
│
├── screenshots/
│   ├── home.png
│   ├── registration.png
│   ├── success.png
│   ├── view.png
│   └── search.png
│
└── README.md
