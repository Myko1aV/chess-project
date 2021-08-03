function hideOrShow()
{
  let signUpArea = document.querySelector('.signUpArea');
  let signIn = document.getElementById('signIn');

  if(document.myForm.registerChecked.checked)
  {
    signUpArea.style.display = "inline";
    signIn.style.display = "none";
  }
  else
  {
    signUpArea.style.display = "none";
    signIn.style.display = "inline";

  }
}

let count = 0;

function startTimer()
{
  count++;
  if(count == 1)
  {
    let time = 600;
    let timer = document.getElementById('timer');
    let interval = setInterval(updateTimer, 1000);

    function updateTimer()
    {
      console.log(time);
      let minutes = Math.floor(time / 60);
      let seconds = time % 60;
      minutes = minutes < 10  ? "0" + minutes : minutes;
      seconds = seconds < 10  ? "0" + seconds : seconds;
      timer.innerHTML = `${minutes}:${seconds}`;
      time--;
      if(time < 0)
      {
        clearInterval(interval);
      }
    }
  }
}

let ctx = document.getElementById('myChart').getContext('2d');
let chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Queen', 'Rook', 'Bishop', 'Knight', 'King', 'Pawn'],
        datasets: [{
            label: 'Chess Figure',
            backgroundColor: '#e0a800',
            borderColor: '#e0a800',
            data: [2, 4, 4, 4, 2, 14]
        }]
    },

    // Configuration options go here
    options: {
    }
})

Chart.defaults.global.defaultFontColor = 'white';
