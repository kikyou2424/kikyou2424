function boxleft2() {
    $('.showProduct').animate({ left: 0 });
    $('#boxleft2').css('display', 'none');
    $('#boxright2').css('display', 'block');
    $('.pagination2>span').css('background', '#cdccca');
    $('.pagination2>span').eq(0).css('background', '#0a83d6');
    $('.NewProduct>div').css('display', 'none');
    $('.NewProduct>div').eq(1).css('display', 'block');
}

function boxright2() {
    $('.showProduct').animate({ left: -1210 })
    $('#boxright2').css('display', 'none');
    $('#boxleft2').css('display', 'block');
    $('.pagination2>span').css('background', '#cdccca');
    $('.pagination2>span').eq(1).css('background', '#0a83d6');
    $('.NewProduct>div').css('display', 'none');
    $('.NewProduct>div').eq(0).css('display', 'block');
}
$('#boxleft2').on('click', boxleft2)
$('#boxright2').on('click', boxright2)
$('.pagination2>span').eq(0).on('mouseover', boxleft2)
$('.pagination2>span').eq(1).on('mouseover', boxright2)