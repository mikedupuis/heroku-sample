<html>
    <head>
    </head>

    <body>
        <h1>Sample Heroku App</h1>
<?php
    $db_connection = pg_connect(getenv("DATABASE_URL"));
    $result = pg_query($db_connection, "select * from messages");

    if (!pg_num_rows($result)) {
        print("Your connection is working, but your database is empty.\nFret not. This is expected for new apps.\n");
    } else {
        var_dump(pg_fetch_all($result));
        print "Messages:\n";
        while ($row = pg_fetch_row($result)) {
            print("- $row[0]\n");
        }
    }
?>
    </body>

</html>
