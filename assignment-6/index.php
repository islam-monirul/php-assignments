<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Assignment 6</title>
  </head>
  <body>
    <form method="post" action="register.php" enctype="multipart/form-data">
      <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required />
      </div>

      <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required />
      </div>

      <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required />
      </div>

      <div>
        <label for="picture">Profile Picture:</label>
        <input
          type="file"
          id="picture"
          name="picture"
          accept="image/*"
          required
        />
      </div>

      <div>
        <input type="submit" value="Submit" />
      </div>
    </form>
  </body>
</html>
