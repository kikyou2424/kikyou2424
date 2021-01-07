// 轮播图js代码

var width1 = parseInt($('.active_main').css('width'));
var boxleft1 = parseInt($('#showimgbox1').css('left'));
var pic1 = 0;
light1(pic1);
// 左側按鈕
$('#boxleft1').on('click', function() {
    if (pic1 == 0) {
        pic1 = 3
        $('#showimgbox1').css('left', -width1 * 3);
    };
    pic1--;
    $('#showimgbox1').stop().animate({
        left: -width1 * pic1
    })
    light1(pic1);
})

// 右側按鈕
var showimg1 = function() {
    if (pic1 == 3) {
        pic1 = 0;
        $('#showimgbox1').css('left', 0);
    };
    pic1++;
    $('#showimgbox1').stop().animate({
        left: -width1 * pic1
    })
    light1(pic1);
}
$('#boxright1').on('click', function() {
    showimg1();
})

//底部轮播按钮功能
$('.pagination1>span').on('mouseover', function() {
    if (pic1 == 3) {
        pic1 = 0;
        $('#showimgbox1').css('left', 0);
    } else {
        pic1 = $(this).index();
        $('#showimgbox1').stop().animate({
            left: -width1 * pic1
        })
    }
    light1(pic1);
})

function light1(pic1) {
    if (pic1 == 3) {
        pic1 = 0;
        $('#showimgbox1').css('left', 0);
    }
    $('.pagination1>span').css('background', '#cdccca');
    $('.pagination1>span').eq(pic1).css('background', '#0a83d7');
}

//定时轮播
var showtime1 = setInterval(function() {
    showimg1();
}, 2000)

//进入时取消自动轮播
$('.active_main').on('mouseover', function() {
    clearInterval(showtime1);
})

//出来时进行轮播
$('.active_main').on('mouseout', function() {
    showtime1 = setInterval(function() {
        showimg1();
    }, 3000)
})

//窗口发生变化时
$(window).on('resize', function() {
    width1 = parseInt($('.active_main').css('width'));
    $('#showimgbox1').css('left', -width1 * pic1);
})