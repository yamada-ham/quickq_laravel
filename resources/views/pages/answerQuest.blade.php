@extends('layouts.main_chart')

@section('content')
  <div class="answerBox">
    <div class="inAnswerBox">
      @if($checkAnswer)
        <div class="isAnswered"><p>回答ありがとうございました。二度目の回答はできません</p></div>
        <div class="chartBox">
        <div class="questTitle"><p><span>アンケート内容：</span>@if(isset($quest->questTitle)) {{$quest->questTitle}} @endif</p></div>
          <div class="inChartBox">
            <h3>総合結果</h3>
            <canvas id="myChartPie" style="position: relative; height:60vh; width:100vw;"></canvas>
          </div>
        </div>
        <div class="linkTopCase"><p><a href="{{action('IndexController@get')}}">トップへ</a></p></div>
        <script>

        let colors = ['red','blue','yellow','green','pink','brown','orange','purple','black','gray'];

        var ctx = document.getElementById("myChartPie").getContext('2d');
          var myChartPie = new Chart(ctx, {
            type: 'pie',
            data: {
              labels: JSON.parse('@php echo json_encode($votesData[0]); @endphp'),
              datasets: [{
                backgroundColor: colors,
                data: JSON.parse('@php echo json_encode($votesData[1]); @endphp'),
              }]
            },
            options: {
                plugins: {
                  labels: {
                    position:'outside',
                    showActualPercentages: true,
                    outsidePadding: 4,
                    textMargin: 2
                }
              }
            }
          });
        </script>
      @else
      <form action="" method="post">
        @csrf
        <input type="hidden" name="questTitle" value="@if(isset($quest->questTitle)) {{$quest->questTitle}} @endif">
        <div class="parmanentQuestBox clear">
          <p>Q.あなたの年齢と性別をお答えください。</p>
          <div class="ageSelectBox"><select name = "age">
            <option selected disabled>年齢</option>
            <option value="00">10才未満</option>
            <option value="10">10代</option>
            <option value="20">20代</option>
            <option value="30">30代</option>
            <option value="40">40代</option>
            <option value="50">50代</option>
            <option value="60">60代</option>
            <option value="70">70代以上</option>
          </select></div>

          <div class="sexBox">
            <input type="radio" name="sex" value="男" id="man"><label for="man" class="man">男</label>
            <input type="radio" name="sex" value="女" id="woman"><label for="woman" class="woman">女</label>
          </div>
        </div><!-- parmanentQuestBox -->

        <div class="answerRadioBox">
          <p>Q.@if(isset($quest->questTitle)) {{$quest->questTitle}} @endif<br>(該当するものを一つお答えください)</p>
          <ul class="inAnswerRadioBox">
            @if(isset($choicesList))
            @for($i = 0; $i < ($quest->choicesNum);$i++)
            <li><input type="radio" name="choice" class="answerRadio" id="answerRadio{{$i}}" value="{{$choicesList[$i]}}"><label for="answerRadio" >{{$choicesList[$i]}}</label></li>
            @endfor
          @endif
          </ul>
        </div>

        <div class="errAnswerBox"><p></p></div>

        <div class="answerSubmitBox">
          <input type="submit" value="回答">
        </div>

        <input type="hidden" name="token" value="">
      </form>
      @endif
    </div>
  </div>
@endsection
