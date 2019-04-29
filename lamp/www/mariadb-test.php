<html>
 <head>
  <title>MariaDB Test</title>
  <meta charset="utf-8"> 
</head>
<body>
    <div>
    <?php echo "<h1>Hi there from PHP!</h1>"; ?>

    <?php
    $conn = mysqli_connect('db', 'foobar', '123456', "testDB");
    $query = 'SELECT * FROM persons';
    $result = mysqli_query($conn, $query);
    echo '<table >';
    echo '<thead><tr><th>id</th><th>name</th></tr></thead>';
    while($value = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr>';
        foreach($value as $element){
            echo '<td>' . $element . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    $result->close();
    mysqli_close($conn);
    ?>
    </div>
</body>
</html>