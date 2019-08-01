
$(document).ready(function(){

	select2 = document.getElementById('select-route');
	
  	$.ajax({
    	url: "route_receive.php",
    	dataType: "JSON",
    	success: function(json){
        	for(var i=0;i<json.length;i++){
            	
            	var opt = document.createElement('option');
    			opt.value = json[i].route_id;
    			opt.innerHTML = json[i].route_id;
    			select2.appendChild(opt);

        	}

    	}
	});

	
});


