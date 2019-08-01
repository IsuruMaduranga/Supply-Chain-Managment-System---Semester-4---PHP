
var table=document.getElementsByTagName("table")[0];


$(document).ready(function(){
	
  	$.ajax({
    	url: "order_receive.php",
    	dataType: "JSON",
    	success: function(json){
				
		
        	for(var i=0;i<json.length;i++){
            	
            	var newRow=table.insertRow(table.rows.length);
	
				var cell1=newRow.insertCell(0);
				var cell2=newRow.insertCell(1);
				var cell3=newRow.insertCell(2);
				var cell4=newRow.insertCell(3);
				var cell5=newRow.insertCell(4);
				var cell6=newRow.insertCell(5);
				var cell7=newRow.insertCell(6);
				var cell8=newRow.insertCell(7);
				var cell9=newRow.insertCell(8);
				var cell10=newRow.insertCell(9);
				var cell11=newRow.insertCell(10);
				
				cell1.innerHTML=json[i].order_id;
				cell2.innerHTML=json[i].customer;
				cell3.innerHTML=json[i].add_no;
				cell4.innerHTML=json[i].street;
				cell5.innerHTML=json[i].city1;
				cell6.innerHTML=json[i].city2;
				cell7.innerHTML=json[i].zip;
				cell8.innerHTML=json[i].route_id  ;
				cell9.innerHTML=json[i].delivery_date;
				cell10.innerHTML=json[i]._value;
				cell11.innerHTML=json[i].status;
				
			}

    	}
	});

});
