This is an Laravel application that is using 
- Pragmarx/Tracker-3.3.0 library 
- sb-admin-2 templates
- geoip-2.0 library

Setup and workflow:

1. Clone the github repository.
2. Run \
    `composer install`  
    and \
    `composer update`
3. Create database and add credentials to the .env file
4. Run \
    `php artisan migrate`
5. Run \
    `php artisan serve`
6. Visit URL given by the previous command
7. Register new user and refresh the page a couple of times
8. Logout
9. Run \
    `php artisan create:admin`
10. Login as admin with given credentials
11. Click on the "Check the website statistics" button 
