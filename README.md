ABOUT PEDICARE

Pedicare is a web based platform that is used by parents to seek medication for their babies by contacting pediatrician.

FEATURES
Searching for a doctor 
Searching for drugs
buying drugs online
contacting doctors
consulting doctors
prescribing 
chatting doctors


INSTALLATION/RUNNING THE APP

Note: Make sure you have git installed locally on your computer first. cd into the directory where you want to clone the project

    Clone GitHub repo for this project locally git clone https://github.com/KirinyetBrian/Pedicare.git

    cd into your project

    Install Composer Dependencies composer install

    Create a copy of your .env file cp .env.example .env

    Generate an app encryption key php artisan key:generate

    Create an empty database for our application

    In the .env file, add database information to allow Laravel to connect to the database

    Migrate the database php artisan migrate

php artisan serve 9. Seed the database php artisan db:seed

    Run the server php artisan serve
