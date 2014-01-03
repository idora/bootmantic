$(document).ready(function($){
    /*
    // 页面刷新后自动回到顶部, 这个按需选择吧
    $('html, body').animate({
        scrollTop: 0
    }, 800);
    */

    // 利用 data-scroll 属性，滚动到任意 dom 元素
    $.scrollto = function(scrolldom, scrolltime) {	
        $(scrolldom).click( function(){ 
            var scrolltodom = $(this).attr("data-scroll");
            $(this).addClass("active").siblings().removeClass("active");
            $('html,body').animate({
                scrollTop: $(scrolltodom).offset().top
            }, scrolltime);
            return false;
        }); 		
    };
    // 判断位置控制 返回顶部的显隐
    $(window).scroll(function() {
        if ($(window).scrollTop() > 700) {
            $("#back-to-top").fadeIn(800);
        } else {
            $("#back-to-top").fadeOut(800);
        }
    });
    // 启用
    $.scrollto("#back-to-top", 800);
 
    // 新窗口打开链接
    $(".post a").attr("target", "_blank");

    // 点击标签 收起/展开 内容
    $('.side .block .label').click(function () {
        $(this).siblings('.list').slideToggle("slow");
    });
    $('.main .block .comments').click(function () {
        $(this).siblings('.comment-list').slideToggle("slow");
    });
    $('.main .block .round-date').click(function () {
        $(this).siblings('.label').slideToggle("slow");
        $(this).siblings('.article-content').slideToggle("slow");
    });
});
