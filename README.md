# Laravel_Crud

## Installation
- On the terminal or cmd, navigate to the location to where the project will reside in and type git clone https://github.com/efenollal/Laravel_Crud.git.
- The repository can also be downloaded as a zip file and unzip it to the project location by opening Clone or download dropdown button and select Download ZIP.
- Rename .env.example to .env and change dbengine to sqlite, dbname to database.sqlite and leave username and password blank.
- Create a new file and name it database.sqlite file in database folder.
- Run composer install on your terminal/cmd.
- Run run npm install on terminal/cmd after composer is done installing its packages.
- Run php artisan migrate so the required tables are generated.
- Finally run php artisan serve to start the server.
- Navigate to localhost:8000 to see the customers list.
