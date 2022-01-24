# Complete Guide to Cyber Security

The aim of this github repository is to provide the complete guide on cybersecurity.

## Web Security
<p>Web Security is the branch of security which takes care of the protective measures and protocols which organizations adopt to protect the organization from, cyber criminals and threats that use the web channel. It is critical to business continuity and for protecting data, users and companies from risk.</p>

### OWASP
<p>The Open Web Application Security Project (OWASP) is an online community that produces freely-available articles, methodologies, documentation, tools, and technologies in the field of web application security. The Open Web Application Security Project provides free and open resources.</p>

### Pre-requisite concepts

It is important that you get familiar with some basic concepts before proceeding with the web security. Here are some of the questions which one should know before they can start with this section.
<ul>
    <li>What is server and client?</li>
    <li>How websites are hosted?</li>
    <ul>What are various programming language used?</li>
    <ul>What is HTTP request and response?</li>
<ul>

### Setting up Lab
<p><a href="https://github.com/digininja/DVWA">Damn Vulnerable Web Application (DVWA)</a> is the best place for begineers to start their journey with web security. DVWA is an open source lab which provides a vulnerable environment where learners can practice their skill which they learn from the concept above.</p>

<p>Note: For detailed installation, please refer to the github page of DVWA.</p>


<p>Let's start the apache2 and mysql server.</p>

```bash
sudo service apache2 start
sudo service mysql start
```

<p>Setting up the DVWA.</p>

```bash
cd /var/www/html
git clone https://github.com/digininja/DVWA.git
sudo chmod 777 DVWA
cd DVWA
sudo cp config.inc.php.dist config.inc.php
```

<p>Let's create a sample database. We will start by logging in and then create database.</p>
<p>Note: If you are using Kali and have not changed password of `mysql` then it will have empty password, so just press enter when asked for password.</p>

```bash
sudo mysql -u root -p

mysql> create database dvwa;
Query OK, 1 row affected (0.00 sec)

mysql> create user dvwa@localhost identified by 'p@ssw0rd';
Query OK, 0 rows affected (0.01 sec)

mysql> grant all on dvwa.* to dvwa@localhost;
Query OK, 0 rows affected (0.01 sec)

mysql> flush privileges;
Query OK, 0 rows affected (0.00 sec)

mysql> exit;
```


### Other Configuration

<p>Depending on your Operating System, as well as version of PHP, you may wish to alter the default configuration. The location of the files will be different on a per-machine basis.</p>

#### Folder Permissions

<ul>
    <li>./hackable/uploads/ - Needs to be writeable by the web service (for File Upload).</li>
    <li>./external/phpids/0.6/lib/IDS/tmp/phpids_log.txt - Needs to be writable by the web service (if you wish to use PHPIDS).</li>
</ul>

#### PHP configuration

<p>
    allow_url_include = on - Allows for Remote File Inclusions (RFI) [allow_url_include] <br>
    allow_url_fopen = on - Allows for Remote File Inclusions (RFI) [allow_url_fopen] <br>
    safe_mode = off - (If PHP <= v5.4) Allows for SQL Injection (SQLi) [safe_mode] <br>
    magic_quotes_gpc = off - (If PHP <= v5.4) Allows for SQL Injection (SQLi) [magic_quotes_gpc]<br>
    display_errors = off - (Optional) Hides PHP warning messages to make it less verbose [display_errors]<br>
    File: config/config.inc.php:<br>
    $_DVWA[ 'recaptcha_public_key' ] & $_DVWA[ 'recaptcha_private_key' ] - These values need to be generated from: https://www.google.com/recaptcha/admin/create
</p>

<p>Now visit `http://127.0.0.1/DVWA` on browser, and login with username `admin` and password as `password`.</p>

## Contributors
<ul>
    <li><a href="https://www.linkedin.com/in/prashantkumardey/">Prashant Kumar Dey</a></li>
<ul>

## References
<ul>
    <li><a href="https://www.wikipedia.org/">Wikipedia</a></li>
    <li><a href="https://owasp.org/">OWASP</a><li>
<ul>
