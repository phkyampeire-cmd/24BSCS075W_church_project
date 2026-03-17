# 📖 CHURCH MANAGEMENT SYSTEM

 Student Information
Student Name: KYAMPEIRE PHIONAH
Registration Number: 24BSCS075W
Program:Bachelor of Science in Computer Science



Project Description

The Church Management System is a web-based application developed to help churches manage their daily operations efficiently. The system allows administrators, pastors, and members to interact with church data such as membership records, events, attendance, and financial contributions.

This system improves record keeping, reduces paperwork, and enhances communication within the church.


 Objectives of the System

To manage church members’ information
To track attendance records
To manage church events
To record tithes and offerings
To provide secure login for different users (Admin, Pastor, Members)



 Technologies Used

Frontend:
 HTML, CSS, Bootstrap
 Backend:
 PHP
 Database:
 MySQL
 Server: XAMPP
 Editor: Visual Studio Code



System Users

Admin: Full control of the system
Pastor: Manages members, attendance, and events
Member: Registers and views limited information

 Key Features

 User Registration and Login (Admin, Pastor, Member)
 Role-based Dashboard
 Member Management (Add, View, Delete)
 Event Management
 Attendance Tracking
 Tithes and Offerings Recording
 Secure Password Authentication


 Terminologies Used

Database: A structured collection of data stored electronically
MySQL: A relational database management system used to store data
PHP:A server-side scripting language used to build dynamic web pages
XAMPP:A local server environment for running PHP and MySQL
Bootstrap: A CSS framework used for designing responsive web pages
Authentication: The process of verifying user identity
Authorization: Granting access rights to users based on roles
Dashboard: A user interface that displays system summaries and controls
CRUD Operations: Create, Read, Update, Delete operations on data
Session: A way to store user data across pages during login


 Database Structure

Main tables used:

* `users` (id, username, password, role)
* `members` (id, fullname, gender, phone, address, join_date)
* `events` (id, title, event_date, description)
* `attendance` (id, member_name, status, date)
* `tithes` (id, member_name, amount, date)

---

## 🚀 Steps to Run the Project

### Step 1: Install XAMPP

Download and install **XAMPP**.

---

### Step 2: Start Server

* Open XAMPP Control Panel
* Start:

  * Apache
  * MySQL

---

### Step 3: Copy Project Files

* Copy your project folder:

```
church_management_system
```

* Paste into:

```
C:\xampp\htdocs\
```
### Step 4: Open in Browser

## 🗄️ Database Import Instructions

### Step 1: Open phpMyAdmin

```
http://localhost/phpmyadmin
```

---

### Step 2: Create Database

* Click **New**
* Enter name:

```
church_db
```

* Click **Create**

---

### Step 3: Import Database

* Click on `church_db`
* Click **Import**
* Choose your `.sql` file
* Click **Go**

---

### Step 4: (Alternative - Manual Setup)

Run the following SQL:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(255),
    role VARCHAR(20)
);

CREATE TABLE members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100),
    gender VARCHAR(10),
    phone VARCHAR(15),
    address VARCHAR(100),
    join_date DATE
);

CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    event_date DATE,
    description TEXT
);

CREATE TABLE attendance (
    id INT AUTO_INCREMENT PRIMARY KEY,
    member_name VARCHAR(100),
    status VARCHAR(10),
    date DATE
);

CREATE TABLE tithes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    member_name VARCHAR(100),
    amount DECIMAL(10,2),
    date DATE
);
```

---

## 🔐 Default Login Credentials

* **Admin**

  * Username: admin
  * Password: 12345

* **Pastor**

  * Username: pastor
  * Password: 12345

---

## ⚠️ Security Note

Passwords are stored using hashing for security. Always ensure proper validation and protection of user data.

---

## 📈 Future Improvements

* Email notifications
* SMS alerts
* Report generation (PDF)
* Data analytics and charts
* Mobile-friendly enhancements

---

## 📌 Conclusion

The Church Management System provides a reliable and efficient way to manage church operations digitally. It enhances organization, improves data accessibility, and supports better decision-making.

---

## 🙏 Acknowledgement

This project was developed as part of academic requirements for the Bachelor of Science in Computer Science program.

---
# 24BSCS075W_church_project
