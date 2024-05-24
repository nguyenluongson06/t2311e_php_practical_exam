<?php
require_once ("functions/contacts.php");
$name = $_POST["name"];
$phone_number = $_POST["phone_number"];
$contact_info = [
    "name" => $name,
    "phone_number" => $phone_number
];

add_contact($contact_info);
header("Location: index.php");