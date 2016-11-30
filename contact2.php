<?php include './includes/config.php';?>
<?php include './includes/header.php';?>
<?php
if(isset($_POST["FirstName"]))
{
    //echo '<pre>';
   // var_dump($_POST);
   // echo '<pre>';
    
    
    $to      = 'jvoorh02@seattlecentral.edu';
    $subject = 'ITC 240 Contact Form';
    $message = $_POST['Comments'];
    $replyTo = $_POST['Email'];
    $headers = 'From: noreply@seattlecentral.edu' . PHP_EOL .
        'Reply-To: ' . $replyTo . PHP_EOL .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    
    
    echo '<p>
    <a href="' . THIS_PAGE . '">EXIT</a>
    </p>';
    //echo $_POST["FirstName"];
}else{
    echo '<form action="' . THIS_PAGE . '" method="post">
First Name: <input type="text" name="FirstName" required="required" autofocus="autofocus" title="First Name is Required" placeholder="First Name Goes Here" /><br />
Email: <input type="email" name="Email" required="required" /><br />
Comments:<textarea name="Comments"></textarea>
<input type="submit" value="Click Me"/>
</form>';
}
?>
        <?php include './includes/footer.php'; ?>
