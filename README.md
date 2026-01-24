# 🏨 Hotel Reservation Website – DevOps Project

![CI](https://github.com/RashmiDulashani/Hotel-Reservation-Website-DevOps/actions/workflows/ci.yml/badge.svg)
![Deploy](https://github.com/RashmiDulashani/Hotel-Reservation-Website-DevOps/actions/workflows/deploy.yml/badge.svg)

## 📝 Project Description

This project is a Hotel Reservation Website developed using PHP and MySQL, following real-world DevOps practices.

The project emphasizes:

- Professional Git workflows 

- CI/CD automation using GitHub Actions

- Cloud deployment

- Team collaboration using feature branches and pull requests

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

![GitHub Actions](https://img.shields.io/badge/GitHub_Actions-2088FF?style=for-the-badge&logo=github-actions&logoColor=white)

![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)


## 👥 Group Information

| Name                  | ID              | Role               |
|:---------------------:|:---------------:|:------------------:|
| T.H. Imalsha Dilshani | ITBIN-2313-0027 | Frontend Developer |
| H.M. Imashi Dilshani  | ITBIN-2313-0025 | Backend Developer  |
| G. Rashmi Dulashani   | ITBIN-2313-0031 | DevOps Engineer    |

## 🛠 Technologies Used
- **Frontend:** HTML5, CSS3, JavaScript, Bootstrap
- **Backend:** PHP, MYSQL
- **Version Control & CI/CD:** Git, GitHub, GitHub Actions
- **Deployment:** XAMPP / Localhost

## ✨ Features
- **User Registration & Login:** Secure authentication with MySQL database.
- **View Rooms:** Users can view available rooms.
- **Responsive UI:** Optimized for all device screens.

## 🌲 Branch Strategy
We implemented the following branching strategy to manage our collaboration:
- **main:** Production-ready code only (Protected branch).
- **develop:** Integration branch.
- **feature/*:** Individual branches for specific feature development.

## 👨‍💻 Individual Contribution

| Name                  | Responsibilities | 
|:---------------------:|:---------------|
| G. Rashmi Dulashani | - Repository setup and management <br> - GitHub Actions CI/CD pipeline implementation <br> - Deployment configuration <br> - Branch protection and workflow management |
| T.H. Imalsha Dilshani | - Responsive UI development using HTML, CSS, JavaScript, Bootstrap <br> - Implemented dynamic forms and room display pages |
| H.M. Imashi Dilshani | - PHP backend development <br> - MySQL database design and integration |


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

## ⚙️ Deployment Process
Our automated pipeline ensures code quality and reliable delivery:
- **Continuous Integration:** On every push to feature/*, GitHub Actions runs the CI pipeline (Linting, Building, Testing).
- **Continuous Deployment:** When code is merged into main, it triggers the deployment workflow, pushing the latest version to production.

## 📝 Future Enhancements

- Admin dashboard for managing users and rooms
- Online payment integration
- Email notifications for booking confirmation
- Analytics dashboard for admin
- Multi-language support
