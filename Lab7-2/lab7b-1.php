<!DOCTYPE html>
<html>
  <head>
    <title>Assignment 7b.1 - AnishSudhanNair</title>
  </head>

  <body>
    <center>
    <h1 style="margin-top: 30px">Form Validation</h1>
    </center>
      <form action="form_result.php" method="get" name="formValidation">
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
  </body>
</html>
