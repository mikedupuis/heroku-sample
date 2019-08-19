<?php include_once("index.html"); ?>


<?php
    $db_connection = pg_connect($(heroku config:get DATABASE_URL -a your-app));
    $result = pg_query($db_connection, "SELECT message, created_time FROM messages");
?>
