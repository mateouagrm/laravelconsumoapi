        $(document).ready(function(){
          
            $("#btn-menu").hover(function(){
                $("#sideNav").toggleClass("showHalfMenu");
                         
                
            });
            
            $(".side-li").hover(function(){
                $("#sideNav").toggleClass("showFullMenu");
               $(".removeText").toggle();              
               
            });
          
      
        });