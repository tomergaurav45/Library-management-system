<?php
	$connection = mysqli_connect("localhost:3307", "root", "gaurav01", "lms");
	$db = mysqli_select_db($connection,"lms");
	$book_count = 0;
	$query = "select count(*) as book_count from books";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$book_count = $row['book_count'];
	}
?>