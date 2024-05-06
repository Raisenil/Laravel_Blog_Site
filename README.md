# Blog Site Technical Documentation

## Table of Contents

- [Blog Site Technical Documentation](#blog-site-technical-documentation)
  - [Table of Contents](#table-of-contents)
  - [1. Introduction](#1-introduction)
  - [2. System Overview](#2-system-overview)
  - [3. System Features](#3-system-features)
  - [4. Technology Stack](#4-technology-stack)
  - [5. Getting Started](#5-getting-started)
  - [6. User Roles and Authentication](#6-user-roles-and-authentication)
  - [7. Blog Management](#7-blog-management)
    - [7.1. Post Creation](#71-post-creation)
    - [7.2. Post Editing](#72-post-editing)
    - [7.3. Post Deletion](#73-post-deletion)
  - [8. Custom Pagination](#8-custom-pagination)
  - [9. Installation and Setup](#9-installation-and-setup)

## 1. Introduction

Welcome to the Blog Site Technical Documentation. This document offers a comprehensive guide to the features and functionalities of the Blog Site developed using Laravel 10.

## 2. System Overview

The Blog Site is a platform designed for users to create, publish, and manage blog posts. It facilitates user engagement through features such as post creation, editing, deletion, and custom pagination.

## 3. System Features

The Blog Site offers the following features:

- **Post Creation:** Users can create new blog posts with titles and content.
- **Post Editing:** Users can edit existing blog posts, updating both title and content.
- **Post Deletion:** Users can delete their own blog posts, removing them from the site.
- **Custom Pagination:** Enhances user experience by dividing posts into pages for easier navigation.

## 4. Technology Stack

The Blog Site is built using the following technologies:

- Laravel 10: A PHP web application framework.
- Database: MySQL or any compatible database system.
- Frontend: HTML, CSS, JavaScript.

## 5. Getting Started

To run the Blog Site locally, ensure Laravel 10 is installed and have a basic understanding of PHP, MySQL, HTML, CSS, and JavaScript. Clone the project repository and follow the setup instructions provided.

## 6. User Roles and Authentication

The system includes user authentication features, allowing users to register, log in, and manage their accounts securely.

## 7. Blog Management

### 7.1. Post Creation

Users can create new blog posts by providing titles and content.

### 7.2. Post Editing

Users can edit existing blog posts, updating both title and content.

### 7.3. Post Deletion

Users can delete their own blog posts, removing them from the site.

## 8. Custom Pagination

The Blog Site implements custom pagination to enhance user experience by dividing posts into pages for easier navigation.

## 9. Installation and Setup

To set up the Blog. on your local machine, follow these steps:

1\. Clone the repository from GitHub: `git clone https://github.com/Raisenil/Laravel_Blog_Site.git`

2\. Download and install XAMPP from the official website `(https://www.apachefriends.org/index.html)`. Follow the installation instructions for your operating system.

3\. Make sure XAMPP is up and running. Start the Apache and MySQL modules from the XAMPP control panel.

4\. Create a New Database by going On the `phpMyAdmin` interface, click on "New" in the left sidebar to create a new database.
Enter name as `invento` and choose the appropriate collation (usually utf8_general_ci).

5\. Import the Backup by selecting it from the left sidebar. Click on the "Import" tab in the top menu. Click the "Choose File" button to select the .sql backup file from `Database Backup\invento.sql`.Choose the default settings or adjust them based on your needs.Click the "Go" button to start the import process.

6\. Update Configuration from `Blog_Site\.env`

7\. Run the Development Server:
Use Laravel's built-in development server to run your project locally. Start the server with the following command in terminal:

    cd Invento
    php artisan serve

By default, it will run on `http://localhost:8000`.

8\. Access Your Laravel Project:
Open a web browser and navigate to `http://localhost:8000` (or the URL provided when starting the server).

Access the website in your browser at the provided URL, typically http://localhost:8000.
