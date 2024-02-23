List of Colors used
Jade 
Aqua 
Blue
Indigo
Brown
Bronze
Coffee
Mocha
Yellow
Red
Mahogany
Violet
Pink
Purple 
Raspberry
Green
Orange
Orchid 
Amaranth 
Iris

Setup
1. Install Apache for local testing (I used XAMPP apache for my development)
2. Add the colortranslator folder in xampp/htdocs directory
3. Start Apache 
4. Open localhost/colorpicker in browser

Tools used and Design Desicions
1. Built in PHP, HTML, CSS, Bootstrap, JQuery, AJAX (no database needed)
2. Created an index.php file for the main page (I used Bootstrap and CSS for styling)
3. Every text or string entered in the input will be sent using ajax method in the script directory script.js file
4. Data from the input will be processed in the search.php file in the function directory (logics and conditions are in this file)
5. Created a separate file for list of colors and arrays in colors.php functon directory for better code readability.

Test Cases
1. Input should not be empty when form is submitted
2. Type in any colors indicated in the list and it should return its hexadecimal value and its color for indication.
3. Type in any random words that are not on the list will return a not found error text.

