<?php

//submit_rating.php

$connect = new PDO("mysql:host=localhost;dbname=tattoo_db", "root", "");

if(isset($_POST["rating_data"]))
{

	$data = array(
		':user_name'		=>	$_POST["user_name"],
		':user_id'		=>	$_POST["user_id"],
		':shop_id'		=>	$_POST["shop_id"],
		':user_rating'		=>	$_POST["rating_data"],
		':user_review'		=>	$_POST["user_review"],
		':datetime'			=>	time()
	);

	$query = "
	INSERT INTO review_table 
	(user_name, userid, shopid, user_rating, user_review, datetime) 
	VALUES (:user_name, :user_id, :shop_id, :user_rating, :user_review, :datetime)
	";

	$statement = $connect->prepare($query);

	$statement->execute($data);

	echo "Thank you for your feedback!";

}
?>