<!-- <p align="center"><img src="" width="400" alt="Laravel Logo"></a></p> -->

## About TeleMed

TeleMed is a web-based healthcare platform designed to streamline virtual consultations and medical record management for healthcare providers and patients.
It enables secure communication, efficient appointment handling, and centralized patient history storage in a role-based access environment.

## Overview

The system provides a digital medical record solution with real-time communication tools for doctors and patients.
It ensures data security, compliance, and accessibility from anywhere while reducing paperwork and administrative overhead in medical facilities.

## Features

Role-Based Access Control (RBAC) using Laravel Spatie Permissions<br>
CRUD operations on medical records (diagnosis, medicines, allergies, tests, etc.)<br>
User Management (Admins can create/edit doctors)<br>
Authentication and Authorization with Laravel UI<br>
Audit trail through timestamps<br>
Validation and error handling on forms<br>

### Roles and Permissions

Super Admin	has full system access, including user and role management <br>
Admin can manage doctors and view all records<br>
Doctor	can create, update, and view their own patients' records<br>

## Medical record structure

Each record includes: <br>
Each record includes:
Diagnosis<br>
Medicines<br>
Tests<br>
Allergies<br>
Immunizations<br>
Treatment Plan<br>

## Tech Stack

Backend: Laravel 10 <br>
Frontend: Blade (with Bootstrap)<br>
Authentication: Laravel Auth<br>
Authorization: Spatie Laravel-Permission<br>
Database: MySQL<br>
Migrations: Laravel Schema Builder<br>
