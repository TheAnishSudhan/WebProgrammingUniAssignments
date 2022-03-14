<?php
if (isset($_POST['name'])) {
  echo "Name is ".$_POST['name']."<br>";
} else {
  echo "AAAAAA";
}

  echo "Email is ".$_POST['email']."<br>";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Assignment 6.8 - AnishSudhanNair</title>
  </head>

  <body>
    <center>
    <h1 style="margin-top: 30px">Form Validation</h1>
    </center>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="formValidation">

      <!-- <form action="form_result.php" method="post" name="formValidation" onsubmit="return validate()"> -->
        <fieldset>

        <label for="name">Name: </label> <br>
        <input type="text" id="name" name="name">
        <br>
        <label for="email">Email: </label> <br>
        <input type="email" id="email" name="email">
        <br>
        <br />
        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="Reset">
        <p id="error"></p>
        </fieldset>
      </form>
      <script type="text/javascript">

      function validate() {

        if ((document.formValidation.name.value=="")document.formValidation.email.value=="")) {
          document.getElementById("error").innerHTML="Input cannot be empty";
          return (false);
        }

        if (document.formValidation.name.value.length!=10) {
          document.getElementById("error").innerHTML="Username must be 10 characters long";
          return (false);
        }

        return (true);

      }

      </script>
  </body>
</html>
