$(document).ready(function(){
  $("#hide").click(function(){
    $(".jq").fadeOut(1000);
  });
  $("#show").click(function(){
    $(".jq").fadeIn(1000);
  });
  $("#move").click(function(){
$("#move").animate({"opacity": "0.5", "margin-left": "20px"}, 1000).animate({"opacity":"1","margin-left":"0px"}, 1000);

  })
});
