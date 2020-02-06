@extends('layouts.main')

@section('content')
  <div class="answerBox">
    <div class="inAnswerBox">
      <form action="" method="post">
        <input type="hidden" name="questTitle" value="">

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
          <p>Q.<br>(該当するものを一つお答えください)</p>
          <ul class="inAnswerRadioBox">
            <li><input type="radio" name="choice" class="answerRadio" id="answerRadio" value=""><label for="answerRadio" ></label></li>
          </ul>
        </div>

        <div class="errAnswerBox"><p></p></div>

        <div class="answerSubmitBox">
          <input type="submit" value="回答">
        </div>

        <input type="hidden" name="token" value="">
      </form>
    </div>
  </div>
@endsection
