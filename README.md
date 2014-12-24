EventViter
==========

an app for future ;)

About EventViter
================

EventViter is an application idea which combines the work and life of everyone inside a single application. The original idea of the application is to be a platform for people so that they can invite others (safely,securely and personalized messages) to their important functions and meetings. This application brings together the work part of a person together with the personal aspects necessary for the life. 

This application is in its initial phase and following functions are present

1. user login
2. displaying the events 
	dashboard -- all events
	celebrations -- personal events
	meetings -- professional events
	others -- other events
3. Logout

The contents are dynamically fetched from the DB using PHP, JSON and jQuery. 

Future plans for the application
=================================

following features are planned to be released 
1. notifications to the users	
2. Email and sms notification
3. group planning (all a group of users to discuss about an event and plan it)
4. Group invite (But still, messages are personalized for each user)
5. More cleaner UI (material design for android application)
6. Block certain contacts from sending invite to the user
7. Make the app more responsive to user gestures
8. Material design card swipe-away gesture
9. Ability for the user to make changes to their settings preferences
10. Support for lower resolution devices (menu button not visible)
11. Post new events and invite through the Application
12. Ability for users to register on the application directly

How to work with the source code
================================

You have to make two changes for it to work properly in your environment

1. Change the value for variable "domain" in EventViter/script/script.js
		Used to specify where the EventViterServer folder is located. Read comments for more info
2. Create a file named constant.php in the folder EventViterServer and add the following code
	<?php
    	$host = "YOUR_HOSTNAME";
    	$uname = "YOUR_USERNAME";
    	$pass = "YOUR_PASSWORD";
    	$db = "YOUR_DB_NAME";
	?>
	

Note from the developer
========================
This is the web folder for the EventViter App. Suitable mechanism like PhoneGap should be used to port to mobile applications. This is not created with Desktop computers in mind. So if you want to take a preview resize the browser ;)

Any changes to the code to improve the efficiency or adding new features to the application are welcome. If anyone is interested in developing a native android application, contact me :)