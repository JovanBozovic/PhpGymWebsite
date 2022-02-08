var nizId=[];
var nizDaBudeAdmin=[];
var nizDaNeBudeAdmin=[];
$(".is_admin").change(function(){

  let id=$(this).parent().prev().prev().prev().prev().prev().prev().html();
  if ($(this).prop("checked") && !nizDaBudeAdmin.includes(id) && !nizDaNeBudeAdmin.includes(id)) {
    nizDaBudeAdmin.push(id)

  }else if(!$(this).prop("checked") && nizDaBudeAdmin.includes(id) && !nizDaNeBudeAdmin.includes(id)) {
    nizDaBudeAdmin.pop(id)
;
  }else if (!$(this).prop("checked") && !nizDaNeBudeAdmin.includes(id)) {

    nizDaNeBudeAdmin.push(id)
  }else if ($(this).prop("checked") && nizDaNeBudeAdmin.includes(id)) {

    nizDaNeBudeAdmin.pop(id)
  }

})
$("#formica").click(function(e){
  e.preventDefault();
  var jsonStringDaBudeAdmin=JSON.stringify(nizDaBudeAdmin);
  var jsonStringDaNeBudeAdmin=JSON.stringify(nizDaNeBudeAdmin);
  $.ajax({
    method:"POST",
    url:"obrada_korisnika.php",
    dataType:"JSON",
    data:{nizDaBudeAdmin:jsonStringDaBudeAdmin,nizDaNeBudeAdmin:jsonStringDaNeBudeAdmin},
    error:function(error,xhr){
      console.log(error);
      console.log(xhr);
    }
  })
})
