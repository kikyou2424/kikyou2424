// 轮播图js代码

var width = parseInt($('.slideshow').css('width'));
var boxleft = parseInt($('#showimgbox').css('left'));
var pic = 0;
light(pic);
// 左側按鈕
$('#boxleft').on('click', function() {
    if (pic == 0) {
        pic = 3
        $('#showimgbox').css('left', -width * 3);
    };
    pic--;
    $('#showimgbox').stop().animate({
        left: -width * pic
    })
    light(pic);
})

// 右側按鈕
var showimg = function() {
    if (pic == 3) {
        pic = 0;
        $('#showimgbox').css('left', 0);
    };
    pic++;
    $('#showimgbox').stop().animate({
        left: -width * pic
    })
    light(pic);
}
$('#boxright').on('click', function() {
    showimg();
})

//底部轮播按钮功能
$('.pagination>span').on('mouseover', function() {
    if (pic == 3) {
        pic = 0;
        $('#showimgbox').css('left', 0);
    } else {
        pic = $(this).index();
        $('#showimgbox').stop().animate({
            left: -width * pic
        })
    }
    light(pic);
})

function light(pic) {
    if (pic == 3) {
        pic = 0;
        $('#showimgbox').css('left', 0);
    }
    $('.pagination>span').css('background', '#cdccca');
    $('.pagination>span').eq(pic).css('background', '#0a83d7');
}

//定时轮播
var showtime = setInterval(function() {
    showimg();
}, 2000)

//进入时取消自动轮播
$('.slideshow').on('mouseover', function() {
    clearInterval(showtime);
})

//出来时进行轮播
$('.slideshow').on('mouseout', function() {
    showtime = setInterval(function() {
        showimg();
    }, 2000)
})

//窗口发生变化时
$(window).on('resize', function() {
    width = parseInt($('.slideshow').css('width'));
    $('#showimgbox').css('left', -width * pic);
})