$(document).ready(function() {
  //jQuery code...
  var id_img = 1;
  var string_language1 = "";
  var string_language2 = "cocacola";
  
  //alert("Ready!");  
  //$("div.div_invisible").hover(function () {
  //  $(this).slideUp(1500);
  //});
  
  $(".g1").hover(function () {
    string_language1 = $(this).children().text();
    $(this).css("background", "url(/images/english.png)");
    $(this).css("background-size", "100% 100%");
    $(this).children().text("");
  });
  $(".g1").mouseleave(function () {
    $(this).css("background", "#888");
    $(this).children().text(string_language1);
  });
  $(".g2").hover(function () {
    string_language2 = $(this).children().text();
    $(this).css("background", "url(/images/spanish.gif)");
    $(this).css("background-size", "100% 100%");
    $(this).children().text("");
  });
  $(".g2").mouseleave(function () {
    $(this).css("background", "#888");
    $(this).children().text(string_language2);
  });
  
  function load_images() {
  
   setTimeout(
        function () 
        {
            if (id_img < 10) {
               id_img += 1;
            } else {id_img = 1;}
            $("body").css("background", "url(/images/"+id_img+".jpg)");
            $("body").css("background-color", "#FFF");
            $("body").css("background-repeat", "no-repeat");
            $("body").css("background-attachment", "fixed");
            $("body").css("background-size", "cover");
            load_images();
    }, 10000);
  }
  load_images();
    
  $("body").dblclick(function () {
    if (id_img < 10) {
        id_img += 1;
    } else {id_img = 1;}
    $(this).css("background", "url(/images/"+id_img+".jpg)");
    $(this).css("background-color", "#FFF");
    $(this).css("background-repeat", "no-repeat");
    $("body").css("background-attachment", "fixed");
    $(this).css("background-size", "cover");
  });  
  
  $("#img_home").mouseenter(function () {
    $(this).animate( { height: "+=8", width: "+=8" }, 250, function () {$(this).animate( { height: "-=8", width: "-=8" }, 250);});
  });
  $("#img_home").qtip({
    content: 'HOME/INICIO',
    position: {
      corner: {
         target: 'topLeft',
         tooltip: 'bottomRight'
      }
   },
   style: { 
      name: 'blue'
   },
   show: { delay: 250 }
  });
  $("#img_upload").qtip({
    content: 'UPLOAD/PUBLICAR',
    position: {
      corner: {
         target: 'topLeft',
         tooltip: 'bottomRight'
      }
   },
   style: { 
      name: 'blue'
   },
   show: { delay: 250 }
  });
  $("#img_upload").mouseenter(function () {
    $(this).animate( { height: "+=8", width: "+=8" }, 250, function () {$(this).animate( { height: "-=8", width: "-=8" }, 250);});  
  });
  
  //Para hacer el efecto GLOW, tengo pensado poner una imagen de fondo del dvi y hacerla parecer con cierto % de transparencia.

});
