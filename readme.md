****************************************
********************
# Fix My Council
********************
Fix My Council aims to allow the people to report problems to their respective council and allow the council to view the issues around their municipality.
This website allows access for community to watch over their own streets and be able to easily communicate the problems to their council.

### Built With
********************
<ul>
    <li>Bootstrap v4</li>
    <li>Laravel 5.4</li>
    <li>MySQL</li>
</ul>

### Environment
********************
<ul>
    <li>Web Server</li>
</ul>

### Operating Instructions
********************
<ul>
    <li>A step by step series of examples that tell you have to get a development env running</li>
</ul>
Say what the step will be

Give the example
And repeat

until finished
End with an example of getting some data out of the system or using it for a little demo

### Research / Problem
********************
Government Websites found in relation to gathering information from the government/services:

<ul>
    <li>http://abr.business.gov.au/</li>
    <li>https://www.humanservices.gov.au/</li>
    <li>http://www.health.gov.au/</li>
    <li>https://knowyourcouncil.vic.gov.au</li>
</ul>

I compared the pros and cons of these websites and found that they provide good information to the community but there isn't a section where people can report a problem or connect directly via the website. 

I have researched a website that allow people to communicate to their council regarding the issues that they want to be resolved and found <strong><a href="http://www.snapsendsolve.com/" target="_blank">Snap Send Solve</strong>.
<strong><a href="http://www.snapsendsolve.com/" target="_blank">Snap Send Solve</strong>is a mobile application that allows you to take a photo and send it to your respective council using your email account and there's no way to view the reported issues.

### Overview
********************
The application is designed to get ask the user to go to 3 stepsto report a problem.
For step 1, the system will ask the user for their postcode and if there isn't a suburb related to the input, the system will output an error message saying "This postcode doesn't exit! Try again.". The system will not accept an input or proceedto next step until there is a council corresponding to the number combination the the user have input.

For step 2, the user will have to select a suburb related to thepostcode that they have entered because this is the way which the system identify which council the user belongs to.

There are multiple steps on step 3 and they are:
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

### Usage Instructions
********************
In summary, <strong>Fix My Council</strong> is a web version of Snap Send Solve but so much more.
In only 3 steps you will be able to report to your council using only the website.
First: you enter your postcode. Second: select your suburb. Third and last step: input the problem details.
You may also view what other people submitted in your council.

### Testing Instructions
********************
!!! To test for the main functions of <strong>Fix My Council</strong>, please fo through the 

### Author
********************
Created by:<br/>
<ul>
    <li>Rachelle Salvadora</li>
</ul>

Started on 13th May 2017<br/>


### License
********************
Enter License here

****************************************

****************************************
### ACKNOWLEDGEMENTS
Inspirations:
<ul>
    <li>https://knowyourcouncil.vic.gov.au/</li>
    <li>http://www.snapsendsolve.com/<li>
</ul>

### NOTES
This web application is created as part of <a href="http://www.codeforvictoria.org/" target="_blank">Code of Australia</a> Fellowship challenge
Custom built using the technologies listed above in the <strong>Built With</strong>s section.

### VERSIONS
Fix My Council v.1.0