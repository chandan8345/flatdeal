$(document).ready(function(e){
    var navbarHeight=$('.navbar').outerHeight();
$('.scroll').click(function(e){
var linkHref=$(this).attr('href');
if(linkHref == '#category'){
$('html, body').animate({
scrollTop:$(linkHref).offset().top + 130
},1200);
}
if(linkHref == '#latest'){
$('html, body').animate({
scrollTop:$(linkHref).offset().top - 80
},1200);
}
var linkHref=$(this).attr('href');
if(linkHref == '#why'){
$('html, body').animate({
scrollTop:$(linkHref).offset().top - 80
},1200);
}
var linkHref=$(this).attr('href');
if(linkHref == '#contact'){
$('html, body').animate({
scrollTop:$(linkHref).offset().top - 80
},1200);
}
var linkHref=$(this).attr('href');
if(linkHref == '#home'){
$('html, body').animate({
scrollTop:$(linkHref).offset().top
},1200);
}
e.preventDefault();
});
});