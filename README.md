# task-3 Quizfall
Quiz Hive
A website for sharing and answering questions

Overview
This is a project that allows users to submit and answer questions. Each user has his/her own login username(unique) and password. Through thus they will be able to access the quesitons submitted by various users. Also the user can view his/her score at an time. The site also contains a leaderboad which is private and can be accessed by the logged in user.

Server Routes
Homepage.php - the basic login page
Registration.php - Allows new user to register him/herself to quiz Hive.
loginphp - This page is displayed if the user has successfully logged in.
question.php - this allows usre to submit custom questions to the quiz hive qeustions database.
answer.php - This is apge that displays the unanswered questions to the user.
logout.php- it logs u out)
screenshots
![homepage.png](https://raw.githubusercontent.com/sriranganathan/counter_app/master/app/screenshots/Screenshot%20(5).png)
![register.png](https://github.com/sriranganathan/counter_app/blob/master/app/screenshots/Screenshot%20(6).png)
![login.png](https://github.com/sriranganathan/counter_app/blob/master/app/screenshots/Screenshot%20(7).png)
![question.png](https://github.com/sriranganathan/counter_app/blob/master/app/screenshots/Screenshot%20(8).png)
![answer.png](https://github.com/sriranganathan/counter_app/blob/master/app/screenshots/Screenshot%20(9).png)
![db.png](https://github.com/sriranganathan/counter_app/blob/master/app/screenshots/Screenshot%20(10).png)
Build instructions
create a homepage.php file which contains the layout for login - the input field for username and password.
on clicking submit, the username is checked against the variuos usernames in the users database and verified for the password.
if not the page displays an error message.
php is used to validae and not javascript.
if the user wishes to register him/herself as new user - there must be a link provided that links to 'registration.php'.
in the registration page, the user must provide an unique username and this is done by using php to check whether if already exists or not.
The data provided must be written into the database table 'users'.
For succesfull registration, the user must be provided with a link to the homepage to login.
In the logged in state(route - 'login.php), the users is given various options - submit , take quiz, score.
The layout is done by using bootstrap,html and jquery.
The submit option allows the user to submit a question which is MCQ type.
The Quiz option allows users to answer the unanswered questions and gain points.
