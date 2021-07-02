<?php

if(isset($_GET['submit']))
{
  if(isset($_GET['first_name']) && isset($_GET['last_name']))
  {
    echo $_GET['first_name'] . $_GET['last_name'];
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Form</title>
</head>
<body>
  <main>
    <section>
      <form action="" method="GET">
        <label for="first_name">Enter first name:</label>
        <input type="text" name="first_name" id="first_name" />
        <label for="last_name">Enter last name:</label>
        <input type="text" name="last_name" id="last_name" />
        <input type="submit" name="submit" value="Submit" />
      </form>
    </section>
  </main>
</body>
</html>