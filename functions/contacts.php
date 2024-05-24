<?php

require_once ("./database/db.php");

function display_contacts()
{
    $sql = "SELECT * from contacts order by id";
    $result = query($sql);
    $list = [];
    while ($row = $result->fetch_assoc()) {
        $list[] = $row;
    }
    return $list;
}

function add_contact($contact_info)
{
    $name = $contact_info["name"];
    $phone_number = $contact_info["phone_number"];
    $sql = "insert into contacts(name, phone_number) values ('$name', '$phone_number')";
    query($sql);
    return;
}

function edit_contact($id, $contact_info)
{
    $name = $contact_info["name"];
    $phone_number = $contact_info["phone_number"];
    $sql = "update contacts set name = '$name', phone_number = '$phone_number' where id = $id;";
    query($sql);
    return;
}

function delete_contact($id)
{
    $sql = "delete from contacts where id = $id";
    query($sql);
    return;
}