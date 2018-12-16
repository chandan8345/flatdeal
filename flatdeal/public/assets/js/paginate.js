$(document).ready(function () {
  var rows=$('#datalist .chandan').length;
    console.log(rows);
    perpagepost=10;
    $("#datalist .chandan:gt(" +  (perpagepost - 1)  + ")").hide();
    var totalpages=Math.round(rows/perpagepost);
    $('.pagination').append("<li class='page-item current active'><a class='page-link' href='javascript:void(0)'>"+ 1 +"</a></li>");
    for(var i=2 ; i <= totalpages ; i++){
        $('.pagination').append("<li class='page-item current'><a class='page-link' href='javascript:void(0)'>"+ i +"</a></li>");
    }
    $('.pagination').append("<li class='page-item'><a class='page-link' href='javascript:void(0)'>Next</a></li>");
    
    
    $('.pagination li.current').on("click", function(){
        if($(this).hasClass("active")){
            return false;
        }
        else{
        var curentpage=$(this).index();
        $('.pagination li').removeClass("active");
        $(this).addClass("active");
        $("#datalist .chandan").hide();
        var grandtotal=perpagepost * curentpage;
        for(var i=grandtotal-perpagepost ; i < grandtotal ; i++ ){
            $("#datalist .chandan:eq(" +  i  + ")").show();
        }
        //alert('user clicked' + curentpage);
        }
    });
  //  console.log(totalpages);   
});