# Hospital Management System
Hospital Management System using MySQL, PHP and Bootstrap

## Need to work on:

1. Ability to accept the appointment by the doctor to acknowledge the patient that their appointment has been approved.
2. User should not be allowed to register if he/she tries to provide the already registered email ID.
3. The password should be encrypted and the password field shouldn't be displayed in the admin panel.
4. Implementation of pagination for all the list view across the application.
5. Bug fix - Bill payment receipt contains multiple record if the patient has associated with the same doctor multiple times.
6. Addition of more fields in the prescription statement to make it more specific one.
7. Addition of more details on payment - such as date of the payment made, amount paid, etc.
8. Implementation of export button in admin module to export all details to an excel sheet.

## Prerequisites
1. Install XAMPP web server
2. Any Editor (Preferably VS Code or Sublime Text)
3. Any web browser with latest version

## Languages and Technologies used
1. HTML5/CSS3
2. JavaScript (to create dynamically updating content)
3. Bootstrap (An HTML, CSS, and JS library)
4. XAMPP (A web server by Apache Friends)
5. PHP
6. MySQL (An RDBMS that uses SQL)
7. TCPDF (to generate PDFs)

## Steps to run the project in your machine
1. Download and install XAMPP in your machine
2. Clone or download the repository
3. Extract all the files and move it to the 'htdocs' folder of your XAMPP directory.
4. Start the Apache and MySQL in your XAMPP control panel.
5. Open your web browser and type 'localhost/phpmyadmin'
6. In phpmyadmin page, create a new database from the left panel and name it as 'myhmsdb'
7. Import the file 'myhmsdb.sql' inside your newly created database and click ok.
8. Open a new tab and type 'localhost/Hospital-Management-System' in the url of your browser
9. That's it!

### SOFTWARES USED
  - XAMPP with Apache and MySQL
  - VS Code as text editor
  - Google Chrome (latest version)

### Starting Apache And MySQL in XAMPP:
  The XAMPP Control Panel allows you to manually start and stop Apache and MySQL. To start Apache or MySQL manually, click the 'Start' button under 'Actions'.

## GETTING INTO THE PROJECT:
Hospital Management System in PHP and MySQL. This system has a 'Home' page from where the patient, doctor & administrator can login into their accounts by toggling the tabs accordingly.

'About Us' page allows users to get some more information about the quality and the services of the hospital.

'Contact' page allows users to provide feedback or queries about the services of the hospital.

The 'Home' page consists of 3 modules:
1. Patient Module
2. Doctor Module
3. Admin Module

### Patient Module:

This module allows patients to create their account, book an appointment to see a doctor and see their appointment history. The registration page asks patients to enter their First Name, Last Name, Email ID, Contact Number, Password and radio buttons to select their gender.

Once the patient has created his/her own account after clicking the 'Register' button, they will be redirected to their Dashboard.

The Dashboard page allows patients to perform two operations:

**1. Book his/her appointment:**

Here, the patients can book their appointments to see a doctor. The appointment form requires patients to select the doctor they want to see, and the Date and Time. The consultancy fee will be shown accordingly.

**2. View patients' Appointment History:**

Here, the patient can see their appointment history which contains Doctor Name, Consultancy Fee, Appointment Date and Time.

### Doctor Module:

The doctors can login into their account which can be done by toggling the tab from 'Patient' to 'Doctor'. Registration of a doctor account can be done only by admin.

In the doctor dashboard, doctors can view their appointments booked by patients. The doctor can also search for a patient by their contact number.

### Admin Module:

This module is the heart of the project where an admin can see the list of all patients, doctors, appointments and the feedback/queries received from the 'Contact' page. Admin can also add doctors.

Login credentials for admin: `username`: admin, `password`: admin123

This module allows admin to perform five major operations:

**1. View the list of all patients registered**

**2. View the list of all doctors registered**

**3. View the Appointment lists**

**4. Add Doctor**

**5. View User's feedback/Queries**

## Updates

### 1. Cancel Appointments

Patients and doctors can delete their appointments. If a patient deletes an appointment, a label "deleted by you" will be displayed in the 'Current Status' column on the patient side, and the doctor's view will reflect the cancellation accordingly.

### 2. Remove Doctors by Admin

Admin can also delete the doctors from the system, giving the admin more control over the system.
