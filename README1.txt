
Go to the project directory

cd ALMAZakariaSchoolManagementPFM

Step 3 : Install the dependencies:

	*composer install
	*npm install
Step 4 : Copy the .env from .env.example(You can create a new data base or change the database name on .env.example and .env)

	cp .env.example .env
 
Step 5 : Generate the application key

	*php artisan key:generate

Step 6 : Run the database migrations

	*php artisan migrate

Step 7 : Run the database seeders

	*php artisan db:seed AdminSeeder

Step 8 : Link the storage directory

	php artisan storage:link

Step 9 : Run the application
	*php artisan migrate
	*php artisan make:migration create_flights_table


Step 10 :


	*npm run start
	*npm run start
