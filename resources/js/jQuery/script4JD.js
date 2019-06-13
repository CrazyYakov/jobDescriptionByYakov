for (let index = 0; index < 9; index++) {

    $(document).ready(function(){        
        $("#d"+index).click(function(){
          $("#dj"+index).show();
        });
        $("#d"+index).on(function(){
          $("p").hide();
        });
      }); 
    
}
