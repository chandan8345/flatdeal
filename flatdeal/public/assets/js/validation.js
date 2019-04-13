$(document).on('click', '#done', function(){
    var title = $("#title").val();
    if (title != ""){
         $("#titlemsg").css('display','none');
    }else{
         $("#titlemsg").css('display','block');
    }
    var category = $("#category").val();
    if (category != 0){
         $("#categorymsg").css('display','none');
    }else{
         $("#categorymsg").css('display','block');
    }
    var rent = $("#rent").val();
    if (rent != "" || rent < 0){
         $("#rentmsg").css('display','none');
    }else{
         $("#rentmsg").css('display','block');
    }
    var size = $("#size").val();
    if (size != ""){
         $("#sizemsg").css('display','none');
    }else{
         $("#sizemsg").css('display','block');
    }
    var date = $("#date").val();
    if (date != ""){
         $("#datemsg").css('display','none');
    }else{
         $("#datemsg").css('display','block');
    }
    var areatype = $("#areatype").val();
    if (areatype != 0){
         $("#areatypemsg").css('display','none');
    }else{
         $("#areatypemsg").css('display','block');
    }
    var adsfor = $("#adsfor").val();
    if (adsfor != 0){
         $("#adsformsg").css('display','none');
    }else{
         $("#adsformsg").css('display','block');
    }
    var condition = $("#condition").val();
    if (condition != 0){
         $("#conditionmsg").css('display','none');
    }else{
         $("#conditionmsg").css('display','block');
    }
    var floor = $("#floorno").val();
    if (floor != ""){
         $("#floormsg").css('display','none');
    }else{
         $("#floormsg").css('display','block');
    }
    var details = $("#details").val();
    if (details != ""){
         $("#detailsmsg").css('display','none');
    }else{
         $("#detailsmsg").css('display','block');
    }
    var bedroom = $("#bedroom").val();
    if (bedroom != ""){
         $("#bedroommsg").css('display','none');
    }else{
         $("#bedroommsg").css('display','block');
    }
    var bath = $("#bath").val();
    if (bath != ""){
         $("#bathmsg").css('display','none');
    }else{
         $("#bathmsg").css('display','block');
    }
    var ranna = $("#ranna").val();
    if (ranna != ""){
         $("#rannamsg").css('display','none');
    }else{
         $("#rannamsg").css('display','block');
    }
    var baranda = $("#baranda").val();
    if (baranda != ""){
         $("#barandamsg").css('display','none');
    }else{
         $("#barandamsg").css('display','block');
    }
    var face = $("#face").val();
    if (face != 0){
         $("#facemsg").css('display','none');
    }else{
         $("#facemsg").css('display','block');
    }
    var division = $("#devision").val();
    if (division != 0){
         $("#devisionmsg").css('display','none');
    }else{
         $("#devisionmsg").css('display','block');
    }
    var city = $("#city").val();
    if (city != 0){
         $("#citymsg").css('display','none');
    }else{
         $("#citymsg").css('display','block');
    }
    var area = $("#area").val();
    if (area != 0){
         $("#areamsg").css('display','none');
    }else{
         $("#areamsg").css('display','block');
    }
    var sort = $("#sortaddress").val();
    if (sort != ""){
         $("#sortaddressmsg").css('display','none');
    }else{
         $("#sortaddressmsg").css('display','block');
    }
    var img = $("#image").val();
    if (img != ""){
         $("#imagemsg").css('display','none');
    }else{
         $("#imagemsg").css('display','block');
    }
    if(title != "" && image != "" && date != "" && rent != "" && rent >= 0 && category != 0 && size != "" && adsfor != 0 && areatype != 0 && condition != 0 && floor != "" && details != "" && bedroom >= 0 && bedroom !="" && ranna != "" && ranna >= 0 && baranda != "" && baranda >=0 && face != 0 && division != 0 && city !=0 && area != 0 && sort !=""){
        $("#confirmModal").modal('show');
        return false;
    }else{
        return false;
    }
    
});