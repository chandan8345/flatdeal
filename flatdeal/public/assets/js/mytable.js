function statistics(){
    $.ajax({
        type: "get",
        url: '/statistics',
        success:function($result){
            var result=$result;
            var obj = JSON.parse(result);
            $("#ta").html(obj.totalactive + " Ads Live");
            $("#ti").html(obj.totalinactive + " Ads Unapproved");
            $("#ts").html(obj.totalsold + " Ads Sold Out");
        }
});
} 
   initialize();
$('.activepost').on("click",function(){
    $('.tableinactive').hide();
    $('.tablesold').hide();
    $('.tableactive').show();
    $('.act').css('background-color', 'whitesmoke');
    $('.sell').css('background-color', 'white');
    $('.inact').css('background-color', 'white');
    activepost();
});
$('.inactivepost').on("click",function(){
    $('.tableinactive').show();
    $('.tableactive').hide();
    $('.tablesold').hide();
    $('.inact').css('background-color', 'whitesmoke');
    $('.sell').css('background-color', 'white');
    $('.act').css('background-color', 'white');
    inactivepost();
});
$('.sold').on("click",function(){
    $('.tableinactive').hide();
    $('.tableactive').hide();
    $('.tablesold').show();
    $('.sell').css('background-color', 'whitesmoke');
    $('.act').css('background-color', 'white');
    $('.inact').css('background-color', 'white');
    soldpost();
});
function initialize(){
    $('.tableinactive').hide();
    $('.tablesold').hide();
    $('.tableactive').show();
    $('.act').css('background-color', 'whitesmoke');
    $('.sell').css('background-color', 'white');
    $('.inact').css('background-color', 'white');
    activepost();
}
function activepost(){
    $.ajax({
        type: "get",
        url: '/activepost',
        success:function(response){
        if(response != "null"){
            $(".tableactive thead tr").show();
        statistics();
        $(".activerow").html(response);
        }else{
            statistics();
        $('.tableactive tbody tr').remove();
        $(".tableactive thead tr").hide();
        }
    }
    });
}
function inactivepost(){
    $.ajax({
        type: "get",
        url: '/waitingpost',
        success:function(response){
        if(response != ""){
            $(".tableinactive thead tr").show();
        statistics();
        $(".inactiverow").html(response);
        }else{
            statistics();
        $('.tableinactive tbody tr').remove();
        $(".tableinactive thead tr").hide();
        }
    }
    });
}
function soldpost(){
    $.ajax({
        type: "get",
        url: '/soldpost',
        success:function(response){
        if(response != "null"){
            $(".tablesold thead tr").show();
        statistics();
        $(".soldrow").html(response);
        }else{
            statistics();
            $('.tablesold tbody tr').remove();
            $(".tablesold thead tr").hide();
            }
    }
    });
}