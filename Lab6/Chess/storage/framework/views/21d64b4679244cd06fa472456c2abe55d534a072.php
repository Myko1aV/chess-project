<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Chess Puzzles</title>
  </head>
  <body>

    <div id="timeArea">
      <button id="start" class="btn btn-warning" type="button" onclick="startTimer()">
        Start</button>
      <span id="timer">10:00</span>
    </div>

    <div id="board">
      <table cellspacing="0">
        <tr>
          <th>1</th>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
        </tr>

        <tr>
          <th>2</th>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
        </tr>

        <tr>
          <th>3</th>
          <td class="green"><img class="img" src="img/wp.png"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
        </tr>

        <tr>
          <th>4</th>
          <td class="white"></td>
          <td class="green"><img class="img" src="img/wp.png"></td>
          <td class="white"></td>
          <td class="green"><img class="img" src="img/wk.png"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
        </tr>

        <tr>
          <th>5</th>
          <td class="green"></td>
          <td class="white"><img class="img" src="img/bp.png"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
        </tr>

        <tr>
          <th>6</th>
          <td class="white"><img class="img" src="img/bp.png"></td>
          <td class="green"><img class="img" src="img/bk.png"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
        </tr>

        <tr>
          <th>7</th>
          <td class="green"><img class="img" src="img/wn.png"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
        </tr>

        <tr>
          <th>8</th>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
        </tr>

        <tr id="letters">
          <th class="letters"></th>
          <th class="letters">H</th>
          <th class="letters">G</th>
          <th class="letters">F</th>
          <th class="letters">E</th>
          <th class="letters">D</th>
          <th class="letters">C</th>
          <th class="letters">B</th>
          <th class="letters">A</th>
        </tr>
      </table>
    </div>


    <div id="inputArea">
      <form id="form" method="post" action="" name="myForm" class="text-white">
        <div class="container signIn">
          <?php echo e(csrf_field()); ?>

          <div class="mb-3">
            <label for="login" class="form-label">Email address</label>
            <input type="email" class="form-control" id="login" name="login" autocomplete="off" placeholder="example@gmail.com">
            <div class="text-danger"><?php echo e($errors->first('login')); ?></div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" autocomplete="off" placeholder="Example12345">
            <div class="text-danger"><?php echo e($errors->first('password')); ?></div>
          </div>
        </div>
        <div class="signUpArea">
          <div class="container">
            <div class="btn-group mt-2 mb-3" role="group">
              <input type="radio" class="btn-check" name="level" id="begginerRadio" value="Begginer" checked>
              <label class="btn btn-outline-warning" for="begginerRadio">Begginer</label>

              <input type="radio" class="btn-check" name="level" id="intermediateRadio" value="Middle">
              <label class="btn btn-outline-warning" for="intermediateRadio">Middle</label>

              <input type="radio" class="btn-check" name="level" id="proRadio" value="Professional">
              <label class="btn btn-outline-warning" for="proRadio">Professional</label>
            </div>

            <div class="mb-3">
              <label for="userDescribe" class="form-label">Tell us something about yourself</label>
              <textarea class="form-control" placeholder="Leave a comment here" id="userDescribe" name="userDescribe"></textarea>
              <div class="text-danger"><?php echo e($errors->first('userDescribe')); ?></div>
            </div>

            <div class="mb-3">
              <label for="country" class="form-label">Choose your country</label>
              <input class="form-control" list="countryOptions" id="country" name="country" placeholder="Your country" autocomplete="off">
              <datalist id="countryOptions">
                <option value="Ukraine">
                <option value="Poland">
                <option value="Russia">
                <option value="Romania">
              </datalist>
              <div class="text-danger"><?php echo e($errors->first('country')); ?></div>
            </div>
            <button type="submit" class="btn btn-warning mb-2">Sign Up</button>
          </div>
        </div>
      </form>
  </div>

  <div id="diagram">
    <canvas id="myChart"></canvas>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  </div>

  <script type="text/javascript" src="js/script.js"></script>


  </body>
</html>
