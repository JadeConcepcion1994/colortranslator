//ajax call to php for hexa color
$(document).ready(function(){
  
    //onclick
    $(document).on("click", ".btn-primary", function(){
        if($('#color').val().length === 0 ){
            alert("Please enter a color");
        }else{
            hexacolor();
        }
        
    });
    //on enter
    $('#color').keypress(function (e) {
        var key = e.which;
        if(key == 13)
         {
            if($('#color').val().length === 0 ){
                alert("Please enter a color");
            }else{
                hexacolor();
            }
         }
    });   
    
    //function ajax call
    function hexacolor(){
        var color = $('#color').val();
        $.ajax({
            url: 'function/search.php',
            method: 'POST',
            data:{
                action: 'searchColor',
                color:color
            },
            //dataType: 'json',
            success: function(data){
                console.log(data);
                $("#color_hexa").text(data);
                $("#output").css("background-color", data);
                $("#color_hexa").css("color", "white");

                if(data == "Color not found"){
                    $("#output").css("background-color", "white");
                    $("#color_hexa").css("color", "red");
                }
            }
    
        });
    }
   

});