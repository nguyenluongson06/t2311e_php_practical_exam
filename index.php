<?php
require_once ("functions/contacts.php");
$contacts = display_contacts();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Phonebook</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </head>

    <body>
        <header></header>
        <main class="main">
            <div class="container">
                <h1>All contacts</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($contacts as $contact): ?>
                        <tr>
                            <th scope="row"><?php echo $contact["id"] ?></th>
                            <td><?php echo $contact["name"] ?></td>
                            <td><?php echo $contact["phone_number"] ?></td>
                            <td>
                                <a class="btn btn-success" href="/contact_info.php?id=<?php echo $contact["id"] ?>"
                                    role="button">Edit</a>
                                <a class="btn btn-danger" href="/delete_contact.php?id=<?php echo $contact["id"] ?>"
                                    role="button">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <a class="btn btn-primary" href="/add_contact.php" role="button">Add new contact</a>
            </div>
        </main>
    </body>

</html>