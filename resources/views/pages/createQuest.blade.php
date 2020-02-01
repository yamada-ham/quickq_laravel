@extends('layouts.main')
@section('content')
<div class="createQuestBox">
  <div class="inCreateQuestBox">
    <form action="" method='POST' id="signup" name="signup">
      @csrf
      <div class="questTitleBox">
        <p>1.アンケートの内容を記述してください。</p>

        @if($errors->has('questTitle'))
        <div class="errCreateQuestBox">
        <p class='err'>{{$errors->first('questTitle')}}</p></div>
      @endif
        <textarea name="questTitle" class="questTitle" placeholder="例1:カレーにカボチャを入れる？&#13;&#10;例2:好きな種類の音楽は？" maxlength="200">{{old('questTitle')}}</textarea>
<span class="questTitleTtextLength">0/200</span>

      </div>

      <div class="choicesListBox clear">
        <p>2.アンケートの選択欄を作成してください。</p>
        @if($errors->has('choice.*'))
        <div class="errCreateQuestBox">
          <p class='err'>{{$errors->first('choice.*')}}</p>
        </div>
        @endif

        <ul id="choicesList">
            <li ><input type="text" name="choice[]" value="{{old('choice.0')}}" placeholder="未入力"></li>
        </ul>


        <div class="addRemoveChoiceBox">
          <label><input type="button" id="addChoiceInput" value="+"></label>
          <label><input type="button" id="removeChoiceInput" value="−"></label>
        </div>

      </div>

      <div class="createCategoryBox">
        <p>3.カテゴリーを二つ選択してください。</p>
        @if($errors->has('childCategory'))
        <div class="errCreateQuestBox">
          <p class='err'>{{$errors->first('childCategory')}}</p>
        </div>
        @endif
        <div class="parentInCreateCategoryBox">
          <select name="parentCategory" class="parentCategory">
            <option value="" selected="selected" disabled>選択</option>
            @foreach($categories as $key => $arr)
              <option value="{{$key}}">{{$key}}</option>
            @endforeach
          </select>
        </div>

        <div class="childInCreateCategoryBox">
          <select name="childCategory" class="childCategory" disabled>
            <option value="" selected="selected" disabled>選択</option>
            @foreach($categories as $key => $arr)
              @foreach($arr as $val)
                <option value="{{$val}}" data-val="{{$key}}">{{$val}}</option>
              @endforeach
            @endforeach
          </select>
        </div>
      </div>
      <div class="errCreateQuestBox">
        <p class="err"></p>
        <p class="err"></p>
      </div>

      <p><input type="hidden" name="userId" value=""></p>

      <div class="createQuestSubmitBox">
        <input type="submit" value="作成">
      </div>
    </form>
  </div>
      <input id = 'hiddenChoice'type="hidden" name="choice[]" value="" placeholder="未入力">
</div>
@endsection
