$(document).ready(function(){
	$.ajax({    
        type: "GET",
        url: "php/dropdown.php",             
        dataType: "JSON",   //expect html to be returned                
        success: function(response){
        	var data = response[0];
        	if(data){
                var len = data.length;
                var txt = "";
                if(len > 0){
                    var j =0;
                    for(var i=0;i<len;i++){
                    j = i+1; 
                    txt += "<tr><td><a href='php/review.php?id="+data[j]+"'>"+data[i]+"</a></td></tr>";
                    i = i+1;
                    }
                    if(txt != ""){
                        $(".electronics_data").append(txt);
                    }
                }
            }

            var data = response[1];
        	if(data){
                var len = data.length;
                var txt = "";
                if(len > 0){
                    for(var i=0;i<len;i++){
                    j = i+1; 
                    txt += "<tr><td><a href='php/review.php?id="+data[j]+"'>"+data[i]+"</a></td></tr>";
                    i = i+1;
                    }
                    if(txt != ""){
                        $(".men_data").append(txt);
                    }
                }
            }

            var data = response[2];
        	if(data){
                var len = data.length;
                var txt = "";
                if(len > 0){
                    for(var i=0;i<len;i++){
                    j = i+1; 
                    txt += "<tr><td><a href='php/review.php?id="+data[j]+"'>"+data[i]+"</a></td></tr>";
                    i = i+1;
                    }
                    if(txt != ""){
                        $(".women_data").append(txt);
                    }
                }
            }

            var data = response[3];
        	if(data){
                var len = data.length;
                var txt = "";
                if(len > 0){
                    for(var i=0;i<len;i++){
                    j = i+1; 
                    txt += "<tr><td><a href='php/review.php?id="+data[j]+"'>"+data[i]+"</a></td></tr>";
                    i = i+1;
                    }
                    if(txt != ""){
                        $(".homefurniture_data").append(txt);
                    }
                }
            }

            var data = response[4];
        	if(data){
                var len = data.length;
                var txt = "";
                if(len > 0){
                    for(var i=0;i<len;i++){
                    j = i+1; 
                    txt += "<tr><td><a href='php/review.php?id="+data[j]+"'>"+data[i]+"</a></td></tr>";
                    i = i+1;
                    }
                    if(txt != ""){
                        $(".sports_data").append(txt);
                    }
                }
            }

            var data = response[5];
        	if(data){
                var len = data.length;
                var txt = "";
                if(len > 0){
                    for(var i=0;i<len;i++){
                    j = i+1; 
                    txt += "<tr><td><a href='php/review.php?id="+data[j]+"'>"+data[i]+"</a></td></tr>";
                    i = i+1;
                    }
                    if(txt != ""){
                        $(".book_data").append(txt);
                    }
                }
            }

            
        }

    });

// CS
    $.ajax({    
        type: "GET",
        url: "php/main_cookie.php",             
        dataType: "JSON",   //expect html to be returned                
        success: function(response){
            var title = response[0];
            var category = response[1];
            var pid = response[2];
            title=title.split(' ').join('_');
            var img_path = "\ img/"+category+"/"+title+".jpg";
            // if(title&&category){
                // $(".last_viewed").append(txt)
                $("#lastview").attr('src', img_path);
                var txt = "";
                txt=txt+"<a href='php/review.php?id="+pid+"'><span id='cook_title'>"+title+"</span></a>";


                if(txt != ""){
                    $(".last_viewed").append(txt);
                }


            // }
        }

    });


});