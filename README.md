# COSC349-Assignment-2

Tiaan Stevenson-Brunt (6603268)

An e-commerce application for a business named 349 Grocer. Application is made up of 2 VM webservers and 1 database. Using vagrant the VM's are reployed as EC2 instances and the database is an RDS MYSQL database.

How to run
1. This application uses both Vagrant and VirtualBox so before we can run the application itself users need to make sure they have Vagrant and VirtualBox installed on their computer. The latest versions of both software can be found at
Vagrant
https://www.vagrantup.com/downloads.html
Virtual Box
https://www.virtualbox.org/wiki/Downloads
2. Next clone the repository

3. In the command line get into the directory where you saved the project from step 2.
4. Now it's time to build the application. Simply use the command ‘vargrant up’ and the program will be built. Please note that the build time is roughly 4-5minutes depending on your computer so don’t fret if the build is taking a while.
5. Now the virtual machines will all be up and running and you can begin to use the application.
    
To view the Admin website:
In a browser visit the address - ec2-3-81-161-136.compute-1.amazonaws.com
remeber the password is admin for both username and password
To view the Customer website: In a browser visit the address - ec2-54-224-68-152.compute-1.amazonaws.com
6. Once your finished with the program use the command ‘vagrant destroy’ to destroy the running VM’s
