<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>login</title>
  </head>
  <body>
    <form action="welcome.php" method="post">
      <fieldset>
        <legend>LOGIN</legend>

        <label for="username">Username</label>
        <input type="text" name="username" placeholder="username">

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="password">
        <br>
        <label for="male">Male</label>
        <input type="radio" name="sex" value="male">
        <label for="male">Female</label>
        <input type="radio" name="sex" value="female">
        <label for="male">Other</label>
        <input type="radio" name="sex" value="other">
        <label for="plus">Plus?</label>
        <input type="checkbox" name="account" value="plus">
        <label for="plus">Free?</label>
        <input type="checkbox" name="account" value="free">

        <br>

        <input type="submit" value="Login">
      </fieldset>

    </form>

  </body>
</html>
