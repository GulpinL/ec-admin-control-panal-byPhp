<?php
$ch = require "init_curl.php";

// $ch = curl_init("https://company-news-workmanager.herokuapp.com/api");

curl_setopt($ch, CURLOPT_URL, "https://company-news-workmanager.herokuapp.com/api");

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);


?>



<!DOCTYPE html>
<html>
	
	<?php include('./templates/header.php'); ?>


<h4 class="center grey-text">DEPLOY PHP ON HEROKU</h4>

	<div class="container">
		<div class="row">

			<?php foreach($data as $monoclub): ?>

				<div class="col s6 m3">
					<div class="card z-depth-0">
						<div class="card-content center">
							<h6><?php echo ($monoclub['title']); ?></h6>
							<h6><?php echo ($monoclub['description']); ?></h6>
							
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="./get3.php">Detail</a>
						</div>
					</div>
				</div>

			<?php endforeach; ?>

		</div>
        
	</div>




    <form method="post" action="post2.php">
    
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    
        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>
    
        <button>Submit post2 nap duw lieu</button>
    </form>


    <div>Checking</div>
    <a href="./pages/checking-check-in.php">checing page</a>
	<?php include('./templates/footer.php'); ?>

</html>