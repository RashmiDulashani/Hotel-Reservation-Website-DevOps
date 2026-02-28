# 🏨 Hotel Reservation Website

![CI](https://github.com/RashmiDulashani/Hotel-Reservation-Website-DevOps/actions/workflows/ci.yml/badge.svg)
![CD](https://github.com/RashmiDulashani/Hotel-Reservation-Website-DevOps/actions/workflows/deploy.yml/badge.svg)

## 📝 Project Description

A full-stack Hotel Reservation Web Application built using PHP, MySQL, and modern DevOps practices, including Git workflow management, CI automation, Containerisation with Docker, and Cloud Deployment.

<div align="center">
  <img src="src/Images/Readme.png" height="50%" width="50%">
</div>

## 📌 Project Overview

This project was developed as part of an academic and practical DevOps implementation to demonstrate:

- Real-world Git branching strategies
- Continuous Integration using GitHub Actions
- Containerisation with Docker
- Cloud deployment on Render
- Full-stack PHP + MySQL architecture
- Team collaboration using professional workflows

## 🛠 Technologies Used
- **Frontend:** HTML5, CSS3, JavaScript, Bootstrap
- **Backend:** PHP, MYSQL
- **Version Control & CI/CD:** Git, GitHub, GitHub Actions
- **Deployment:** Render

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![GitHub Actions](https://img.shields.io/badge/GitHub_Actions-2088FF?style=for-the-badge&logo=github-actions&logoColor=white)
![Docker](https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white)
![Docker Compose](https://img.shields.io/badge/Docker_Compose-2496ED?style=for-the-badge&logo=docker&logoColor=white)
![Render](https://img.shields.io/badge/Render-46E3B7?style=for-the-badge&logo=render&logoColor=white)

## 🌐 Live Deployment
**🔗 URL:** https://zenvia-czqm.onrender.com

The application is successfully deployed on Render cloud platform, enabling real-world hosting and accessibility.

## 👥 Group Information

| Name                  | ID              | Role               |
|:---------------------:|:---------------:|:------------------:|
| T.H. Imalsha Dilshani | ITBIN-2313-0027 | Frontend Developer |
| H.M. Imashi Dilshani  | ITBIN-2313-0025 | Backend Developer  |
| G. Rashmi Dulashani   | ITBIN-2313-0031 | DevOps Engineer    |

## 👨‍💻 Individual Contribution

| Name                  | Responsibilities | 
|:---------------------:|:---------------|
| G. Rashmi Dulashani | - Repository setup and management <br> - GitHub Actions CI pipeline implementation <br> - Branch protection and workflow management <br> - Dockerfile Implementation & Optimisation <br> - Docker Compose Orchestration <br> - Cloud Deployment on Render |
| T.H. Imalsha Dilshani | - Responsive UI development using HTML, CSS, JavaScript, Bootstrap <br> - Implemented dynamic forms and room display pages |
| H.M. Imashi Dilshani | - PHP backend development <br> - MySQL database design and integration |

## ✨ Key Features
- **User Registration & Login:** Secure authentication with MySQL database.
- **View Rooms:** Users can view available rooms.
- **Responsive UI:** Optimized for all device screens.

## 🌲 Branch Strategy
We implemented the following branching strategy to manage our collaboration:
- **main:** Production-ready code only (Protected branch).
- **develop:** Integration branch.
- **feature/*:** Individual branches for specific feature development.

## ⚡ Getting Started

### Prerequisites
- XAMPP or any PHP/MySQL server
- Git
- Web Browser

### Setup Instructions

#### 1. Clone the Repositary:
```bash
git clone https://github.com/RashmiDulashani/Hotel-Reservation-Website-DevOps
```
#### 2. Import Database
- Open phpMyAdmin
- Import database.sql

#### 3. Configure Database Connection:
- Update src/admin/inc/db_config.php with your MySQL credentials

#### Start Server
- Open XAMPP → Start Apache & MySQL
- Navigate to 
```bash
http://localhost/Hotel-Reservation-Website-DevOps/src
```

## 🐳 Containerisation Overview

This project includes:
- ✅ Dockerfile – Defines how the PHP application image is built
- ✅ docker-compose.yml – Orchestrates application services
- ✅ .dockerignore – Optimises build context and improves security

## ⚡ Running the Project Locally with Docker

### Prerequisites
- Docker
- Docker Compose

#### Verify Installation:
```bash
docker --version
docker compose version
```

### Setup Instructions

#### 1. Clone the Repositary:
```bash
git clone https://github.com/RashmiDulashani/Hotel-Reservation-Website-DevOps
```
#### 2. Build the Docker Images & Start the Containers
```bash
docker compose up --build
```
#### 3. Access the Application
Open your browser and navigate to:
```bash
http://localhost:8080
```

#### Stop Containers
```bash
docker compose stop
```

#### Stop & Remove Containers
```bash
docker compose down
```

## Environment Configuration
Database configuration is externalised using environment variables in docker-compose.yml:
```bash
environment:
  DB_HOST: db
  DB_USER: devops_user
  DB_PASSWORD: devops_pass
  DB_NAME: devops
```

## ⚠️ Deployment & CI/CD Challenges

- Due to PHP and MySQL backend, deploying on static hosts like Vercel/Netlify is not supported.
- MySQL container networking required careful configuration.
- Environment variables required proper mapping during Cloud Deployment.
- Image optimisation required layer structuring for efficient rebuilds.

## 📝 Future Enhancements

- Admin dashboard for managing users and rooms
- Online payment integration
- Email notifications for booking confirmation
- Analytics dashboard for admin
- Multi-language support



