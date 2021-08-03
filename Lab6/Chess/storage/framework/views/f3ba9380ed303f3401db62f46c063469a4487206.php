<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/newPage.css">
    <title>Chess Puzzles</title>
  </head>
  <body>
    <div class="register">
      <div class="imgBox"><img id="icon" src="img/confirm1.png"></div>
      <h1>You are successfully registered!</h1>
      <h5>Your login: <?php echo e($playerData->last()->login); ?></h5>
      <h5>Your password: <?php echo e($playerData->last()->password); ?></h5>
      <h5>Your level: <?php echo e($playerData->last()->level); ?></h5>
      <h5>Your country: <?php echo e($playerData->last()->country); ?></h5>
    </div>
  </body>
</html>
