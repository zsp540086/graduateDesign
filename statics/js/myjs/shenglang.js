$(function(){
    $(".x1").on("mouseover",function(){
        $(this).children(".yincang").show();
    })
    $(".yincang").on("mouseout",function(){
        $(this).hide();
    })

    //banner轮播
    var index=0;
    var t=setInterval(move,1000);
    function move(){
        index++;
        if(index==4){index=0}
        $(".banner img").css({"zIndex":"0"}).eq(index).css({"zIndex":"1"});
        $(".slider li").removeClass().eq(index).addClass("hot")
    }
    $(".banner").on("mouseover",function(){clearInterval(t)});
    $(".banner").on("mouseout",function(){t=setInterval(move,1000)});
    $(".slider li").on("mouseover",function(){
        $(".slider li").removeClass();
        $(this).addClass("hot");
        $(".banner img").css({"zIndex":"0"}).eq($(this).index()).css({"zIndex":"1"})
    })
    $(".slider li").on("mouseout",function(){index=$(this).index()})

    //向左的节点轮播
    var flag=true;
   var m=setInterval(Movel,2000);
    var kuan=$('.pro_list_index ul li').width();
    function Movel(){
        $(".pro_list_index ul").animate({left:-kuan},function(){
            $('.pro_list_index ul li').first().appendTo($(this));
            $(this).css({"left":"0"});flag=true;
        })
    }
    function Mover() {
        $(".pro_list_index ul").animate({left: kuan}, function () {
            $('.pro_list_index ul li').last().prependTo($(this));
            $(this).css({"left": "0"});flag=true;
        })
    }
    $(".pro_left").on("click",function(){if(flag){flag=false;Mover()}})
    $(".pro_right").on("click",function(){if(flag){flag=false;Movel()}})

    //基地风采轮播
    var n=setInterval(MOVE,4500);
    function MOVE(){
        $(".picli").animate({left:-$(".picli li").width()},700).delay(2000).animate({left:0},700);
    }
    $(".ad").on("mouseover",function(){clearInterval(n);$(".picli").clearQueue()})
    $(".ad").on("mouseout",function(){t=setInterval(MOVE,2000)})
    $(".uu li").last().on("mouseover",function(){$(".picli").animate({left:-$(".picli li").width()})})
    $(".uu li").first().on("mouseout",function(){$(".picli").animate({left:0})})
})