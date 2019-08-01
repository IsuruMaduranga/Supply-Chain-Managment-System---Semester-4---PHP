

(async function(){
    let url = `route.php?`;
    let response = await fetch(url);
    let routes = await response.json();

    console.log(routes);

    let selectr = document.getElementById("route");

    routes.forEach(element => {
        let op = document.createElement('option');
        op.innerHTML=`${element.route_path}`;
        op.value=element.route_id;
        selectr.appendChild(op);
    });
})();

async function click1(){
    document.getElementById("dateBtn").disabled =  true;
    
    let _date = document.getElementById("_date").value;
    let route_id = document.getElementById("route").value;
    
    let url = `avtruck.php?_date=${_date}&&store_id=${route_id}`;
    let response = await fetch(url);
    let truck = await response.json();

    let url1 = `avdriver.php?_date=${_date}`;
    let response1 = await fetch(url1);
    let driver = await response1.json();    

    let url2 = `avassist.php?_date=${_date}`;
    let response2 = await fetch(url2);
    let assist = await response2.json();

    let div_ = document.createElement('div');

    let select_ = document.createElement('select');
    select_.name = "truck_id";
    select_.type = "number";

    truck.forEach(element => {
        let op = document.createElement('option');
        op.innerHTML=`truck ${element.truck_id}`;
        op.value=element.truck_id;
        select_.appendChild(op);
    });

    let select1_ = document.createElement('select');
    select1_.name = "driver_id";
    select1_.type = "number";

    driver.forEach(element => {
        let op = document.createElement('option');
        op.innerHTML=`diver ${element.employee_id}`;
        op.value=element.employee_id;
        select1_.appendChild(op);
    });

    let select2_ = document.createElement('select');
    select2_.name = "assistant_id";
    select2_.type = "number";

    assist.forEach(element => {
        let op = document.createElement('option');
        op.innerHTML=`employee ${element.employee_id}`;
        op.value=element.employee_id;
        select2_.appendChild(op);
    });


    console.log(select2_);
    div_.appendChild(select_);
    div_.appendChild(select1_);
    div_.appendChild(select2_);
    document.getElementById('trip-form').appendChild(div_);
};