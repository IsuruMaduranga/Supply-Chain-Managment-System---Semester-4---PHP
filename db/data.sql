INSERT INTO `users`(`_type`, `first_name`, `last_name`, `email`, `nic`, `add_no`, `street`, `city1`, `city2`, `zip`, `password_hash`) VALUES ("customer","Maduranga","Wijesiri","maduranga.official@gmail.com","957463556V","1/152","minuwangoda road","Bolawalana","Maradagahamula",26354,SHA1(10));
INSERT INTO `users`(`_type`, `first_name`, `last_name`, `email`, `nic`, `add_no`, `street`, `city1`, `city2`, `zip`, `password_hash`) VALUES ("customer","Sankalpa","Sankalpa","sankalpa.official@gmail.com","966376859V","1/252","angoda road","Bolawalana","Gampaha",46374,SHA1(10));
INSERT INTO `users`(`_type`, `first_name`, `last_name`, `email`, `nic`, `add_no`, `street`, `city1`, `city2`, `zip`, `password_hash`) VALUES ("customer","Buddhi","Buddhi","buddmhi.official@gmail.com","964635278V","1/262","koswaththa road","Bolawalana","kandy",16253,SHA1(10));
INSERT INTO `users`(`_type`, `first_name`, `last_name`, `email`, `nic`, `add_no`, `street`, `city1`, `city2`, `zip`, `password_hash`) VALUES ("customer","kaumini","kavishka","kahumini.official@gmail.com","966493728V","1/362","diulapitiya road","Bolawalana","Negombo",16253,SHA1(10));
INSERT INTO `users`(`_type`, `first_name`, `last_name`, `email`, `nic`, `add_no`, `street`, `city1`, `city2`, `zip`, `password_hash`) VALUES ("customer","kashuni","kashew","kashuni.official2@gmail.com","966453027V","1/343","kuliyapitiya road","kollupitiya","colambo",16253,SHA1(10));

INSERT INTO `users` (`user_id`, `_type`, `first_name`, `last_name`, `email`, `nic`, `add_no`, `street`, `city1`, `city2`, `zip`, `password_hash`) VALUES (NULL, 'employee', 'abc', 'cde', 'abc11@gmail.com', '123456780V', '92/D', 'Ovitigama', 'Pugoda', NULL, '10660', SHA1('123'));
INSERT INTO `users` (`user_id`, `_type`, `first_name`, `last_name`, `email`, `nic`, `add_no`, `street`, `city1`, `city2`, `zip`, `password_hash`) VALUES (NULL, 'employee', 'abc1', 'cde1', 'abc12@gmail.com', '223456789V', '92/D', 'Ovitigama', 'Pugoda', NULL, '10660', SHA1('123'));
INSERT INTO `users` (`user_id`, `_type`, `first_name`, `last_name`, `email`, `nic`, `add_no`, `street`, `city1`, `city2`, `zip`, `password_hash`) VALUES (NULL, 'employee', 'abc2', 'cde2', 'abc22@gmail.com', '323456789V', '92/D', 'Ovitigama', 'Pugoda', NULL, '10660', SHA1('123'));
INSERT INTO `users` (`user_id`, `_type`, `first_name`, `last_name`, `email`, `nic`, `add_no`, `street`, `city1`, `city2`, `zip`, `password_hash`) VALUES (NULL, 'employee', 'abc3', 'cde3', 'abc33@gmail.com', '423456789V', '92/D', 'Ovitigama', 'Pugoda', NULL, '10660', SHA1('123'));
INSERT INTO `users` (`user_id`, `_type`, `first_name`, `last_name`, `email`, `nic`, `add_no`, `street`, `city1`, `city2`, `zip`, `password_hash`) VALUES (NULL, 'employee', 'abc4', 'cde4', 'abc44@gmail.com', '523456789V', '92/D', 'Ovitigama', 'Pugoda', NULL, '10660', SHA1('123'));

INSERT INTO `users`(`_type`, `first_name`, `last_name`, `email`, `nic`, `add_no`, `street`, `city1`, `city2`, `zip`, `password_hash`) VALUES ('admin','Isuru','Wijesiri','Isuru.official@gmail.com','957463526V','1/152','kelaniya road','kelaniya','Colombo',26354,SHA1(10));
INSERT INTO `users`(`_type`, `first_name`, `last_name`, `email`, `nic`, `add_no`, `street`, `city1`, `city2`, `zip`, `password_hash`) VALUES ('admin','Harith','Sankalpa','Harith.official@gmail.com','964374859V','1/252','angoda road','asgiriya','Gampaha',46374,SHA1(10));
INSERT INTO `users`(`_type`, `first_name`, `last_name`, `email`, `nic`, `add_no`, `street`, `city1`, `city2`, `zip`, `password_hash`) VALUES ('admin','Kawwa','kavi','kawwa.official@gmail.com','964635673V','1/262','koswaththa road','Bolawalana','Ampara',16253,SHA1(10));

INSERT INTO `phone`(`user_id`, `phone`) VALUES (1,'0763546374');
INSERT INTO `phone`(`user_id`, `phone`) VALUES (2,'0772636374');
INSERT INTO `phone`(`user_id`, `phone`) VALUES (3,'0754469374');
INSERT INTO `phone`(`user_id`, `phone`) VALUES (4,'0712736253');

INSERT INTO `customers`(`customer_id`, `_type`) VALUES (1,"retail");
INSERT INTO `customers`(`customer_id`, `_type`) VALUES (2,"wholesale");
INSERT INTO `customers`(`customer_id`, `_type`) VALUES (3,"customer");
INSERT INTO `customers`(`customer_id`, `_type`) VALUES (4,"retail");
INSERT INTO `customers`(`customer_id`, `_type`) VALUES (5,"customer");


INSERT INTO `employees` (`employee_id`, `_type`, `salary`) VALUES ('6', 'driver', '10000');
INSERT INTO `employees` (`employee_id`, `_type`, `salary`) VALUES ('7', 'driver', '10000');
INSERT INTO `employees` (`employee_id`, `_type`, `salary`) VALUES ('8', 'assistant', '10000');
INSERT INTO `employees` (`employee_id`, `_type`, `salary`) VALUES ('9', 'assistant', '10000');
INSERT INTO `employees` (`employee_id`, `_type`, `salary`) VALUES ('10', 'assistant', '10000');

INSERT INTO `employee_work_data`(`employee_id`, `week_no`, `workhours`) VALUES (6,1,"40:00:00");
INSERT INTO `employee_work_data`(`employee_id`, `week_no`, `workhours`) VALUES (7,1,"40:00:00");
INSERT INTO `employee_work_data`(`employee_id`, `week_no`, `workhours`) VALUES (8,1,"45:00:00");
INSERT INTO `employee_work_data`(`employee_id`, `week_no`, `workhours`) VALUES (9,1,"40:00:00");
INSERT INTO `employee_work_data`(`employee_id`, `week_no`, `workhours`) VALUES (10,1,"40:00:00");
INSERT INTO `employee_work_data`(`employee_id`, `week_no`, `workhours`) VALUES (6,2,"40:00:00");
INSERT INTO `employee_work_data`(`employee_id`, `week_no`, `workhours`) VALUES (7,2,"35:00:00");



INSERT INTO `stores` (`store_id`,`city`,`street`, `contact_no`) VALUES (1,'colombo', 'almer street', 0776352836);
INSERT INTO `stores` (`store_id`,`city`,`street`, `contact_no`) VALUES (2,'negombo','minuwangos', 0715263748);
INSERT INTO `stores` (`store_id`,`city`,`street`, `contact_no`) VALUES (3,'galle','dsfsfsdf', 0763546241);
INSERT INTO `stores` (`store_id`,`city`,`street`, `contact_no`) VALUES (4,'matara','dgfdggc', 0726351726);
INSERT INTO `stores` (`store_id`,`city`,`street`, `contact_no`) VALUES (5,'jaffna','sdsffds', 0773524162);
INSERT INTO `stores` (`store_id`,`city`,`street`, `contact_no`) VALUES (6,'trinco','sdfdsf', 0716352738);


INSERT INTO `routes` (`route_id`,`store_id`, `max_time`, `route_path`) VALUES (1,1,'00:30:00','sdf, fdgfg, sfsfdsdf');
INSERT INTO `routes` (`route_id`,`store_id`, `max_time`, `route_path`) VALUES (2,2,'01:00:00','dfgfdg, dsfdsfdsf, sdfsdfsd');
INSERT INTO `routes` (`route_id`,`store_id`, `max_time`, `route_path`) VALUES (3,3,'02:00:00','dsfsd, awew, rter');
INSERT INTO `routes` (`route_id`,`store_id`, `max_time`, `route_path`) VALUES (4,4,'01:00:00','sdh, asad, xcvcxv');
INSERT INTO `routes` (`route_id`,`store_id`, `max_time`, `route_path`) VALUES (5,5,'01:00:00','sdsds, wefw, ghkj');
INSERT INTO `routes` (`route_id`,`store_id`, `max_time`, `route_path`) VALUES (6,6,'01:00:00','gkfok, ghjkk, gkjhk');


INSERT INTO `products`(`name`, `_type`, `capacity`, `wholesale_price`, `retail_price`, `end_price`, `available_qty`) VALUES ('product1','a','100',150,160,160,100);
INSERT INTO `products`(`name`, `_type`, `capacity`, `wholesale_price`, `retail_price`, `end_price`, `available_qty`) VALUES ('product2','b','150',250,270,270,200);
INSERT INTO `products`(`name`, `_type`, `capacity`, `wholesale_price`, `retail_price`, `end_price`, `available_qty`) VALUES ('product3','c','155',250,270,270,200);
INSERT INTO `products`(`name`, `_type`, `capacity`, `wholesale_price`, `retail_price`, `end_price`, `available_qty`) VALUES ('product4','d','170',250,270,270,200);
INSERT INTO `products`(`name`, `_type`, `capacity`, `wholesale_price`, `retail_price`, `end_price`, `available_qty`) VALUES ('product5','d','250',250,270,270,200);

INSERT INTO `sales_data`(`product_id`, `_date`, `city`, `route_id`, `item_sold`) VALUES (1,'2018-11-21','colombo',1,5);
INSERT INTO `sales_data`(`product_id`, `_date`, `city`, `route_id`, `item_sold`) VALUES (2,'2018-11-22','colombo',1,10);
INSERT INTO `sales_data`(`product_id`, `_date`, `city`, `route_id`, `item_sold`) VALUES (5,'2018-11-24','matara',4,15);
INSERT INTO `sales_data`(`product_id`, `_date`, `city`, `route_id`, `item_sold`) VALUES (3,'2018-11-24','galle',3,7);
INSERT INTO `sales_data`(`product_id`, `_date`, `city`, `route_id`, `item_sold`) VALUES (4,'2018-11-25','trinco',4,8);
INSERT INTO `sales_data`(`product_id`, `_date`, `city`, `route_id`, `item_sold`) VALUES (2,'2018-11-27','negombo',2,3);
INSERT INTO `sales_data`(`product_id`, `_date`, `city`, `route_id`, `item_sold`) VALUES (3,'2018-11-28','jaffna',6,10);
INSERT INTO `sales_data`(`product_id`, `_date`, `city`, `route_id`, `item_sold`) VALUES (1,'2018-01-21','colombo',1,5);
INSERT INTO `sales_data`(`product_id`, `_date`, `city`, `route_id`, `item_sold`) VALUES (2,'2018-02-22','colombo',1,10);
INSERT INTO `sales_data`(`product_id`, `_date`, `city`, `route_id`, `item_sold`) VALUES (5,'2018-05-24','matara',4,15);
INSERT INTO `sales_data`(`product_id`, `_date`, `city`, `route_id`, `item_sold`) VALUES (3,'2018-06-24','galle',3,7);
INSERT INTO `sales_data`(`product_id`, `_date`, `city`, `route_id`, `item_sold`) VALUES (4,'2018-12-25','trinco',4,8);
INSERT INTO `sales_data`(`product_id`, `_date`, `city`, `route_id`, `item_sold`) VALUES (2,'2018-07-27','negombo',2,3);
INSERT INTO `sales_data`(`product_id`, `_date`, `city`, `route_id`, `item_sold`) VALUES (3,'2018-09-28','jaffna',6,10);
INSERT INTO `sales_data`(`product_id`, `_date`, `city`, `route_id`, `item_sold`) VALUES (1,'2018-03-21','colombo',1,5);
INSERT INTO `sales_data`(`product_id`, `_date`, `city`, `route_id`, `item_sold`) VALUES (2,'2018-04-22','colombo',1,10);
INSERT INTO `sales_data`(`product_id`, `_date`, `city`, `route_id`, `item_sold`) VALUES (5,'2018-08-24','matara',4,15);
INSERT INTO `sales_data`(`product_id`, `_date`, `city`, `route_id`, `item_sold`) VALUES (3,'2018-10-24','galle',3,7);
INSERT INTO `sales_data`(`product_id`, `_date`, `city`, `route_id`, `item_sold`) VALUES (4,'2018-01-25','trinco',4,8);
INSERT INTO `sales_data`(`product_id`, `_date`, `city`, `route_id`, `item_sold`) VALUES (2,'2018-07-27','negombo',2,3);
INSERT INTO `sales_data`(`product_id`, `_date`, `city`, `route_id`, `item_sold`) VALUES (3,'2018-05-28','jaffna',6,10);
 
INSERT INTO `orders`(`order_id`,`customer`, `add_no`, `street`, `city1`, `city2`, `zip`, `route_id`, `delivery_date`, `_value`, `status`) VALUES (1,1,'152/1','sdfsfsdf','dsfsfd','colombo',23,1,'2018-11-27',25,'processing');
INSERT INTO `orders`(`order_id`,`customer`, `add_no`, `street`, `city1`, `city2`, `zip`, `route_id`, `delivery_date`, `_value`, `status`) VALUES (2,3,'34/2','sdfsfdsfsdf','bjds','negombo',76,2,'2018-12-03',75,'processing');
INSERT INTO `orders`(`order_id`,`customer`, `add_no`, `street`, `city1`, `city2`, `zip`, `route_id`, `delivery_date`, `_value`, `status`) VALUES (3,2,'156/2','sdfsffbsdf','dsfsdf','galle',34,1,'2018-12-04',55,'processing');
INSERT INTO `orders`(`order_id`,`customer`, `add_no`, `street`, `city1`, `city2`, `zip`, `route_id`, `delivery_date`, `_value`, `status`) VALUES (4,4,'55/1','sdfsfsdnhf','dsfsdsdf','matara',54,4,'2018-11-28',25,'delivered');
INSERT INTO `orders`(`order_id`,`customer`, `add_no`, `street`, `city1`, `city2`, `zip`, `route_id`, `delivery_date`, `_value`, `status`) VALUES (5,5,'64/2','sdfsfcsdf','mcvbmn','jaffna',34,6,'2018-12-03',34,'shipped');
INSERT INTO `orders`(`order_id`,`customer`, `add_no`, `street`, `city1`, `city2`, `zip`, `route_id`, `delivery_date`, `_value`, `status`) VALUES (6,2,'78/4','sdfshfsnbdf','hgjh','trinco',50,5,'2018-12-04',45,'processing');

INSERT INTO `products_ordered`(`order_id`, `product_id`, `qty`) VALUES (1,2,2);
INSERT INTO `products_ordered`(`order_id`, `product_id`, `qty`) VALUES (2,1,5);
INSERT INTO `products_ordered`(`order_id`, `product_id`, `qty`) VALUES (3,2,3);
INSERT INTO `products_ordered`(`order_id`, `product_id`, `qty`) VALUES (4,4,10);
INSERT INTO `products_ordered`(`order_id`, `product_id`, `qty`) VALUES (5,3,28);
INSERT INTO `products_ordered`(`order_id`, `product_id`, `qty`) VALUES (6,5,10);

INSERT INTO `train_schedule`(`_day`, `_time`, `capacity`) VALUES (1,'08:00:00',50);
INSERT INTO `train_schedule`(`_day`, `_time`, `capacity`) VALUES (2,'09:00:00',50);
INSERT INTO `train_schedule`(`_day`, `_time`, `capacity`) VALUES (3,'10:00:00',50);
INSERT INTO `train_schedule`(`_day`, `_time`, `capacity`) VALUES (4,'07:00:00',50);
INSERT INTO `train_schedule`(`_day`, `_time`, `capacity`) VALUES (5,'08:00:00',50);
INSERT INTO `train_schedule`(`_day`, `_time`, `capacity`) VALUES (6,'10:00:00',50);
INSERT INTO `train_schedule`(`_day`, `_time`, `capacity`) VALUES (7,'11:00:00',50);

INSERT INTO `train_cities`(`train_id`, `city`) VALUES (1,'colombo');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (1,'negombo');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (2,'galle');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (2,'matara');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (3,'jaffna');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (3,'trinco');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (4,'galle');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (5,'trinco');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (6,'colombo');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (6,'matara');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (1,'trinco');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (1,'galle');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (2,'trinco');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (2,'colombo');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (2,'jaffna');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (3,'matara');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (3,'colombo');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (4,'jaffna');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (4,'trinco');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (3,'negombo');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (5,'colombo');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (5,'jaffna');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (5,'negombo');
INSERT INTO `train_cities`(`train_id`, `city`) VALUES (6,'negombo');



INSERT INTO `shipments`(`train_id`, `_date`, `status`, `capacity_left`) VALUES (1,'2018-12-21','delivered',5000);
INSERT INTO `shipments`(`train_id`, `_date`, `status`, `capacity_left`) VALUES (2,'2018-12-23','delivered',6500);
INSERT INTO `shipments`(`train_id`, `_date`, `status`, `capacity_left`) VALUES (3,'2018-12-23','processing',8000);
INSERT INTO `shipments`(`train_id`, `_date`, `status`, `capacity_left`) VALUES (5,'2018-12-25','processing',7000);
INSERT INTO `shipments`(`train_id`, `_date`, `status`, `capacity_left`) VALUES (4,'2018-12-25','processing',5000);

INSERT INTO `shipment_orders`(`shipment_id`, `order_id`, store_id) VALUES (1,1,1);
INSERT INTO `shipment_orders`(`shipment_id`, `order_id`, store_id) VALUES (2,3,2);
INSERT INTO `shipment_orders`(`shipment_id`, `order_id`, store_id) VALUES (2,4,3);
INSERT INTO `shipment_orders`(`shipment_id`, `order_id`, store_id) VALUES (4,5,4);
INSERT INTO `shipment_orders`(`shipment_id`, `order_id`, store_id) VALUES (5,2,5);
INSERT INTO `shipment_orders`(`shipment_id`, `order_id`, store_id) VALUES (3,6,1);

INSERT INTO `trucks`(`store_id`, `status`) VALUES (1,"available");
INSERT INTO `trucks`(`store_id`, `status`) VALUES (1,"not available");
INSERT INTO `trucks`(`store_id`, `status`) VALUES (2,"not available");
INSERT INTO `trucks`(`store_id`, `status`) VALUES (2,"available");
INSERT INTO `trucks`(`store_id`, `status`) VALUES (3,"available");
INSERT INTO `trucks`(`store_id`, `status`) VALUES (4,"available");
INSERT INTO `trucks`(`store_id`, `status`) VALUES (5,"available");
INSERT INTO `trucks`(`store_id`, `status`) VALUES (6,"available");

INSERT INTO `truck_work_data`(`truck_id`,`_date`, `work_hours`) VALUES (1,'2018-11-21','30:00:00');
INSERT INTO `truck_work_data`(`truck_id`,`_date`, `work_hours`) VALUES (2,'2018-11-22','35:00:00');
INSERT INTO `truck_work_data`(`truck_id`,`_date`, `work_hours`) VALUES (2,'2018-11-23','40:00:00');
INSERT INTO `truck_work_data`(`truck_id`,`_date`, `work_hours`) VALUES (3,'2018-11-23','40:00:00');
INSERT INTO `truck_work_data`(`truck_id`,`_date`, `work_hours`) VALUES (4,'2018-11-24','20:00:00');
INSERT INTO `truck_work_data`(`truck_id`,`_date`, `work_hours`) VALUES (5,'2018-11-24','25:00:00');
INSERT INTO `truck_work_data`(`truck_id`,`_date`, `work_hours`) VALUES (6,'2018-11-25','32:00:00');
INSERT INTO `truck_work_data`(`truck_id`,`_date`, `work_hours`) VALUES (7,'2018-11-26','38:00:00');
INSERT INTO `truck_work_data`(`truck_id`,`_date`, `work_hours`) VALUES (8,'2018-11-26','30:00:00');

INSERT INTO `truck_trip`(`truck_id`, `_date`, `status`, `driver_id`, `assistant_id`, `route_id`) VALUES (1,'2018-11-21','pending',6,10,1);
INSERT INTO `truck_trip`(`truck_id`, `_date`, `status`, `driver_id`, `assistant_id`, `route_id`) VALUES (2,'2018-11-23','pending',8,9,2);
INSERT INTO `truck_trip`(`truck_id`, `_date`, `status`, `driver_id`, `assistant_id`, `route_id`) VALUES (3,'2018-11-24','pending',7,8,3);
INSERT INTO `truck_trip`(`truck_id`, `_date`, `status`, `driver_id`, `assistant_id`, `route_id`) VALUES (4,'2018-11-26','pending',8,6,4);
INSERT INTO `truck_trip`(`truck_id`, `_date`, `status`, `driver_id`, `assistant_id`, `route_id`) VALUES (5,'2018-11-28','pending',10,9,6);

INSERT INTO `truck_trip_orders`(`truck_schedule_id`, `order_id`) VALUES (1,1);
INSERT INTO `truck_trip_orders`(`truck_schedule_id`, `order_id`) VALUES (1,2);
INSERT INTO `truck_trip_orders`(`truck_schedule_id`, `order_id`) VALUES (2,3);
INSERT INTO `truck_trip_orders`(`truck_schedule_id`, `order_id`) VALUES (3,4);
INSERT INTO `truck_trip_orders`(`truck_schedule_id`, `order_id`) VALUES (4,5);
INSERT INTO `truck_trip_orders`(`truck_schedule_id`, `order_id`) VALUES (5,6);




























