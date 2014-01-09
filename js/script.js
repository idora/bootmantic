$(document).ready(function($) {
    // 返回顶部
    $("#back-to-top").click(function(){ 
        var scrolltodom = $(this).attr("data-scroll");
        $('html, body').animate({
            scrollTop: $(scrolltodom).offset().top
        }, 800);
        return false;
    });
    // 判断位置控制 返回顶部的显隐
    $(window).scroll(function() {
        if ($(window).scrollTop() > 700) {
            $("#back-to-top").fadeIn(800);
        } else {
            $("#back-to-top").fadeOut(800);
        }
    });

    // 新窗口打开链接
    $(".post a").attr("target", "_blank");

    // Ctrl + Enter 提交回复
    $('#comment-content').keydown(function(event) {
        if (event.ctrlKey && event.keyCode == 13 || event.keyCode == 10) {
            $('#comment-submit').click();
            return false;
        }
    });

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

    $('.recent-comments .item a').click(function () {
        $(this).attr('href', $(this).attr('href').replace('#', '?anchor='));
        return true;
    });
});
