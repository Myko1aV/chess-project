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
          <td class="green"><div class="num">1</div><img class="img" src= "img/wr.png"  alt ="white" ></td>
          <td class="white"><img class="img" src= "img/wn.png"  alt ="white"></td>
          <td class="green"><img class="img" src= "img/wb.png"  alt ="white"></td>
          <td class="white"><img class="img" src= "img/wk.png"  alt ="white"></td>
          <td class="green"></td>
          <td class="white"><img class="img" src= "img/wb.png"  alt ="white"></td>
          <td class="green"><img class="img" src= "img/wn.png"  alt ="white"></td>
          <td class="white"><img class="img" src= "img/wr.png"  alt ="white"></td>
          </tr>

          <tr>
          <td class="white"><div class="num">2</div><img class="img" src= "img/whiteFig.png" alt ="white"></td>
          <td class="green"><img class="img" src= "img/whiteFig.png" alt ="white"></td>
          <td class="white"><img class="img" src= "img/whiteFig.png" alt ="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"><img class="img" src= "img/whiteFig.png" alt ="white"></td>
          <td class="white"><img class="img" src= "img/whiteFig.png" alt ="white"></td>
          <td class="green"><img class="img" src= "img/whiteFig.png" alt ="white"></td>
          </tr>

          <tr>
          <td class="green"><div class="parent"><div class="num">3</div></div></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          </tr>

          <tr>
          <td class="white"><div class="parent"><div class="num">4</div></div></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"><img class="img" src= "img/whiteFig.png" alt="white"></td>
          <td class="white"><img class="img" src= "img/wq.png" alt="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
          </tr>

          <tr>
          <td class="green"><div class="parent"><div class="num">5</div></div></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          </tr>

          <tr>
          <td class="white"><div class="parent"><div class="num">6</div></div></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"></td>
          <td class="white"></td>
          <td class="green"><img class="img" src= "img/bn.png" alt="black"></td>
          <td class="white"></td>
          <td class="green"></td>
          </tr>

          <tr>
          <td class="green"><div class="num">7</div><img class="img" src= "img/blackFig.png" alt="black"></td>
          <td class="white"><img class="img" src= "img/blackFig.png" alt="black"></td>
          <td class="green"><img class="img" src= "img/blackFig.png" alt="black"></td>
          <td class="white"></td>
          <td class="green"><img class="img" src= "img/blackFig.png" alt="black"></td>
          <td class="white"><img class="img" src= "img/blackFig.png" alt="black"></td>
          <td class="green"><img class="img" src= "img/blackFig.png" alt="black"></td>
          <td class="white"><img class="img" src= "img/blackFig.png" alt="black"></td>
          </tr>

          <tr>
            <td class="white"><div class="parent"><div class="let">a</div><div class="num">8</div><img class="img" src= "img/br.png" alt="black"></div></td>
            <td class="green"><div class="parent"><div class="let">b</div><img class="img" src= "img/bn.png" alt="black"></div></td>
            <td class="white"><div class="parent"><div class="let">c</div><img class="img" src= "img/bb.png" alt="black"></div></td>
            <td class="green"><div class="parent"><div class="let">d</div><img class="img" src= "img/bk.png" alt="black"></div></td>
            <td class="white"><div class="parent"><div class="let">e</div><img class="img" src= "img/bq.png" alt="black"></div></td>
            <td class="green"><div class="parent"><div class="let">f</div><img class="img" src= "img/bb.png" alt="black"></div></td>
            <td class="white"><div class="parent"><div class="let">g</div></div></td>
            <td class="green"><div class="parent"><div class="let">h</div><img class="img" src= "img/br.png" alt="black"></div></td>
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
