// JavaScript Document

//get base_url value
var base_url = $("#base_url").val();

$(".site_top_ads_item").hover(function(){
  $(this).children(".site_top_ads_hover_shadow").show();
}, function(){
  $(this).children(".site_top_ads_hover_shadow").hide();
});