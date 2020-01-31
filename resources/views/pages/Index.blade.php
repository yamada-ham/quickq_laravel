@extends('layouts.main')
@section('content')
<div class="createQuestBox">
  <div class="inCreateQuestBox">
    <form action="" method='get' id="signup" name="signup">
      <div class="questTitleBox">
        <p>1.アンケートの内容を記述してください。</p>
        <textarea name="questTitle" class="questTitle" placeholder="例1:カレーにカボチャを入れる？&#13;&#10;例2:好きな種類の音楽は？" maxlength="200">
</textarea>
<span class="questTitleTtextLength">0/200</span>
      </div>

      <div class="choicesListBox clear">
        <p>2.アンケートの選択欄を作成してください。</p>
        <ul id="choicesList">

            <li ><input type="text" name="choice[]" value="" placeholder="未入力"></li>

        </ul>
        <div class="addRemoveChoiceBox">
          <label><input type="button" id="addChoiceInput" value="+"></label>
          <label><input type="button" id="removeChoiceInput" value="−"></label>
        </div>
      </div>

      <div class="createCategoryBox">
        <p>3.カテゴリーを選択してください。</p>
        <div class="parentInCreateCategoryBox">
          <select class="parentCategory">
            <option value="" selected="selected" disabled>選択</option>

          <option value=""></option>

          </select>
        </div>

        <div class="childInCreateCategoryBox hidden">
          <select name="category" class="childCategory" disabled>
            <option value="" selected="selected" disabled>選択</option>
                <option value="" data-val=""></option>
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
