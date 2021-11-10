# DEMOSSEUI

**Demo Url**: http://ec2-13-126-214-7.ap-south-1.compute.amazonaws.com/DEMOSSEUI/sse.html 

**pre-requisite**

  PHP, Mysql

**Steps**
1. Clone this repository

2. **Execute visitor.sql**
**command**: mysql -h hostname -u user -p password < visitors.sql

3. **DB CONFIG**
Update Database credientials in config.php

4. **Backend API**
To send visitors data to backend Need to setup a application <a href="https://github.com/yingale/demoBackend" target="_blank">demoBackend</a>

5. **Once demoBackend application is started, Please replace appPat variable value with the your host with port**
6. Open application in browser "http://Yourhost"/DEMOSSEUI/sse.html
