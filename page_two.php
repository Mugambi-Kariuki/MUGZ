<h4>Page 2</h4>
<?php
session_start();

if(isset($_SESSION['connect'])){
    print'session is alive'<h3>. $SESSION["connect"].</h3> ;
    print '<a href="page_three.php">destroy session</a>'
}else{
    print 'session was destroyed'<br> <a <a href="page_one.php">Start new session</a>;
}

?>

