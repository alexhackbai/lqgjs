/**
 * Created with JetBrains WebStorm.
 * User: stevenming
 * Date: 13-9-13
 * Time: 下午9:14
 * To change this template use File | Settings | File Templates.
 */

$(function () {
   $('.leftNav>ul>li').click(function(){
        $(this).find('ul').show(10).end().siblings().find('ul').hide();
    });
});

$(function(){
// 先取得必要的元素並用 jQuery 包裝
// 再來取得 $block 的高度及設定動畫時間
    var $block = $('#abgneBlock'), $slides = $('ul.list', $block),$slide = $('ul.list','#abgneBlock'), _width = $block.width(), $li = $('li', $slides), _animateSpeed = 600,
// 加入計時器, 輪播時間及控制開關
        timer, _showSpeed = 3000, _stop = false;

// 產生 li 選項
    var _str = '';
    for(var i=0, j=$li.length;i<j;i++){
// 每一個 li 都有自己的 className = playerControl_號碼
        _str += '<li class="playerControl_' + (i+1) + '">'+(i+1) +'</li>';
    }

// 產生 ul 並把 li 選項加到其中
    var $playerControl = $('<ul class="playerControl"></ul>').html(_str).appendTo($slides.parent());

// 幫 li 加上 click 事件
    var $playerControlLi = $playerControl.find('li').click(function(){
        var $this = $(this);
        $this.addClass('current').siblings('.current').removeClass('current');

        clearTimeout(timer);
// 移動位置到相對應的號碼
        $slides.stop().animate({left: _width * $this.index() * -1}, _animateSpeed, function(){
// 當廣告移動到正確位置後, 依判斷來啟動計時器
            if(!_stop) timer = setTimeout(move, _showSpeed);
        });

        return false;
    }).eq(0).click().end();

// 如果滑鼠移入 $block 時
    $block.hover(function(){
// 關閉開關及計時器
        _stop = true;
        clearTimeout(timer);
    }, function(){
// 如果滑鼠移出 $block 時
// 開啟開關及計時器
        _stop = false;
        timer = setTimeout(move, _showSpeed);
    });

// 計時器使用
    function move(){
        var _index = $('.current').index();
        $playerControlLi.eq((_index + 1) % $playerControlLi.length).click();
    }
    $(".picBox").jCarouselLite({
        btnNext: ".roundIcomR",
        btnPrev: ".roundIcom",
        auto: 800,
        speed: 1000,
        visible:5
    });
});
