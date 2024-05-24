<?php
require_once ("functions/contacts.php");
$id = $_GET["id"];
delete_contact($id);
header("Location: index.php");