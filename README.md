# Another Message on the Wall
![](docs/screenshots/amotw_login.jpg)   

A simple messaging system that allows users to... You guessed it, post messages to a wall.


### Required Functionality Overview:
* [x]	Display list of existing messages (message content and entered name and email)
* [x]	List of messages sorted most recent first
* [x]	Messages should be paginated, 10 per page
* [ ]	~~Form to post message has fields for name, email, and message~~
* [x]	Form validates name, email, and message as required fields, email is a valid email
* [x]	Messages are stored in a database
* [x]	No restrictions on use of back-end or front-end frameworks, as long as back-end is in PHP
* [x]	Code pushed to Github, bitbucket, or other online code repository

### Additional Functionality Overview:
* [x] User registration & authentication
* [x] Message delete (restricted to posts created by the currently logged in user)
* [x] User email verification on registration
* [x] Username & email unique validation on registration
* [ ] Integrate ReactJS
* [ ] User avatar support
* [ ] Fancy looking design & styles
* [ ] Nested post replies
* [ ] Favorited posts
* [ ] Better SCSS support
* [ ] REST API integration  

## Codebase Overview
- Laravel 5.7.x
- ReactJS
- Bootstrap 4


## Usage 
#### General Debugging
The application comes with [Laravel Telescope](https://github.com/laravel/telescope/) pre-installed in order to better view what's happening under the hood.  To access the telescope dashboard, just navigate to `http://localhost:8000/telescope` and that's it! 

#### Email verification
The application includes the default email verification using by the `MustVerifyEmail` trait in  Laravel 5.7.  Since there currently aren't any smtp drivers setup to handle email, email verifications can be viewed and tested via [Laravel Telescope](https://github.com/laravel/telescope/) by navigating to `http://localhost:8000/telescope/mail` during the registration process. 
![](docs/screenshots/verify_mail_telescope.jpg)
