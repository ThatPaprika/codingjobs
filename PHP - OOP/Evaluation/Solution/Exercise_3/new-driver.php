<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert a new driver</title>
</head>

<body>
    <h2>Create a new driver</h2>

    <!-- Placeholder to display the results -->
    <div id="results"></div>

    <form id="driverForm">
        <input type="text" name="firstname" placeholder="First name"><br>
        <input type="text" name="lastname" placeholder="Last name"><br>
        <input type="number" name="age" placeholder="Age"><br>
        <input type="submit" value="Insert driver">
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        /* Wait for the page to be loaded/ready */
        $(function() {
            $('#driverForm').submit(function(e) {
                e.preventDefault();

                // Ajax call
                $.ajax({
                        url: 'insert-driver.php',
                        method: 'post',
                        data: $("form").serialize(),
                    })
                    .done(function(result) {
                        // If AJAX call worked
                        $('#results').html(result);
                    })
                    .fail(function(result) {
                        // Fail means : file not found, 500 errors.
                        // Fail doesnt mean : problem with query, syntax error in php
                        console.log('AJAX FAILED');
                    })
            });
        });
    </script>
</body>

</html>