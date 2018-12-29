function statistics(){
    $.ajax({
        type: "get",
        url: '/usersstatistics',
        success:function($result){
            var result=$result;
            var obj = JSON.parse(result);
            $("#ta").html(obj.totalactive + " Active Users");
            $("#ti").html(obj.totalinactive + " Users Unapproved");
            $("#ts").html(obj.totalsold + " Users Expired");
        }
});
} 
   initialize();
$('.activeusers').on("click",function(){
    $('.tableactiveusers').show();
    $('.tableinactiveusers').hide();
    $('.tableexpiredusers').hide();
    $('.act').css('background-color', 'whitesmoke');
    $('.sell').css('background-color', 'white');
    $('.inact').css('background-color', 'white');
    activeusers();
});
$('.inactiveusers').on("click",function(){
    $('.tableinactiveusers').show();
    $('.tableactiveusers').hide();
    $('.tableexpiredusers').hide();
    $('.inact').css('background-color', 'whitesmoke');
    $('.sell').css('background-color', 'white');
    $('.act').css('background-color', 'white');
    inactiveusers();
});
$('.expiredusers').on("click",function(){
    $('.tableinactiveusers').hide();
    $('.tableactiveusers').hide();
    $('.tableexpiredusers').show();
    $('.sell').css('background-color', 'whitesmoke');
    $('.act').css('background-color', 'white');
    $('.inact').css('background-color', 'white');
    expiredusers();
});
function initialize(){
    $('.tableinactiveusers').hide();
    $('.tableexpiredusers').hide();
    $('.tableactiveusers').show();
    $('.act').css('background-color', 'whitesmoke');
    $('.sell').css('background-color', 'white');
    $('.inact').css('background-color', 'white');
    activeusers();
}
function activeusers(){
    $.ajax({
        type: "get",
        url: '/activeusers',
        success:function(response){
        if(response != ""){
        $(".tableactiveusers thead tr").show();
        statistics();
        $(".activerow").html(response);
        }else{
        statistics();
        $(".tableactiveusers thead tr").hide();
        $(".tableactiveusers tbody tr").remove();
        }
    }
    });
}
function inactiveusers(){
    $.ajax({
        type: "get",
        url: '/waitingusers',
        success:function(response){
        if(response != ""){
        $(".tableinactiveusers thead tr").show();
        statistics();
        $(".inactiverow").html(response);
        }else{
            statistics();
            $(".tableinactiveusers thead tr").hide();
        $(".tableinactiveusers tbody tr").remove();
        }
    }
    });
}
function expiredusers(){
    $.ajax({
        type: "get",
        url: '/expiredusers',
        success:function(response){
        if(response != ""){
            $(".tableexpiredusers thead tr").show();
        statistics();
        $(".expiredrow").html(response);
        }else{
            statistics();
            $(".tableexpiredusers thead tr").hide();
            $(".tableexpiredusers tbody tr").remove();
            }
    }
    });
}