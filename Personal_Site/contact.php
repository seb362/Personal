<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!

if(isset($_POST['submit'])){
  $submitable = TRUE;
  $name = filter_input(INPUT_POST, 'user_name', FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'user_email', FILTER_SANITIZE_EMAIL);
  $notes = filter_input(INPUT_POST, 'user_notes', FILTER_SANITIZE_SPECIAL_CHARS);
  $tele = filter_input(INPUT_POST, 'user_telephone', FILTER_SANITIZE_SPECIAL_CHARS);

 if($name == '') {
    $submitable = FALSE;
  }
  if ($email == ''){
    $submitable = FALSE;
  }
  if (($tele == '')||!is_numeric($tele)){
    $submitable = FALSE;
  }
  if(strlen($tele) != 10){
    $submitable = FALSE;
  }

}
else{
  $name = "";
  $email = "";
  $notes = "";
  $tele = "";
}
?>


<!DOCTYPE html>
<html lang="en">

<?php
  include("includes/head.php");
?>

<body>
<!--  <?php include("includes/header.php"); ?>-->
  <h1> Get in Touch! </h1>
  <div id = "contactExplain">
    <p> If you wanna get in touch with me, feel free to fill out the form below. Please leave your name, email and phone number along with anything you would like to say to me. Thanks! </p>
  </div>


  <?php if(isset($submitable) && $submitable) { ?>
    <div id = "formResponse">
      <p> Thank you for getting in touch <?php echo $name ?>! </p>
      <p> Just to confirm, the email you put in was <?php echo $email ?>. If something went wrong, feel free to fill out the form again. </p>
    </div>
  <?php } else { ?>

  <form method = "post" action = "contact.php">
    <div id = "contactForm">
      <div id = "contactElement">
        <label for "name">Name:</label>
        <input id = "name" type = "text" name = "user_name" value = "<?php echo $name; ?>"/>
        <?php
          if(($name == '')&&(isset($_POST['submit']))){ ?>
            <p id = "formError"> Please input an name to submit the form </p>
         <?php }
        ?>
      </div>
      <div id = "contactElement">
        <label for "email">Email:</label>
        <input id = "email" type = "email" name = "user_email" value = "<?php echo htmlspecialchars($email); ?>"/>
      <?php
          if(($email == '')&&(isset($_POST['submit']))){ ?>
            <p id = "formError"> Please input an email to submit the form </p>
         <?php }
        ?>
      </div>
      <div id = "contactElement">
        <label for "phone">Phone: (no spaces or dashes between numbers)</label>
        <input id = "tele" type = "tel" name = "user_telephone" value = "<?php echo $tele; ?>"/>
        <?php
          if((isset($_POST['submit']))&&(!is_numeric($tele))){ ?>
            <p id = "formError"> Please input an phone number with no characters between numbers to submit the form </p>
         <?php }
          if((isset($_POST['submit']))&&(strlen($tele) != 10)){ ?>
            <p id = "formError"> Please make sure that the phone number inputted is 10 characters long </p>
         <?php }
        ?>
      </div>
      <div id = "contactElement">
        <label for "notes">Other Notes?</label>
        <input id = "notes" type = "text" name = "user_notes" value = "<?php echo $notes; ?>"/>
      </div>
      <div id = "contactElement">
       <input name = "submit" type = "submit" value = "submit" class = "subButton"/>
      </div>
    </div>
  </form>

  <?php } ?>
  <?php include("includes/footer.php"); ?>
</body>
</html>
