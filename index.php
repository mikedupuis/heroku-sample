<html>
    <head>
    </head>

    <body>
        <h1>Sample Heroku App</h1>
<?php
    $db_connection = pg_connect(getenv("DATABASE_URL"));
    $result = pg_query($db_connection, "select message from messages");

    if (!pg_num_rows($result)) {
        print("Your connection is working, but your database is empty.\nFret not. This is expected for new apps.\n");
    } else {
        echo "<h2>Messages:</h2>";
        while ($row = pg_fetch_row($result)) {
            echo "$row[0]";
            echo "<br />\n";
        }
    }
?>
    </body>

</html>
