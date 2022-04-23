<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database="bookmymovie";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql1=" CREATE TABLE customer (
    Cid int AUTO_INCREMENT PRIMARY KEY,
    firstname varchar(200) NOT NULL,
    password varchar(200) NOT NULL,
    email varchar(200) NOT NULL,
    mobile varchar(200) NOT NULL

  )";

  $sql2 = "CREATE TABLE Movies (
    MovieName VARCHAR(500),
    Description TEXT NOT NULL,
    Ratings INT,
    Status VARCHAR(500),
    img LONGBLOB,
    PRIMARY KEY(MovieName)
  )";
   $sql3 = "CREATE TABLE upcoming (
    moviename VARCHAR(500),
    img LONGBLOB,
    link LONGBLOB,

  )";

  if ($conn->query($sql1) === TRUE) {
    echo "Table Customer created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  if ($conn->query($sql2) === TRUE) {
    echo "Table Movies created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  if ($conn->query($sql3) === TRUE) {
    echo "Table upcoming created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  $conn->close();
?>

  <!-- INSERT INTO movies (MovieName, Description, Ratings, Status, img) VALUES ('KGF', 'In the blood-soaked Kolar Gold Fields, Rockys name strikes fear into his foes. While his allies look up to him, the government sees him as a threat to law and order. Rocky must battle threats from all sides for unchallenged supremacy.', '9.6', 'Live', 'img/kgf.jpg');
  INSERT INTO movies (MovieName, Description, Ratings, Status, img) VALUES ('RRR', 'A fictitious story about two legendary revolutionaries and their journey away from home before they started fighting for their country in 1920's.', '8.9', 'Live', 'img/rrr.jpg');
  INSERT INTO movies (MovieName, Description, Ratings, Status, img) VALUES ('Dasvi (2022)', 'Jailed under a tough cop, an uneducated politician decides to spend his time studying for high school, while his scheming wife has plans of her own.', '7.9', 'Live', 'img/dasvi.jpg'); -->