<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<title>{{Config('const.QUICKQ.name')}}</title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
{{-- <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script> --}}
</head>
<body>
@include('subviews.sub_header')
<div class="topImgBox">
  <div class="inTopImgBox">
    <img src = "{{asset('image')}}/quickq_title.png">
  </div>
</div>
<ul class="questLimitBox">
  <li class="newListBox">
    <div class="inNewListBox">
      <div><h2>最新アンケート</h2></div>
      {{-- <ul>
        @foreach($popularLimit5 as $quest)
          <li><a>{{$quest->getQuestTitle()}}</a></li>
        @endforeach
      </ul> --}}
    </div>
  </li><!-- newListBox -->
  <li class="newListBox">
    <div class="inNewListBox">
      <div><h2>人気アンケート</h2></div>
      <ul>

      </ul>
    </div>
  </li><!-- newListBox -->
</ul>
<div class="categoryBox">
    <div class="inCategoryBox">
    <ul class="accordion_ul clear">
      @foreach($categories as $key => $arr)
        <li class="accordion_li">
          <section>
          <h1>{{$key}}</h1>
          <ul>
            @foreach($arr as $category)
              <li><a href="">{{$category}}</a></li>
            @endforeach
          </ul>
          </section>
      </li>
    @endforeach
    </ul>
  </div>
</div><!-- categoryBox -->


<div class='createBox'>
  <p><a href="createQuest.php">+</a></p>
</div>
@include('subviews.sub_footer')


{{-- <script type="text/javascript" src="script.js"></script> --}}
</body>
</html>
