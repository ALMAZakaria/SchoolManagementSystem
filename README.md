# SchoolManagementSystem
In this project. I used Laravel for backend, Bootstrap for frontend, and CSS for styling in the School Management System project. PHPMyAdmin eased MySQL database management. The result is a user-friendly, visually appealing system with efficient functionality. Feel free to reuse my Crude School Management System. A mention, would be appreciated.

<br>
<br>
<br>
My #School_Management_System project is a comprehensive web application that showcases the power of Laravel, a web application framework known for its elegant syntax and versatility. By integrating Laravel into the project, I leveraged its capabilities to create a robust and efficient system. The use of Bootstrap further streamlined my front-end development process, allowing me to manage the user interface effectively and save time. My proficiency in CSS added a layer of sophistication to the project, ensuring responsiveness, color scheme coherence, and a seamless user experience.

To handle the backend database administration with ease, I implemented PHPMyAdmin, providing a user-friendly interface for managing MySQL over the web. My choice of tools and my skills in development and design have culminated in a School Management System that is not only functional but also user-centric and visually appealing.


<br>
<br>
<br>

 ![image](https://github.com/ALMAZakaria/SchoolManagementSystem/assets/76885545/b7a65e34-ea54-4a9e-9335-35a19a1c61a5)



-Install:
1-Vs.code
 
2-xammp

3-Php 

https://getcomposer.org/download/

Install it in C:/xammp/php 
			
    https://www.youtube.com/watch?v=2qgS_MCvDfk

4-Laravel
After Install Php:
	*go to xammp/php/php.init
	* Click Controle+f --> search for : extension=zip --> Change it to extension=zip ";" Deleted
	* Go to vs code and click on terminal--> new Terminal past the following commande:
		
  	composer global require laravel/installer

Go to the project directory

cd ALMAZakariaSchoolManagementPFM

Step 3 : Install the dependencies:

	 composer install
  
	 npm install
Step 4 : Copy the .env from .env.example(You can create a new data base or change the database name on .env.example and .env)

	cp .env.example .env
 
Step 5 : Generate the application key

	 php artisan key:generate

Step 6 : Run the database migrations

	 php artisan migrate

Step 7 : Run the database seeders

	 php artisan db:seed AdminSeeder

Step 8 : Link the storage directory

	 php artisan storage:link

Step 9 : Run the application

	 php artisan make:migration create_flights_table


Step 10 :

	 npm run start
Step 11 :	

	npm run build
 
 Step 12 :
 
 	php artisan serve
 
About Laravel
Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

Simple, fast routing engine.
Powerful dependency injection container.
Multiple back-ends for session and cache storage.
Expressive, intuitive database ORM.
Database agnostic schema migrations.
Robust background job processing.
Real-time event broadcasting.
Laravel is accessible, powerful, and provides tools required for large, robust applications.


-the Create a new project with the following commande (open vscode go to terminale->new terminale):
 
		  composer global require laravel/installer
		  laravel new example-app
		  cd example-app
    
Learning Laravel
Laravel has the most extensive and thorough documentation and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the Laravel Bootcamp, where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, Laracasts can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.


Code of Conduct
In order to ensure that the Laravel community is welcoming to all, please review and abide by the Code of Conduct.

Security Vulnerabilities
If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via taylor@laravel.com. All security vulnerabilities will be promptly addressed.

License
The Laravel framework is open-sourced software licensed under the MIT license.
