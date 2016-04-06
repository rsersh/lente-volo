<!DOCTYPE html>
<html>

<head>
<title>Search for an article</title>

</head>

<body>
  <?php
/*    require_once 'login.php';

    $conn = new mysqli($hn, $un, $pword, $dbase);

    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }
    
    $query = "SELECT * FROM articles";
    $result = $conn->query($query);
    if (!$result) {
       echo "Your result was not found.<br>"; 
       die($conn->error);
    }

    $rows = $result->num_rows;
    for ($j=0; $j < $rows; ++$j) {
      $result->data_seek($j);
      $row = $result->fetch_array(MYSQLI_ASSOC);
      echo '<br>Title: ' . $row['title'] . '<br>';
      echo 'Author: ' . $row['author'] . '<br>';
      echo 'Issue: ' . $row['issue'] . '<br>';
    }
    $result->close();   

    $conn->close(); 
*/    
  ?>
  
  <h2>Welcome to the Threads repository</h2>
  <h4>NOT FOR PUBLIC - This application is to catalog a personal magazine collection.<h4>
  <form action="retrieve_article.php" method="post">

    <fieldset>
    <legend>Search</legend>
    Title:  <input type="text" size="80" name="title">
    <br>
    Author: <input type="text" size="80" name="author">
    <br>
    Tags for this article: <textarea name="ptags" row="10" cols="30">
    </textarea>
    <br>
    Issue:  <input type="text" size="5" name="issue">
    </fieldset>
    <br>
    <br>

    <input type="submit" value="Search">
</form>

</body>

</html>
