<?php

$con = mysqli_connect(getenv('OPENSHIFT_MYSQL_DB_HOST'), 'OPENSHIFT_MYSQL_DB_USERNAME',
    'OPENSHIFT_MYSQL_DB_PASSWORD', 'OPENSHIFT_APP_NAME')
or die("Error connecting to database");

?>