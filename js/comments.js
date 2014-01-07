$(document).ready(function($) {
    // 异步评论翻页
    // 来自 孙华博客 http://sunhua.me/
	var comments = $("#comments"),
	navi = $('#comments .page-navigator'),
	comment_block = $("#comments .block.comment-block"),
	ajaxed = false;
	comments.on("click", ".page-navigator li a", function(e) {
		e.preventDefault();
		if($(this).parent().hasClass('current') || ajaxed == true) return;
		var _list = $('.comment-list'),
		url = $(this).attr("href").replace("#comments", "") + "?action=ajax_comments";
		$.ajax({
            url: url,
            beforeSend: function() {
                ajaxed = true;
                document.body.style.cursor = 'wait';
                $(comment_block).css({opacity: 0.7, filter: 'alpha(opacity=70)'});
                $(navi).html('<p style="text-align: center;">正在努力加载中, 请稍候...</p>');
            },
            success: function(data) {
                comments.html(data);
                document.body.style.cursor = 'auto';
                $(comments).css({opacity:1, filter:'alpha(opacity=100)'});
                $('html, body').animate({scrollTop: $(comments).offset().top - $('.navbar').height() - 10}, 'slow');
                ajaxed = false;
            }
        });
        return false;
    });
});

