#PHP Doctor Appointment System
## SET UP
### Installation
1. To run php and mysql conveniently together install XAMPP: 
    - https://www.apachefriends.org/download.html
2. In XAMPP, Apache, config section:
Change the httpd.conf, change both fields under 'Documentroot', save and restart Apache server.

```bash
~/Doctor Appointment
```

### Generating MySQL Database:
MySQL Config:
```
Server host : localhost
Database : doctor_appointment
Port : 3306
Username : root
Password : ''
```
3. Import data into mysql
Enter $localhost/phpmyadmin, find doctor_appointment table, import, import sql file included in the source code directory.

## Run project
+ Restart XAMPP Apache server, MySQL service.
+ Go to http://localhost and http://localhost/admin for user and admin interface. 
