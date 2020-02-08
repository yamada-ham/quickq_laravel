@extends('layouts.main_chart')

@section('content')
<div class="questAnalysisBox">
<div class="inQuestAnalysisBox">
  <div class="questTitle"><p><span>アンケート内容：</span></p></div>
  <div class="chartBox">
  <div class="inChartBox">
    <h3>総合結果</h3>
    <canvas id="myChartPie" style="position: relative; height:54vh; width:100vw;"></canvas>
    <script>

    let colors = ['red','blue','yellow','green','pink','brown','orange','purple','black','gray'];

    var ctx = document.getElementById("myChartPie").getContext('2d');
      var myChartPie = new Chart(ctx, {
        type: 'pie',
        data: {
          labels: JSON.parse('@php echo ($votesData[0]); @endphp'),
          datasets: [{
            backgroundColor: colors,
            data: JSON.parse('@php echo ($votesData[1]); @endphp'),
          }]
        },
        options: {
            plugins: {
              labels: {
                position:'outside',
                showActualPercentages: true,
                outsidePadding: 8,
                textMargin: 2,
            }
          }
        }
      });
    </script>
  </div>
  </div>

  <div class="chartBox">
  <div class="inChartBox">
    <h3>年齢別</h3>
  <canvas id="myChart" style="position: relative; height:70vh; width:100vw;"></canvas>
  </div>
  </div>
  <script>

  var ctx = document.getElementById("myChart").getContext('2d');

  ageVotes = JSON.parse('@php echo ($votesData[2]); @endphp');


    var getdatasets = [];
    var num = 0;
    for(key in ageVotes){
      getdatasets.push( {label:key,data:ageVotes[key],backgroundColor:colors[num]});
      num++;
    }
  var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
      labels: ["10才未満", "10代", "20代", "30代", "40代", "50代", "60代","70才以上"],
      datasets: getdatasets ,
    },
    options: {
        plugins: {
          labels: {
            fontSize:0,
        }
      },
      scales: {
        xAxes: [{
          ticks: {
              fontSize: 18,
              stepSize: 1,//軸間隔
          },
        }],
        yAxes: [{                         //x軸設定
          display: true,                //表示設定
          barPercentage: 1,           //棒グラフ幅
          categoryPercentage: 1,      //棒グラフ幅
      }],
      }
    }
  });
  </script>
  <div class="chartBox">
  <div class="inChartBox">
    <h3>男性限定</h3>
  <canvas id="myChartDoughnutMan" style="position: relative; height:60vh; width:100vw;"></canvas>
  </div>
  </div>
  <script>
  var ctx = document.getElementById("myChartDoughnutMan").getContext('2d');
  var myChartDoughnutMan = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: JSON.parse('@php echo ($votesData[0]); @endphp'),
      datasets: [{
        backgroundColor: colors,
        data: JSON.parse('@php echo ($votesData[3]); @endphp')
      }]
    },
    options: {
        plugins: {
          labels: {
            position:'outside',
            showActualPercentages: true,
            outsidePadding: 4,
            textMargin: 4
        }
      }
    }
  });
  </script>


  <div class="chartBox">
  <div class="inChartBox">
    <h3>女性限定</h3>
  <canvas id="myChartDoughnutWoman" style="position: relative; height:60vh; width:100vw;"></canvas>
  </div>
  </div>
  <script>
  var ctx = document.getElementById("myChartDoughnutWoman").getContext('2d');
  var myChartDoughnutWoman = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: JSON.parse('@php echo ($votesData[0]); @endphp'),
      datasets: [{
        backgroundColor: colors,
        data: JSON.parse('@php echo ($votesData[3]); @endphp')
      }]
    },
    options: {
        plugins: {
          labels: {
            position:'outside',
            showActualPercentages: true,
            outsidePadding: 4,
            textMargin: 4
        }
      }
    }
  });
  </script>
</div>
</div>



@endsection
