$(document).ready(function() {
  //jQuery code...
  var id_img = 1;
  var string_language1 = "";
  var string_language2 = "";
    
  // start 'Hover' y 'mouseleave' de las banderas de idiomas
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
  // end 'Hover' y 'mouseleave' de las banderas de idiomas
  
  // start Load background images 
  // Aqui PREcargamos la imagen para que cuando se muestre como fondo, se cargue mas fluidamente.
  heavyImage = new Image(); 
  heavyImage.src = "/images/"+(id_img+1)+".jpg"; 
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
            $("body").css("-moz-background-size", "cover");
            $("body").css("-webkit-background-size", "cover");
            // Aqui PREcargamos la imagen de nuevo para que cuando se muestre como fondo, se cargue mas fluidamente.
            if(id_img == 10) {heavyImage = new Image(); heavyImage.src = "/images/"+(1)+".jpg";} else {
                              heavyImage = new Image(); heavyImage.src = "/images/"+(id_img+1)+".jpg";}
            load_images();
    }, 40000);
  }
  load_images();
  // end Load background images
    
  // start QTIP
  $("#a_home").qtip({
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
   show: { delay: 200 }
  });
  $("#a_upload").qtip({
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
   show: { delay: 200 }
  });
  // end QTIP
  
  // start Animacion de los botones HOME y UPLOAD:
  $("#img_upload").mouseenter(function () {
    $(this).animate( { height: "+=8", width: "+=8" }, 250, function () {$(this).animate( { height: "-=8", width: "-=8" }, 250);});  
  });
  $("#img_home").mouseenter(function () {
    $(this).animate( { height: "+=8", width: "+=8" }, 250, function () {$(this).animate( { height: "-=8", width: "-=8" }, 250);});
  });
  // end Animacion de los botones HOME y UPLOAD
  
  // start AJAX
  $("div.content h1 a").each(function () {
		var href = $(this).attr("href");
		href = href.replace("show", "showAjax");
		$(this).qtip({
		   content: {
		      url: href,
		      method: 'get'
		   },
           position: {
            corner: {
                target: 'topRight',
                tooltip: 'leftMiddle'
            }
           },
		   style: { name: 'red', tip: true, width: { min: 682 } },
		   show: 'mouseover',
		   hide: 'mouseout'
		});
	} );
    // end AJAX
      
      
      
      
      
      
  // **************************** Codigo de prueba o sin utilizar: ****************************
  
  //alert("Ready!");
   
  /*
  $("div.div_invisible").hover(function () {
    $(this).slideUp(1500);
  });
  */
  
  //Para hacer el efecto GLOW, tengo pensado poner una imagen de fondo del dvi y hacerla parecer con cierto % de transparencia.
    
   /*   
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
  */
  /*
  $("div.header").dblclick(function () {
        
    for(id_img; id_img < num_of_backgrounds; id_img++) {
        if ($("#background"+id_img).css("z-index") == -1) {
            var j = id_img;
            j++;
            if (j > num_of_backgrounds) {
                j = 1;
            } // END inside if
            var new_zIndex = $("div#background"+j).css("z-index");
            $("div#background"+j).css("z-index", -1);
            $("div#background"+id_img).css("z-index", new_zIndex);
            break;
        } // END outside if
    } // END for
    alert(id_img);
    alert(j);
  });  
    */
});
