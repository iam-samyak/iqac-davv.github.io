# IQAC Website Repository

This repository contains the source code for the IQAC (Internal Quality Assurance Cell) website of Devi Ahilya Vishwavidyalaya (DAVV), Indore. The website is built using PHP and uses the XAMPP server for local development and testing. Below are the installation and setup instructions to get the website running on your local machine.

## Software Requirements

Before you proceed with the installation, ensure that you have the following software installed on your system:

1. XAMPP: XAMPP is a free and open-source cross-platform web server solution that includes Apache, MySQL, PHP, and Perl. You can download XAMPP from the official website: [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html)

## Hardware Requirements

Make sure your system meets the following minimum hardware requirements:

- Processor: Dual-core processor or higher
- RAM: 2 GB or more
- Storage: At least 10 GB of free disk space
## About this file
The purpose of this file is to provide overview, setup instructions and background information of the project. If you have joined this project as a part of the development team, please ensure this file is up to date.
> **Note : Any update to this project which may affect the running of the code in this git repository must be listed in this file. All developers must ensure that the instructions mentioned in this file are sufficient to enable a new developer to obtain a executable copy of the lastest code in this repository, without involvement from any other human assistance.**

### **Project Technical Specifications**
- This project is based on technologies such as HTML5 , CSS3 , JavaScript , PHP and MySql.
- This project also uses Bootstrap, CSS Frame Work.
- Having responsive frontend, works on all kind of devices and screen.
- This project has Login/Registration page with user authentication, email verification, forget password through email verification.
- This project use PHP and MySql to keep records of users, their details.

### **Setup Instructions**
The below mentioned steps may vary significantly across various operating systems, please follow them accordingly.
These instructions are aimed at a developer who has been added to the project team, after the project development has already been initiated,
Therefore the aim is to get the code from the git repository to run on the developer's system, so as to allow him / her to continue with further development.

#### **Clone the repository from GitHub**
`https://github.com/iam-samyak/medico.github.io.git`
#### **Installing dependencies**
This project requires IDE for running, You can install it by referring to the official Visual Studio Code page :
[https://code.visualstudio.com/download](https://code.visualstudio.com/download/)
Also, require a web-server and local database to store data, 
You can install Xampp: A open source software for web-server and local database:
[https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html/)
To send email for verfication and authentication, you will need a PHP library called PHPMailer, you can install it from:
[https://github.com/PHPMailer/PHPMailer.git](https://github.com/PHPMailer/PHPMailer.git/)

Install the software in your system and create a folder , put all the files in htdocs in xampp folder:

`C:\xampp\htdocs\project_name`

> **Note:** Files of  **PHPMailer** should also be there in project folder.
#### ****Start the Apache and Mysql xampp server :****
> **Note:** If your  **MySql xampp server** does not start, try to uninstall previous version of MySql on your system.

Go to xampp control panel and start Apache and Mysql server. 
Then go to browser and open phpadmin :

`http://localhost/phpmyadmin/index.html`

> **Note:** In Visual Studio Code install an extension **Live Server** and port it see immediate update of any change made in the code.
 
## Contributing

If you'd like to contribute to the development of the IQAC website, feel free to fork this repository, make changes, and create a pull request with your improvements.

## License

The IQAC website is released under the [MIT License](LICENSE). Feel free to use, modify, and distribute the code as per the terms of the license.

## Contact

For any queries or support related to the IQAC website, please contact the IQAC team at [samyak686@gmail.com](mailto:samyak686@gmail.com).

---

Please note that the information provided in this README file is based on the assumption that the structure and setup of the IQAC website repository remain consistent with the time of my last update in September 2021. If there have been significant changes or updates to the repository structure or setup, the instructions in this README may need to be adapted accordingly. Always refer to the latest documentation and repository updates for the most accurate instructions.

### **Notes for future maintainers**
All update should saved properly, without any error and should be committed on Github. All queries and issue should be posted on issue section of Github. Try to maintain neat and short comment for future use.All developers must ensure that the instructions mentioned in this file are sufficient to enable a new developer to obtain a executable copy of the lastest code in this repository, without involvement from any other human assistance.
