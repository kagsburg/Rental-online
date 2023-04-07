
## Rental Management System
System to allow you easily manage your rental data.

- Have easy access to your rental info



The folder api contains the various endpoints that have to be consumed


The  Core folder contains the various classes that define the various functions that are used in the various end points.



the include folder contain the  database connection


-GET request: localhost:8000/harvestFoodsApi/api/get_products.php?id=6 # getting all products in category 6 or any other category like localfood, fastfood and others



-POST Request: localhost:8000/harvestFoodsApi/api/create_new_user.php #adding new user

body example
{
    "Email":"tim@gmail.com",
    "Firstname":"kahunde",
    "telephone":"03998",
    "Lastname":"kahuma",
    "Birthday":"2001-02-08",
    "password":"1234"
}


-POST request:localhost:8000/harvestFoodsApi/api/login_user.php //authenication


 body example
{
    "Email":"tim@gmail.com",
    "password":"1234"
}


-POST request :localhost:8000/harvestFoodsApi/api/add_item_to_cart.php //adding item to cart

body example
{
    "order_no":"2021061197999799",
    "jwt": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJpYXQiOjE2MjYyODIzMTQsIm5iZiI6MTYyNjI4MjMyNCwiZXhwIjoxNjI4ODc0MzE0LCJhdWQiOiJteXVzZXJzIiwiZGF0YSI6eyJpZCI6NDYsIm5hbWUiOiJrYWh1bmRlIiwiZW1haWwiOiJ0aW1AZ21haWwuY29tIn19.OLRPSHMGAANnN4xvuF2YVeFTlwN7p_9SM2I5IBvFWMA",
    "product_id":"34",
    "quantity":"1",
    "session":"9mam8lbp702i9vl3v8kgs6u4s4"

}


-POST request :localhost:8000/harvestFoodsApi/api/load_cart_items.php //load all cart items

body example
{
	 "order_no":"2021061197999799",
    "jwt": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJpYXQiOjE2MjYyODIzMTQsIm5iZiI6MTYyNjI4MjMyNCwiZXhwIjoxNjI4ODc0MzE0LCJhdWQiOiJteXVzZXJzIiwiZGF0YSI6eyJpZCI6NDYsIm5hbWUiOiJrYWh1bmRlIiwiZW1haWwiOiJ0aW1AZ21haWwuY29tIn19.OLRPSHMGAANnN4xvuF2YVeFTlwN7p_9SM2I5IBvFWMA"
    
}


-GET request:localhost:8000/harvestFoodsApi/api/remove_cart_item.php?id=146 //removing item from cart

