<html>
    <head>
    </head>

    <body>
        <h1>Sample Heroku App</h1>
<?php
    $db_connection = pg_connect($DATABASE_URL);
    $result = pg_query($db_connection, "SELECT message, created_time FROM messages");
?>
    </body>

</html>
