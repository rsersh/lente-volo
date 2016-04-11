<?php
    require_once 'login.php';

    $link = mysqli_connect($hn, $un, $pword, $dbase);
    if (mysqli_connect_errno()) die (mysqli_connect_error());

    if (isset($_POST['author']) && isset($_POST['title'])
       && isset($_POST['issue']) && isset($_POST['tags'])) {
    $author = mysqli_real_escape_string($link, $_POST['author']);
    $title = mysqli_real_escape_string($link, $_POST['title']);
    $issue_str= mysqli_real_escape_string($link, $_POST['issue']);
    $issue = (int)$issue_str;
    $tags= mysqli_real_escape_string($link, $_POST['tags']);
    }

    /* Need to add code here to avoid adding empty strings to database */

    $statement = mysqli_prepare($link, 'INSERT INTO articles VALUES (?,?,?,?)');
    mysqli_stmt_bind_param($statement, 'siss', $title, $issue, $tags, $author);
    mysqli_stmt_execute($statement);

echo <<<_END
 <html>
   <head><title>Add An Article</title></head>
   <body>
   <h2>Welcome to your magazine repository</h2>
   <h4>NOT FOR PUBLIC - This application is to catalog a corporeal collection of magazines.</h4>
   <form action="add_article.php" method="post">
     <fieldset> 
     <legend>Add an Article</legend>
     <pre>
     Author: <input type="text" name="author">
     <br>
     Title:  <input type="text" name="title">
     <br>
     Issue:  <input type="text" name="issue">
     <br>
     Tags:  <input type="text" name="tags">
     <br>
     </pre>
    </fieldset>
    <input type="submit" value="Add Article">
    </form>
   </body>
  </html>
_END;

    mysqli_close($link); 

?> 
