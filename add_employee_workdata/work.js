
$(document).ready(function(){

	select2 = document.getElementById('select-emp');
	
  	$.ajax({
    	url: "emp_receive.php",
    	dataType: "JSON",
    	success: function(json){
        	for(var i=0;i<json.length;i++){
            	
            	var opt = document.createElement('option');
    			opt.value = json[i].employee_id ;
    			opt.innerHTML = json[i].employee_id ;
    			select2.appendChild(opt);

        	}

    	}
	});

	
});


$("#sub-class").click(function(){

	
	var emp = $('#select-emp').val();
	var weekno = $('#weekno').val();
	var workhours = $('#workhours').val();
	var path = "insert.php?emp="+emp+"&weekno="+weekno+"&workhours="+workhours;
	
	$.ajax({
    	url: path,
    	dataType: "html",
    	success: function(res){
        	alert(res);
    	}
	});
	


});


