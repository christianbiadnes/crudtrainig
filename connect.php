<?php

$con = new mysqli('localhost', 'root', 'iloveyousabado', 'crudtraining');

if ($con) {
    echo 'Successful Connnection sheesh';
} else {
    die(mysqli_error($con));
}
