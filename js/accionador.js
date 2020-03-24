$(".accordion-heading").click(function(){
    
   var contenido=$(this).next(".collapse");
      
   if(contenido.css("display")=="none"){ //open   
      contenido.slideDown(250);     
      $(this).addClass("open");

   }
   else{ //close    
      contenido.slideUp(250);
      $(this).removeClass("open");  
  }
              
});