<h4> Page 4</h4>
<?php
session_start();

if(isset($_SESSION['connect'])){
    print'session is alive';
}else{
    print 'session was destroyed <br><a href="page_one.php">Start new session</a>';
}