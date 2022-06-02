## Tour E Zone Management System for Mechanic Koi?

**This project "Tour E Zone Management System" has been developed on Laravel 8 and MySQL. The main purpose for developing this project can helps  clients to manage the booking request, package details, transports details, resort details, restaurant details based on destination, dashboard and daily log, get booking notification and etc. for customer view panding booking and checkout for booking. This application is very simple and easy to access.**, 

### Modules and Description of Tour E Zone Management System Project:
Functionality of the Tour E Zone Management System:
These are the functionality performed by the project:
- Sign up for new user
- Login For Admin
- Edit Profile For Admin/Clients
- Change Password For Admin/Clients
- Logout Functionality
- Dashboard for Admin/Clients
- checkout for Clients

### Package Details Module:
This module provides all the functionality related to Package. Here, the admin can add, update and delete Package details and category.
- Admin can add new package details and category
- Admin can view the list of package details and category
- Only admin can edit and update the package details and category
- Admin will be able to delete the package details and category

### Transport Module:
This module provides all the functionality related to vehicles. It tracks all the information and details of the transports. We have developed all type of CRUD (Create, Read, Update and Delete) operations of the transports.
- Admin can add new transports records
- Admin can see the list of transports details
- Only admin can edit and update the record of the transports
- Admin will be able to delete the records of the transports

### Resort Module:
This module provides all the functionality related to resorts. It tracks all the information and details of the resorts along with the room details. We have developed all type of CRUD (Create, Read, Update and Delete) operations of the resort. Features of resort Module:
- Admin can add new resort records.
- Admin can see the list of resort details with the room details
- Only admin can edit and update the record of the resort
- Admin will be able to delete the records of the resort
- Admin can modify room details for specific resort
- Admin can view all the log details of the drivers

### Booking Request Module:
In this module admin can tracks all the information and details of the booking request. We have developed CRUD (Read, Update and Delete) operations of the booking request. Admin can accept and reject a client booking from here. Features of booking request module:
- Admin can see the list of new booking details
- Only admin can accept and reject a client booking
- Admin will be able to delete client booking records
- Admin can view status of the payment and edit it

### Daily Log Module:
In daily log, admin can track all the details of all booking of a day.
- Admin can see micro details ex: Available package, transpoart, etc.
- Admin can view the daily booking details

### Panding booking and checkout:
Here Client can see their booking package and the payment getway.
- Can see all panding package booked by client/user
- Can cancel any package before admin confirmed it.
- Can pay via SSLCOMMERZ if admin confirmed it

### Technology used for this project:
- HTML: Page layout has been designed in HTML
- CSS: CSS has been used for all the designing part
- JavaScript: JavaScript has been used to add dynamic behavior to the webpage and special effects to the webpage. On websites, it is mainly used for validation purposes.
- Laravel 8: All the frontend logic has been implemented in Laravel 8 that makes dynamic and interactive webpage.
- MySQL : MySQL database has been used as database for the project

### Supported Operating Systems:
We can configure this project on following operating system.
- Linux: We can run this project also on all versions of Linux operating system. You will have to install WAMP or XAMP on your system.
- Windows: This project can easily be configured on windows operating system. For running this project on Windows system, you will have to install WAMPP or XAMPP on your system.

### Mac Os, Ubuntu and windows users continue here:
- Create a database locally on XAMPP or WAMP
- Download composer https://getcomposer.org/download/
- Pull Laravel/php project from git provider.
- Rename `.env.example` file to `.env`inside your project root and fill the database information.
  (windows wont let you do it, so you have to open your console cd your project root directory and run `mv .env.example .env` )
- Open the console and cd your project root directory
- Run ```composer install``` or ```php composer.phar install```
- Run ```php artisan key:generate```
- Run ```php artisan migrate```
- Run ```php artisan db:seed``` to run seeders, if any.
- Run ```php artisan serve```

##### You can now access your project at localhost:8000 :)

### If for some reason your project stop working do these:
- ```composer install```
- ```php artisan migrate```


### Developed By

**Md. Kamruzzaman**
Email: kzaman3055@gmail.com

on the behalf of **Mechanic Koi?**
