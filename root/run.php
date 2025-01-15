<?php
session_start();
 if (isset($_POST['submit'])) {
 	$_SESSION['username']="171210059";
 	$html=$_POST['html'];
 	$css=$_POST['css'];
 	$js=$_POST['js'];
 	$htmlfile = fopen("html.php", "w+") or die("Unable to open file!");
    fwrite($htmlfile, $html);
    fclose($htmlfile);
    $cssfile = fopen("style.css", "w+") or die("Unable to open file!");
    fwrite($cssfile, $css);
    fclose($cssfile);
    $jsfile = fopen("main.js", "w+") or die("Unable to open file!");
    fwrite($jsfile, $js);
    fclose($jsfile);
 }
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Run Your Code</title>
</head>
<body>

<div class="row">
	<div class="col-sm-8">
		    <h4 style="text-align:center;">Write your code here!</h4>
		    <form action="run.php" method="post">
                <div class="row" style="margin-left: 10px;">
                	<div class="form-group col-sm-4">
    	                <textarea name="html" rows="18" class="col-sm-12">
                
            <?php 
            if (isset($_SESSION['username'])) {
            	echo $html;
            }
            else{
            	?>
<!--html code-->    	   
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="style.css">
<script src="main.js"></script>
</head>
<body>

</body>
</html>
               <?php
            }
            ?>

    	                </textarea>
                    </div>
                	<div class="form-group col-sm-4">
    	                <textarea name="css" rows="18" class="form-control">
                
            <?php 
            if (isset($_SESSION['username'])) {
            	echo $css;
            }
            else{
            	?>
/*css code*/
body{
	
}
            	<?php
            }
            ?>

    	                </textarea>
                    </div>
                	<div class="form-group col-sm-4">
    	                <textarea name="js" rows="18" class="form-control">
                
            <?php 
            if (isset($_SESSION['username'])) {
            	echo $js;
            }
            else{
            	?>
//js code

            	<?php
            }
            ?>

    	                </textarea>
                    </div>
                </div>
    	        <div class="form-group offset-9 ">
    	        	<input class="col-sm-7 btn btn-primary form-control" type="submit" name="submit" value="Run">
    	        </div>
            </form>
	</div>
	<div class="col-sm">
		<h4 class="offset-2">Output!</h4>
		<?php 
		 if (isset($_SESSION['username'])) {
		  	?>
		  	<iframe src="html.php" class="col-sm-10">
    	
            </iframe>
		  	<?php
		 }
		?>
	</div>
</div>


<?php
session_destroy();
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>