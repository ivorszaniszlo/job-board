# Laravel Job Board App

## Table of contents
* [General info](#general-info)
* [Description](#description)
* [Screenshot](#screenshot)
* [Technologies](#technologies)
* [Setup](#setup)
* [Docker Setup](#docker-setup)
* [Running](#running)
* [Status](#status)
* [Created](#created)

## General info

This Laravel Job Board application, built with Laravel 10, provides a platform for employers to post job listings and for job seekers to find and apply for jobs.

## Description

The Laravel Job Board application is designed to facilitate the job search process. Employers can create and manage job listings, while job seekers can search for jobs, apply online, and upload their resumes. The application features user authentication, job search filters, and an intuitive user interface.

## Screenshot

![Task List screenshot](./public/img/job-board-screenshot.jpg)

## Technologies

+ Laravel 10
+ PHP 8
+ Alpine.js
+ MySQL
+ Tailwind 3 (with Node.js and Vite)
+ Docker
+ Blade Templates
+ Adminer DB management
+ PHP Debug Bar

## Setup

Clone the repository:

```bash
git clone git@github.com:ivorszaniszlo/job-board
```

Navigate to the project directory:

```bash
cd job-board
```

Install dependencies:

```bash
composer install
npm install
```

Set up environment variables:

```bash
cp .env.example .env
php artisan key:generate
```

Set up the database and run migrations:

```bash
php artisan migrate
```

### Docker Setup

Build and run the Docker containers:

```bash
docker-compose up --build
```

## Running

Serve the application:

```bash
php artisan serve
```

For frontend development, run the following command to start Vite or other frontend bundlers in development mode:

```bash
npm run dev
```

Access the application at `http://localhost:8000`.

## Status

Active

## Created

2024
