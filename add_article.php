<!DOCTYPE html>
<html>

<head>
<title>Add an issue</title>

</head>

<body>
  <?php
/*    require_once 'login.php';

    $conn = new mysqli($hn, $un, $pword, $dbase);

    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }
    
    $conn->close(); 
*/    
  ?>
  
  <h2>Welcome to your magazine repository</h2>
  <h4>NOT FOR PUBLIC - This application is to catalog a corporeal collection of magazines.</h4>
  <form action="add_toc.php" method="post">
    <fieldset> 
    <legend>Add an Article</legend>
    Author: <input type="text" size="80" name="author">
    <br>
    Title:  <input type="text" size="80" name="title">
    <br>
    Issue:  <input type="text" size="5" name="issue">
    <br>
    </fieldset>
    <br>
    <br>

    <input type="submit" value="Add Article">

</form>
</body>

</html>
