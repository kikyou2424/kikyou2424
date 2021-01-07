 var newsScroll = document.querySelectorAll('.news-scroll');
 var newsItem = document.querySelector('.news-item-con');

 function newScroll() {
     return setInterval(function() {
         var scrollTop1 = parseInt(newsScroll[0].offsetTop);
         var scrollTop2 = parseInt(newsScroll[1].offsetTop);
         if (scrollTop1 <= -360) {
             scrollTop1 = 360;
         }
         if (scrollTop2 <= -360) {
             scrollTop2 = 360;
         }
         newsScroll[0].style.top = scrollTop1 - 2 + 'px';
         newsScroll[1].style.top = scrollTop2 - 2 + 'px';
     }, 50);
 }
 var scrollTime = newScroll();
 newsItem.onmouseover = function() {
     clearInterval(scrollTime);
 }
 newsItem.onmouseout = function() {
     scrollTime = newScroll()
 }




 // //滚动动画1
 // $('.newsScroll1();1').stop().animate({
 //     top: -360
 // }, 15000, 'linear', function() {
 //     newsScroll1();
 // })

 // var newsScroll1 = async function() {
 //     await new Promise((resolve) => {
 //         $('.news-scroll1').css('top', 360);
 //         resolve();
 //     })
 //     await new Promise(() => {
 //         $('.news-scroll1').stop().animate({
 //             top: -360
 //         }, 30000, 'linear', function() {
 //             newsScroll1();
 //         })
 //     })
 // }

 // //滚动动画2
 // $('.news-scroll2').stop().animate({
 //     top: -360
 // }, 30000, 'linear', function() {
 //     newsScroll2();
 // })

 // var newsScroll2 = async function() {
 //         await new Promise((resolve) => {
 //             $('.news-scroll2').css('top', 360);
 //             resolve();
 //         })
 //         await new Promise(() => {
 //             $('.news-scroll2').stop().animate({
 //                 top: -360
 //             }, 30000, 'linear', function() {
 //                 newsScroll2();
 //             })
 //         })
 //     }
 //     //移动到目标停止滚动
 // $('#news-box').on('mouseover', function() {
 //     $('.news-scroll').stop();
 // })
 // $('#news-box').on('mouseout', function() {

 // })