# Basic MySQL Table Front-End App
This project showcases how the components of a full-stack application interact with each other using HTML, PHP and MySQL.

## App Features
  - Connect to a MySQL database: Establish a connection to an MySQL database using PHP
  - Insert data: Add new records to the table via the HTML form 
  - Update rows: Modify the existing rows in the table
  - Delete rows: Remove specific rows from the table
  - Retrieve information: Search for records in the table based on specific field values
 
 ## Prerequisites
 - XAMPP: Install and configure XAMPP, a cross-platform web server solution that includes and handles the integration of Apache, MySQL, PHP.

## Getting Started
1. Clone the repository or download the source code files
2. Move the project folder to the `htdocs` directory of your XAMPP installation
3. Launch XAMPP and start the Apache and MySQL services
4. Open a web browser and navigate to `http://127.0.0.1` or your `localhost` address

## App Usage
- Create the MySQL database by clicking the button at the top of the page. 
- Connect to the MySQL database by clicking the "connect" button. This will establish a connection to the MySQL server using the provided credentials
- Use the HTML form on the app's interface to insert data into the MySQL table. Fill in the required fields and click the "insert" button
- To update a row, enter the primary key values of the record you want to modify and update the desired fields.
- To delete a row, enter the primary key values of the record you want to remove and click the "delete" button.
- Use the search form to specify certain field values and retrieve matching records. Click the "search" button and the app will display the retrieved data.

## Additional Notes
- Make sure your XAMPP environment is properly set up, and the MySQL server is running
- Verify that the MySQL database and table exists before attempting to add, update or delete rows.
- Customize the app's HTML and CSS files to match your preferred design layout
- The app serves a basic demonstration and can be extended and enhanced to suit a more complex scenario
