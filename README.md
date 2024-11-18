# Travel Form

A simple travel form that allows users to submit their details, such as name, age, gender, email, phone number, and additional information for a trip. The form data is saved in a MySQL database.

## Features

- Basic form to collect user details.
- Data is inserted into the MySQL database.
- Simple PHP backend to handle form submission.

## Technologies Used

- **Frontend**: HTML, CSS
- **Backend**: PHP
- **Database**: MySQL

## Setup Instructions

1. Clone or download this repository to your local machine.
2. Create a MySQL database named `trip`.
3. Create a table `tripi` with the following structure:

   ```sql
   CREATE TABLE tripi (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100),
       age INT,
       gender VARCHAR(10),
       mail VARCHAR(100),
       phone VARCHAR(15),
       other TEXT,
       dt DATETIME
   );
