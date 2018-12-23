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
        $(".activerow").html(response);
        console.log(response);
        }
    });
}
function inactivepost(){
    $.ajax({
        type: "get",
        url: '/inactivepost',
        success:function(response){
        $(".inactiverow").html(response);
        console.log(response);
        }
    });
}
function soldpost(){
    $.ajax({
        type: "get",
        url: '/soldpost',
        success:function(response){
        $(".soldrow").html(response);
        console.log(response);
        }
    });
}