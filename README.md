

WEBSITE FOR BUY AND RENT HOUSE

this was made by laravel.

INSTRUCTION:

1-download project from GIT

2- after extract the file, you need to open project on vscode and write this on terminal: composer update

3-if github did not upload .env file.  you need to add this file. you can change the name of .env.example to .env . i change it's DB_DATABASE=new_mvc2 before. i also generate key (you can do this again by : php artisan key:generate).

4-this project need some tables in database. so first make a new table on your local database callled: new_mvc2 then on your vscode terminal write this : php artisan migrate . now you have all tables in database.

5- next you need 1 user to login with it. to make a new user, just write on terminal vscode : php artisan db:seed --class=StartTableSeeder . now you have a user and you can login with it to see http://localhost:8000/admin . email is : alfred@gmail.com and password is : 123

6- if you don't want to add new data to project, don't worry . i made a file for it before. just find : new_mvc2.sql in project and import it into your database table.

7- and finally just write down on vscode terminal : php artisan serve 

8- if you want to use email for vertification, first goto App/Models/User.php and active : implements MustVerifyEmail
then goto : routes/web.php and change this : Auth::routes();  to :  Auth::routes(['verify' => true]);
and finally goto : App/Controllers/HomeController and active:  $this->middleware(['auth','verified']);
now just add your email properties on .env and work with it.

ATTENTION: this project is submitted for a sample. so some options like authentification, notification ,.. did not consider on this project. to use email, you need to add your email in .env.
