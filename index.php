<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5" style="max-width:600px;">
        <h1 class="text-center">Contact Us</h1>
        <form class="mt-4" action="send-mail.php" method="post">
            <div class="form-group mt-4">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" required>
            </div>
            <div class="form-group mt-4">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" id="name" required>
            </div>
            <div class="form-group mt-4">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="" rows="5" required></textarea>
            </div>
            <input type="submit" class="mt-4 btn btn-primary btn-block" value="Send Message">
        </form>
    </div>
</body>
</html>