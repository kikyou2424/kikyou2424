    //秒杀
    var timer=setInterval(function(){
        var time=new Date(2021,0,8,20,30,18)-(new Date());
        if(time<=0){
          clearInterval(timer);
          $('#buy').css({color:"#fff",backgroundColor:"#00a8ff"})
          return;
        }
        var day=Math.floor(time/1000/60/60/24);
        var hour=Math.floor((time-day*(1000*60*60*24))/1000/60/60);
        var minute=Math.floor((time-day*(1000*60*60*24)-hour*(1000*60*60))/1000/60);
        var second=Math.floor((time-day*(1000*60*60*24)-hour*(1000*60*60)-minute*(1000*60))/1000);
        $('.time p').text("倒计时 ："+day+" 天 "+hour+" 小时 "+minute+"分 "+second+" 秒");
      },1000);