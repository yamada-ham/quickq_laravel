class Quickq{
  constructor(){
    this.disablReturn();
    this.drwer();
    this.choiceInputBtn();
    this.slide();
    this.greetInDrwer();
    this.questsLimitLength();
    this.createCategory();
    this.getTextareaLength();
  }
  disablReturn(){
    if($('input[type=submit]').length > 0){
      if( window.event.keyCode == 13 ){
          return false;
       }
    }
  }
  drwer(){
    if($("#menuBtn") != null){
      var menu = $('.drwerMenuBox');
    	var btn = $('#menubtn');

    		$('.overlay').prepend('<div class="btnCloseBox"><img src="./images/icon/btnClose.png"></div>');


    	btn.on('click',function(){
    		btn.addClass('drawer');
    		if($(this).hasClass('drawer')){
    			menu.stop().animate({left:'0px'});
    		  $('.overlay').css({display:'block'});
    		}

    	});
    	$('.btnCloseBox img').on('click',function(){
    		menu.stop().animate({left:'-250px'});
    		$('.overlay').css({display:'none'});
    	});
    	$('.overlay').on('click',function(){
    		menu.stop().animate({left:'-250px'});
    		$(this).css({display:'none'});
    	});
    }
  }

  choiceInputBtn(){
    if($("#addChoiceInput")[0] != null){
      let $choicesList = document.getElementById('choicesList');
      let $hiddenChoice = document.getElementById('hiddenChoice');

      document.getElementById('addChoiceInput').addEventListener('click',function(e){
        if($choicesList.children.length > 7){
          return;
        }
        let $li = document.createElement('li');
        let $clone = $hiddenChoice.cloneNode(true);
        $clone.setAttribute('type','text');
        $li.appendChild($clone);
        $choicesList.appendChild($li);
        $choicesList.lastElementChild.querySelector("input").focus();
      },false);

      document.getElementById('removeChoiceInput').addEventListener('click',function(e){
        if($choicesList.children.length < 3){
          return;
        }
        let $lastChoice = $choicesList.lastElementChild;
        $choicesList.removeChild($lastChoice);
        $choicesList.lastElementChild.querySelector("input").focus();
      });
    }
  }

  slide(){
    if($(".accordion_ul").length > 0){
      $(window).on("resize",()=>{
        if(window.innerWidth >= 767){
          location.reload();
          return;
        }
      })
      if(window.innerWidth >= 768){
        $('.accordion_ul ul').show();
        return;
      }
      $('.accordion_ul ul').hide();
        $('.accordion_ul h1').click(function(e){
          if($(this).hasClass('rotate225')){
            $(this).removeClass('rotate225');
          }else{
            $(this).addClass('rotate225');
          }
        $(this).next("ul").slideToggle();
      });
    }
  }

  createCategory(){
    if($(".childInCreateCategoryBox") != null){
    var $createCategoryBox = $('.childInCreateCategoryBox');
    var $childCategory = $('.childCategory');
    var original = $childCategory.html(); //後のイベントで、不要なoption要素を削除するため、オリジナルをとっておく

  //htmlが再読み込みされたときに状態を保持しておく
    if ($('.parentCategory').val() == "") {
      $childCategory.prop('disabled', false);
    } else {
      $childCategory.prop('disabled',true);
    }
    $('.parentCategory').change(function() {
      //選択された親のvalueを取得し変数に入れる
      var val1 = $(this).val();

    //削除された要素をもとに戻すため.html(original)を入れておく
      $childCategory.html(original).find('option').each(function() {
      var val2 = $(this).data('val'); //data-valの値を取得

      //valueと異なるdata-valを持つ要素を削除
        if (val1 != val2) {
          $(this).not(':first-child').remove();
        }
      });

    //親側のselect要素が未選択の場合、都道府県をdisabledにする
      if ($(this).val() == "") {
        $createCategoryBox.addClass('hidden');
        $childCategory.prop('disabled', true);
      } else {
        $createCategoryBox.removeClass('hidden');
        $childCategory.prop('disabled',false);
      }
    });
    }
  }
  greetInDrwer(){
    if($(".greet").length > 0){
      let greets = document.querySelectorAll('.greet');
      greets.forEach((greet)=>{
        let greetText = greet.textContent;
        if(greetText.length  > 14){
          greet.textContent=greetText.slice(0,14)+'...';
        }
      });
    }
  }
  questsLimitLength(){
    if($("ul.questLimitBox").length > 0){
      let quests = document.querySelectorAll('ul.questLimitBox li.newListBox div.inNewListBox ul li a');
      if(window.innerWidth >= 1199){
        quests.forEach((quest)=>{
          var questText = quest.textContent;
            if(questText.length > 33){
              quest.textContent=questText.slice(0,33)+'...';
            }
        });
      }else if(window.innerWidth >= 991){
        quests.forEach((quest)=>{
          var questText = quest.textContent;
            if(questText.length > 27){
              quest.textContent=questText.slice(0,27)+'...';
            }
        });
      }else if(window.innerWidth >= 767){
        quests.forEach((quest)=>{
          var questText = quest.textContent;
            if(questText.length > 20){
              quest.textContent=questText.slice(0,20)+'...';
            }
        });
      }else{
        quests.forEach((quest)=>{
          var questText = quest.textContent;
            if(questText.length > 30){
              quest.textContent=questText.slice(0,30)+'...';
            }
        });
      }
    }
  }
  getTextareaLength(){
    if($("div.questTitleBox > textarea.questTitle").length){
      if($(".childInCreateCategoryBox") != null){
        $("textarea.questTitle").on("keyup",(e)=>{
          let textLength = $("textarea.questTitle").val().length;
          $(".questTitleTtextLength").text(`${textLength}/200`);
        });
      }
    }
  }
}

$(function(){
  'use strict';
  let quickq = new Quickq();

});
