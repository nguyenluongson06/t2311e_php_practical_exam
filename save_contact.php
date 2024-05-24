<?php
require_once ("functions/contacts.php");
$id = $_POST["id"];
$name = $_POST["name"];
$phone_number = $_POST["phone_number"];
$contact_info = [
    "name" => $name,
    "phone_number" => $phone_number
];
edit_contact($id, $contact_info);
header("Location: index.php");