// comp
$(function(){
$("#btnAddComp").click(function(){
$("#lstcomp1 > option:selected").each(function(){
$(this).remove().appendTo("#lstcomp2");

});
});

$("#btnDelComp").click(function(){
$("#lstskill2 > option:selected").each(function(){

$(this).remove().appendTo("#lstcomp1");
});
$("#lstcomp2 > option:selected").each(function(){
$(this).remove().appendTo("#lstcomp1");
});
});
});

