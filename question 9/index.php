
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 9</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
 <div class="container mt-5"> 
 
<?php
function pattern($row)
{

	for ($i = 0; $i < $row; $i++)
	{
		for($j = 0; $j <= $i; $j++ )
		{
			echo "* ";
            
		}
        echo "<br>";
	}
}
	$row = 5;
	pattern($row);

?>
 
 </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

</body>
</html>
