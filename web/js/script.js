$(document).ready(function() {
  //jQuery code...
  
  //alert("Ready!");
  var id_img = 1;
  
  //$("div.div_invisible").hover(function () {
  //  $(this).slideUp(1500);
  //});
  
  function load_images() {
  
   setTimeout(
        function () 
        {
            if (id_img < 10) {
               id_img += 1;
            } else {id_img = 1;}
            $("body").css("background", "url(../images/"+id_img+".jpg)")
            $("body").css("background-color", "#FFF");
            $("body").css("background-repeat", "no-repeat");
            $("body").css("background-size", "cover");
            load_images();
    }, 10000);
  }
  load_images();
    
  $("body").dblclick(function () {
    if (id_img < 10) {
        id_img += 1;
    } else {id_img = 1;}
    $(this).css("background", "url(../images/"+id_img+".jpg)");
    $(this).css("background-color", "#FFF");
    $(this).css("background-repeat", "no-repeat");
    $(this).css("background-size", "cover");
  });
  
  //Para hacer el efecto GLOW, tengo pensado poner una imagen de fondo del dvi y hacerla parecer con cierto % de transparencia.

});
