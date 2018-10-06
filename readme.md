This is an Laravel application that is using 
- Pragmarx/Tracker-3.3.0 library 
- sb-admin-2 templates
- geoip-2.0 library

Setup:

1. Clone the github repository.
2. Run: \
    `composer install`  
    and \
    `composer update`
3. Run: \
    `git clone https://github.com/BlackrockDigital/startbootstrap-sb-admin-2.git public/templates/sb-admin-2` \
    `cd public/templates/sb-admin-2` \
    `git checkout tags/v3.3.7+1` \
    `git checkout -b v3.3.7+1`    
4. Create database and add credentials to the .env file
5. Run: \
    `php artisan migrate`
6. If you don't have app key already, run: \
    `php artisan key:generate`
6. Run: \
    `php artisan serve`

Workflow:

1. Visit URL given by the previous command
2. Register new user and refresh the page a couple of times
3. Logout
4. Run: \
    `php artisan create:admin`
5. Login as admin with given credentials
6. Click on the "Check the website statistics" button 

**Note** \
Visit is basically a session, and session can remember only latest user.\
I.E. first you login as a user, logout, and then login as admin. Visit will present admin as a user. 

To test the app functionality visit the page with multiple browsers.
