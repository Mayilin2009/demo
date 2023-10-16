<?php

$connect =new mysqli(
    'db', # service name
    'php_docker', # username
    'pwssword', # password
    'php_docker' # db table
);

$table_name = "publications";

$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

echo "<strong>$table_name: </strong>";
while($i = mysqli_fetch_assoc($response))
{
    echo "<p>".$i['title']."</p>";
    echo "<p>".$i['body']."</p>";
    echo "<p>".$i['date_created']."</p>";
    echo "<hr>";
}







