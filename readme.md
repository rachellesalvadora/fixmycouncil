****************************************
********************
# Fix My Council
********************
Fix My Council aims to allow the people to report problems to their respective council and allow them to view the issues around their municipality.

They are able to view problems posted by other people as well as update them if there is any progress.

This website allows access for community to watch over their own streets and be able to easily communicate the problems to their council.

### Demo
********
Demo available at: <a href="https://fixmycouncil.rachellesalvadora.com" target="_blank">fixmycouncil.rachellesalvadora.com</a>

### Built With
********************
<ul>
    <li>Laravel 5.4</li>
    <li>Bootstrap v4</li>
</ul>

### Requirements
********************
To run your own version of this Web App, familiarity with Laravel 5.4+ is recommended.

Recommended technologies setup:
<ul>
    <li>Apache / Nginx</li>
    <li>PHP 7+</li>
    <li>MySQL 5.6+</li>
    <li>Composer</li>
    <li>Laravel Server Requirements: (<a href="https://laravel.com/docs/5.4/installation" target="_blank">https://laravel.com/docs/5.4/installation</a>)</li>
</ul>

### Operating Instructions
********************
Recommended staging / development environment
-- I use MAMP / MAMP Pro but any local Web Server that can run PHP + MySql will work.

Once you have a web server set up you will just need to run the following commands to populate the database:
- php artisan migrate (Will create all the tables)
- php artisan db:seed (Will populate the databases with council data)

Refer to Laravel Artisan documentation: https://laravel.com/docs/5.4/artisan

### Research / Problem
**********************
Government Websites found in relation to gathering information from the government/services:

<ul>
    <li>http://abr.business.gov.au/</li>
    <li>https://www.humanservices.gov.au/</li>
    <li>http://www.health.gov.au/</li>
    <li>https://knowyourcouncil.vic.gov.au</li>
</ul>

I compared the pros and cons of these websites and found that they provide good information to the community but there isn't a section where people can report a problem or connect directly via the website. 

I have researched a website that allow people to communicate to their council regarding the issues that they want to be resolved and found <strong><a href="http://www.snapsendsolve.com/" target="_blank">Snap Send Solve</strong>.

<strong>Snap Send Solve</strong> is a mobile application that allows you to take a photo and send it to your respective council using your email account and there's no way to view the reported issues. I've based my idea losely on this app but it is a Web Interface and allows people to view problems per council and also update them.

<hr>

Once I had thought of an idea of a web app, one of the harder steps was to get the Council data for Victoria.

<strong><a href="http://knowyourcouncil.vic.gov.au">Know Your Council</a></strong> allowed you to search for all the information required for the council data, but did not provide any to collate all these lists easily, I required Suburbs / Postcodes and the Council Data.

I had to split the steps up of how to get all the Council Data into my application

Step 1
- I used <a href="http://www.onlymelbourne.com.au/melbourne-postcodes" target="_blank">http://www.onlymelbourne.com.au/melbourne-postcodes</a> to get all the Victorian postcodes and their matching suburb.

Step 2
- I created a scraper using <a href="https://github.com/guzzle/guzzle" target="_blank">Guzzle / Http</a> that makes a request to knowyourcouncil to get all the postcodes and return a council as a json object which I then saved to a CSV. Here is a gist of that file: <a href="https://gist.github.com/rachellesalvadora/a1ffa984da71ae0990136a0393506494">gist</a>.

Step 3
- Know Your Council had an excel sheet with all the council information, I used excel to match the suburb postcode / council name to the suburb then created the database seeds in laravel to populate the databse.

### Overview
********************
The application is designed to be an easy 3 step process to submit a problem.

For step 1, the system will ask the user for their postcode and if there isn't a suburb related to the input, the system will output an error message saying "This postcode doesn't exit! Try again.". The system will not accept an input or proceed to next step until there is a council corresponding to the number combination the the user have input.

For step 2, the user will have to select a suburb related to thepostcode that they have entered because this is the way which the system identify which council the user belongs to.

For step 3, there are multiple fields which they need to fill in (they are all required):
<ul>
    <li>Title
    <ul>
        <li>
            Title is the name of the problem or it could be a very short description of the problem. E.g: Pothole, Street where they encounter the problem, broken street sign,etc.,
        </li>
    </ul>
    </li>
    <li>Description
    <ul>
        <li>
            This section is for the user to further explain the problem or add more information regarding the problem that they have encounter. This area will be most helpful for the address or street which the problem is, or the user could also explain the trouble that the problem is causing them, or what would change or how it would help them if the certain issue/problem is fixed, etc.
        </li>
    </ul>
    </li>
    <li>Image
    <ul>
        <li>
            The system also allows the user to add an image or attachment that is related to the problem.
        </li>
    </ul>
    </li>
    <li>Name
        <ul>
            <li>
             The system would also require a user to enter their name as part of the reporting process.
            </li>
        </ul>
    </li>
</ul>

### Author
********************
Created by:<br/>
<ul>
    <li>Rachelle Salvadora</li>
</ul>

Started on 13th May 2017<br/>


### License
********************
/*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
* 
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
* 
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
* 
* @author - Rachelle Salvadora
* @website - rachellesalvadora.com
*/
****************************************

### ACKNOWLEDGEMENTS
Inspirations:
<ul>
    <li>https://knowyourcouncil.vic.gov.au/</li>
    <li>http://www.snapsendsolve.com/<li>
</ul>

### NOTES
This web application is created as part of <a href="http://www.codeforvictoria.org/" target="_blank">Code of Australia</a> Fellowship challenge.<br/>
Custom built using the technologies listed above in the <strong>Built With</strong>s section.

### VERSIONS
Fix My Council v.1.0