var button=document.getElementById("sub-class");
var table=document.getElementsByTagName("table")[0];
var qty=document.getElementById("qty");
var product=document.getElementById("select-product");

var products = [];
var qtys = [];
var total =0;

$(document).ready(function(){

	select = document.getElementById('select-product');
	
  	$.ajax({
    	url: "product_receive.php",
    	dataType: "JSON",
    	success: function(json){
				
		
        	for(var i=0;i<json.length;i++){
            	
            	var opt = document.createElement('option');
    			opt.value = json[i].product_id;
    			opt.innerHTML = json[i].product_id;
			
				select.appendChild(opt);
							

        	}

    	}
	});

});


$("#sub-class").click(function(){

	
	var product = $('#select-product').val();
	var qty = $('#qty').val();
	
	if(products.indexOf(product) == -1){
		addRow(product, qty);
	}else{
		updateRow(product, qty);
	}


});

$("#sub-check").click(function(){
	
	//transaction.php?add_no=%273%27&street=%27sdad%27&city1=%27kakndy%27&city2=%27colombo%27&zip=123&route_id=1&delivery_date=%272018/12/2%27&_value=567&status=%27pend%27&products=1,2,3&qtys=1,2,3
	
	var add_no = $('#add_no').val();
	var street = $('#street').val();
	var city1 = $('#city1').val();
	var city2 = $('#city2').val();
	var zip = $('#zip').val();
	var route_id = $('#select-route').val();
	var someDate = new Date();
	var dd = someDate.getDate()+1;
	var mm = someDate.getMonth();
	var y = someDate.getFullYear();

	var someDate = y + '/'+ mm + '/'+ dd;
	var delivery_date = formatDate(someDate);
	var _value = total;
	var stat = 'processing';
	var pr = products.toString();
	var qt = qtys.toString();
	
	var req = "transaction.php?add_no=" + add_no + "&street=" + street + "&city1=" + city1 + "&city2=" + city2 + "&zip=" + zip + "&route_id=" + route_id + "&delivery_date=" + delivery_date +"&_value=" + _value + "&status=" + stat + "&products=" +  pr + "&qtys=" + qt;
	
	//alert(req);
	
	//$('#err').text(req);
	
	

	$.ajax({
    	url: req,
    	dataType: "html",
    	success: function(finalres){
			
			alert(finalres);

    	}
	});	


});




$("#cartForm").submit(function(){
	return false;
});

$("#orderForm").submit(function(){
	return false;
});

function addRow(product,qty){
	products.push(product);
	qtys.push(qty);
	
	var newRow=table.insertRow(table.rows.length);
	
	var cell1=newRow.insertCell(0);
	var cell2=newRow.insertCell(1);
	var cell3=newRow.insertCell(2);
	var cell4=newRow.insertCell(3);
	var cell5=newRow.insertCell(4);
	
	var a = 'product_receive_byid.php?id=';
	var b = 'get_price.php?id=';
	var path =  a + product;
	var path2 =  b + product;
	
	
	
	var price = ''
	$.ajax({
    	url: path,
    	dataType: "JSON",
    	success: function(json2){
			//alert(JSON.stringify(json2));
			
			cell1.innerHTML=product;
			cell2.innerHTML=json2[0].name;
			
			$.ajax({
				url: path2,
				dataType: "html",
				success: function(out){
					//alert(JSON.stringify(json3));
					cell3.innerHTML=out;
					price = out;
					$eva = parseFloat(price) *  parseFloat(qty);
					cell5.innerHTML= $eva ;
					total = total + $eva;
				

				}
			});
			
			
			
			
			
			cell4.innerHTML=qty;
			
	
			

    	}
	});
	
	
}

function updateRow(product,qty){
	qtys[products.indexOf(product)] = parseInt(qtys[products.indexOf(product)])+parseInt(qty) ;

	
	var x = document.getElementById("table").rows[products.indexOf(product)+1].cells;
	$newqn =parseInt(x[3].innerHTML) + parseInt(qty) ;
    x[3].innerHTML = $newqn;
	$newval = parseFloat(x[3].innerHTML) *  parseFloat(x[2].innerHTML) ;
	x[4].innerHTML = $newval;
	
}


function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('-');

	


	
	

	
}
