/**
 * Created with JetBrains WebStorm.
 * User: stevenming
 * Date: 13-9-13
 * Time: 下午9:14
 * To change this template use File | Settings | File Templates.
 */

$(function () {
    $('#myTab a:first').tab('show');//初始化显示哪个tab

    $('#myTab a').click(function (e) {
        e.preventDefault();//阻止a链接的跳转行为
        $(this).tab('show');//显示当前选中的链接及关联的content
    });

    $('.lists li').hover(function(){
        $(this).addClass('active').find('.subListContent').removeClass('hide');
    },function(){
        $(this).removeClass('active').find('.subListContent').addClass('hide');
    });

    $('.lawyerLeftNavPane ul li').hover(function(){
        $(this).addClass('active').siblings().removeClass('active');
        $('.lawInViItem').eq($(this).index()).removeClass('hide').siblings().addClass('hide');
    });
})
