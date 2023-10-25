<?php

$con = new mysqli('localhost', 'root', 'iloveyousabado', 'crudtraining');

if (!$con) {
    die(mysqli_error($con));
}
