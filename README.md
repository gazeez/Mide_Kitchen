# Mide_Kitchen
# Capstone Final Project with TechCareers (ManPower)
# Contributor - Gafar Azeez

# Problem Statement:
Mide is a chef - she receives orders and prices are negotiated. She is tired of negotiating, just wants to cook
She would love to create a template menu where customers can go to, view menu and order! Less interaction, zero negotiations 

# Solution: 
I will create a website template with menu, order, review and contact us sections. 
Customers will be able to sign up,  order and leave a review

******Note: Customers will have to sign up to make a order.********

**Work Breakdown Structure: 

 can be seen on Trello - https://trello.com/b/BFWKYTnc/capstone-mide-cooks

# To Run the Website:

1. Download xampp app on your computer
2. Run the program
3. Click Start for MySQL and Apache
4. Click Admin for MySQL **a browser should pop up** if not - Open a browser and type http://localhost/phpmyadmin
5. Create new Database - Name it
6. Clone the git repository
7. Open xampp folder - navigate to 'htdocs' - Create a folder and name it
8. Copy and paste the git files into the folder in step 7
9. From the created database in step 5 - import gafar.sql from the git files
10. Open a tab in a browser and type http://localhost/named_folder_from_step 7
      - This should bring you to the website.

# Testing Instructions and Test Cases
# Test Register
  - Check if missing a form will let you register
  - Check if email is not in its proper form will let you register
  - check if the password does not contain letters and a number combination will let you register
  - check if the confirm password is not the same as password will let you register

# Log In
  - Check invalid username with correct password lets you log in
  - Check correct username with invalid password lets you log in
  - Check if you are logged out properly

# Update User Profile
  - Test if edited profile changed after saved
  - Test if deleted profile can still log in
  
# Citation:
- Tech C - SQL and PHP videos

- U of A library Resources - O Reilly
- lynda.com
- getbootstrap.com
- Stackoverflow - 
- How to confirm password in php
https://stackoverflow.com/questions/27216595/how-to-validate-email-id-and-password-confirm-password-in-php

- Embedded Map - "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2370.601329911524!2d-113.52156568460641!3d53.5470322673619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a02232c66be621%3A0x79a6a410622b976e!2sOliver%20Square%20East%20and%20West!5e0!3m2!1sen!2sca!4v1590915297471!5m2!1sen!2sca"
