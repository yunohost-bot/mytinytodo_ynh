<?php

# Configuration goes here
$config = array();

# Set a title for MyTinyTodo
$config['title'] = '__TITLE__';

# Database type: sqlite or mysql
$config['db'] = 'mysql';

# Specify these settings if you selected above to use Mysql
$config['mysql.host'] = "localhost";
$config['mysql.db'] = "__DB_NAME__";
$config['mysql.user'] = "__DB_USER__";
$config['mysql.password'] = "__DB_PWD__"; 

# Tables prefix
$config['prefix'] = "mtt_";

# These two parameters are used when mytinytodo index.php called not from installation directory
# 'url' - URL where index.php is called from (ex.: http://site.com/todo.php)
# 'mtt_url' - directory URL where mytinytodo is installed (with trailing slash) (ex.: http://site.com/lib/mytinytodo/)
$config['url'] = '';
$config['mtt_url'] = ''; 

# Language pack
$config['lang'] = "__LANGUAGE__";

# Specify password here to protect your tasks from modification,
#  or leave empty that everyone could read/write todolist
$config['password'] = "__SET_PASSWORD__";

# To disable smart syntax uncomment the line below
#$config['smartsyntax'] = 0;

# Default Time zone
$config['timezone'] = '__TIMEZONE__';

# To disable auto adding selected tag  comment out the line below or set value to 0
$config['autotag'] = 1;

# duedate calendar format: 1 => y-m-d (default), 2 => m/d/y, 3 => d.m.y
$config['duedateformat'] = 1;

# First day of week: 0-Sunday, 1-Monday, 2-Tuesday, .. 6-Saturday
$config['firstdayofweek'] = 1;

# select session handling mechanism: files or default (php default)
$config['session'] = 'files';

# Date/time formats
$config['clock'] = 24;
$config['dateformat'] = 'j M Y';
$config['dateformatshort'] = 'j M';

# Show task date in list
$config['showdate'] = 0;

# Autodetect mobile devices and switch theme
$config['detectmobile'] = 1;

?>
