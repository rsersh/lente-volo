<?php
    require_once 'login.php';

    $link = mysqli_connect($hn, $un, $pword, $dbase);
    if (mysqli_connect_errno()) die (mysqli_connect_error());

    if (isset($_POST['issue']) && (!isset($_POST['title']))
    && (!isset($_POST['article'])) && (!isset($_POST['tags']))) {
      $issue=(int)mysqli_real_escape_string($link,$issue);
      $query = "SELECT * FROM articles WHERE issue = '$issue'";
      $result = mysqli_query($query);
    }

/*    
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
      echo 'Tags: ' . $row['ptags'] . '<br>';
    }
    $result->close();   
*/

echo <<<_END
   <html>
   <head><title>Search Database</title></head> 
   <body>
     <h2>Welcome to the Threads repository</h2>
     <h4>NOT FOR PUBLIC - This application is to catalog a personal magazine collection.<h4>
     <form action="retrieve_article.php" method="post">
        <fieldset>
        <legend>Search</legend>
        <pre>
        Title:  <input type="text" size="80" name="title">
        <br>
        Author: <input type="text" size="80" name="author">
        <br>
        Tags:   <input type="text" size="80" name="ptags">
        <br>
        Issue:  <input type="text" size="5" name="issue">
        </pre>
        </fieldset>
        <br>
        <br>
        <input type="submit" value="Search">
     </form>
   </body>
   </html>
_END;

  /*$conn->close(); */
  mysqli_close($link);

?>
