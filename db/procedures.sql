<<<<<<< HEAD
DELIMITER //
DROP PROCEDURE IF EXISTS quarterly_sales_report //
CREATE PROCEDURE quarterly_sales_report(year VARCHAR(4))
BEGIN
	SELECT * FROM sales_report WHERE YEAR(_date)=year AND MONTH(_date)<=3;
	SELECT * FROM sales_report WHERE YEAR(_date)=year AND MONTH(_date)<=6 AND MONTH(_date)>3;
	SELECT * FROM sales_report WHERE YEAR(_date)=year AND MONTH(_date)<=9 AND MONTH(_date)>6;
	SELECT * FROM sales_report WHERE YEAR(_date)=year AND MONTH(_date)<=12 AND MONTH(_date)>9;
END //
DELIMITER;
=======
DELIMITER //
DROP PROCEDURE IF EXISTS quarterly_sales_report //
CREATE PROCEDURE quarterly_sales_report(year VARCHAR(4))
BEGIN
	SELECT * FROM sales_data WHERE YEAR(_date)=year AND MONTH(_date)<=3;
	SELECT * FROM sales_data WHERE YEAR(_date)=year AND MONTH(_date)<=6 AND MONTH(_date)>3;
	SELECT * FROM sales_data WHERE YEAR(_date)=year AND MONTH(_date)<=9 AND MONTH(_date)>6;
	SELECT * FROM sales_data WHERE YEAR(_date)=year AND MONTH(_date)<=12 AND MONTH(_date)>9;
END //
DELIMITER ;

DELIMITER //
DROP PROCEDURE IF EXISTS items_with_most_orders //
CREATE PROCEDURE items_with_most_orders()
BEGIN
	SELECT product_id, sum(qty) as qty FROM products_ordered GROUP BY product_id ORDER BY qty DESC;
END //
DELIMITER ;

DELIMITER //
DROP PROCEDURE IF EXISTS sales_report_cities_routes //
CREATE PROCEDURE sales_report_cities_routes()
BEGIN
	SELECT * FROM sales_data GROUP BY city,route_id ORDER BY city,route_id;
END //
DELIMITER ;

DELIMITER //
DROP PROCEDURE IF EXISTS customer_order_report //
CREATE PROCEDURE customer_order_report()
BEGIN
	SELECT orders.customer, orders.order_id, products_ordered.product_id, products_ordered.qty, orders.delivery_date FROM orders NATURAL LEFT JOIN products_ordered GROUP BY orders.customer ORDER BY orders.customer ASC;
END //
DELIMITER ;
>>>>>>> 767e99f3fbbc32e8313cd81e7879592b92929686
