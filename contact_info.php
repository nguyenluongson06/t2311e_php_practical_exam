<?php
require_once ("functions/contacts.php");
$contact_id = $_GET["id"];
$contact = query("select * from contacts where id = $contact_id")->fetch_assoc();
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
                <h1 class="text-center">Edit contact</h1>
                <div class="row">
                    <form action="/save_contact.php" method="post">
                        <div class="mb-3">
                            <label for="id" class="form-label">Id</label>
                            <input name="id" type="text" class="form-control" id="id" value="<?php echo $contact_id ?>"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Contact name</label>
                            <input name="name" type="text" class="form-control" id="name"
                                value="<?php echo $contact["name"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone number</label>
                            <input name="phone_number" type="text" class="form-control" id="phone_number"
                                pattern="^[0-9]{10}$" value="<?php echo $contact["phone_number"] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>

            </div>
        </main>
    </body>

</html>