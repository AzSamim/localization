## Laravel Localization
<p>Sometime some junior developers, struggling with Larval localization. So I decided to prepare a starter localized project with a nice admin panel that anyone can clone the project and use for their personal projects. And also I will describe that how you can customize and add more language to the project. For using this project follow the following step by step guide.</p>

## Installtion Steps

1. Clone the project into your local computer
2. Open the terminal if your in MAC and Command prompt If you are using Windows computers and navigate to the project folder. 
Run the composer install command.
3. Copy the .env.example and paste to the same folder and change the file name to .env
4. Run php artisan key:generate command to generate a fresh application key.
5. Configure your database name and other credentials inside .env file.
6. Run php artisan migrate --seed command. This command will generate all the necessary tables and insert one record admin@admin.com to users table. The password is password by default. 
7. Run your project with php artisan serve command and open the project in your browser with localhost:8000 url, It will open login page.
Type admin@admin.com in the username field and password in the password field and login. You will be redirected to dashboard page.
For simplacity I added a crud functionality to project If you don't want just remove that and use from this project.



