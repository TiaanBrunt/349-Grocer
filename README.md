# COSC349-Assignment-1

Tiaan Stevenson-Brunt (6603268)

Basic e-commerce application for a business named 349 Grocer. Application uses 3 VM's, 2 webservers and 1 database.

How to run
1. This application uses both Vagrant and VirtualBox so before we can run the application itself users need to make sure they have Vagrant and VirtualBox installed on their computer. The latest versions of both software can be found at
Vagrant
https://www.vagrantup.com/downloads.html
Virtual Box
https://www.virtualbox.org/wiki/Downloads
2. Next clone the repository or download the project files from github Clone:
Use the command git clone ​https://github.com/TiaanBrunt/COSC349-Assignment-1.git
Or Download:
Download from the address https://github.com/TiaanBrunt/COSC349-Assignment-1/archive/master.zip
3. In the command line get into the directory where you saved the project from step 2.
4. Now it's time to build the application. Simply use the command ‘vargrant up’ and all three virtual machines will be built. Please note that the build time is roughly 4-5minutes depending on your computer so don’t fret if the build is taking a while.
5. Now the virtual machines will all be up and running and you can begin to use the application.
    
To view the Admin website:
In a browser visit the address - localhost:8080
remeber the password is admin for both username and password
To view the Customer website: In a browser visit the address - Localhost:8081
6. Once your finished with the program use the command ‘vagrant destroy’ to destroy the running VM’s

------------------------------------------------------------------------------------------------------------------------------------------------
Old App:
World Timezone Converter

Goal ->
Create an application where user can choose a timezone from a drop down menu
and the clock will display the time.
Will need 3 virtual machines:
1. Webserver
   This is where the actual application will be
   Create the clock using a combination of javascript, html, css
   Get the timezone and store the data using php.

2. Database
   Will have the timezone's and users settings stored here.

3. Querry
   Will fetch the relevant info from the database. 




