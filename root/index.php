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
    $jsfile = fopen("script.js", "w+") or die("Unable to open file!");
    fwrite($jsfile, $js);
    fclose($jsfile);
 }
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Run Your Code</title>
	<style type="text/css">
		body{
			
		}
		.heading{
           background-color:  #7300e6;
           padding: 10px 0px 10px 0px;
           box-shadow: 4px 2px 4px 2px;
		}
		.main-content{
           padding-top: 10px;
		}
		button{
		   width: 100%;
		   border-style: none;
		}
		.button{
			width: 32.9%;
			font-size: 20px;
		}
		.buttons{
			background-color: #0000ff;
		}
		.active{
			display: block;
		}
		.notactive{
			display: none;
		}
	</style>
</head>
<body>

<div class="heading">
	<h2 class="text-center">CodeLearn</h2>
</div>

<div class="row container-fluid main-content">
	<div class="col-sm-8 editor">
		<!--div class="text-center">
			<h4>Write Your Code Here!</h4>
		</div-->
		<div class="form">
			<div class="buttons">
		        <button class="button btn" id="htmlbutton" type="submit" name="html" onclick="htmleditor();">HTML <br>(index.html)</button>
		        <button class="button btn" id="cssbutton" type="submit" name="css" onclick="csseditor();">CSS <br>(style.css)</button>
		        <button class="button btn" id="jsbutton" type="submit" name="javascript" onclick="jseditor();">JavaScript <br>(script.js)</button>
		    </div>
		    <form method="post">
                <div>
                	<div class="active" id="htmlcode">
    	                <textarea name="html" rows="17" class="col-sm-12" style="background-color: #808080;font-size: 18px;">
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
    </head>
    <body>
        <h3>Your Output Will be display here!</h3>

        <script src="script.js"></script>
    </body>
</html>
        <?php
            }
        ?>
    	                </textarea>
                    </div>
                	<div class="notactive" id="csscode">
    	                <textarea name="css" rows="17" class="form-control" style="background-color: #808080;font-size: 18px;">                
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
                	<div class="notactive" id="jscode">
    	                <textarea name="js" rows="17" class="form-control" style="background-color: #808080;font-size: 18px;">                
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
                    <div><button id="run" class="btn btn-primary" type="submit" name="submit">RUN</button></div>
                </div>
            </form>
        </div>
	</div>
	<div class="col-sm output text-center">
		<h4>Output!</h4>
		<?php 
		 if (isset($_SESSION['username'])) {
		  	?>
		  	<iframe src="html.php" class="col-sm-12" style="margin-top: 20px;">
    	
            </iframe>
		  	<?php
		 }
		?>
	</div>
</div>


<?php
session_destroy();
?>

<script type="text/javascript">
	document.getElementById('htmlbutton').style.backgroundColor="#808080";
	function htmleditor() {
		document.getElementById('htmlcode').className="active";
		document.getElementById('csscode').className="notactive";
		document.getElementById('jscode').className="notactive";
		document.getElementById('htmlbutton').style.backgroundColor="#808080";
		document.getElementById('cssbutton').style.backgroundColor="blue";
		document.getElementById('jsbutton').style.backgroundColor="blue";
	}
	function csseditor() {
		document.getElementById('csscode').className="active";
		document.getElementById('htmlcode').className="notactive";
		document.getElementById('jscode').className="notactive";
		document.getElementById('cssbutton').style.backgroundColor="#808080";
		document.getElementById('htmlbutton').style.backgroundColor="blue";
		document.getElementById('jsbutton').style.backgroundColor="blue";
	}
	function jseditor() {
		document.getElementById('jscode').className="active";
		document.getElementById('htmlcode').className="notactive";
		document.getElementById('csscode').className="notactive";
		document.getElementById('jsbutton').style.backgroundColor="#808080";
		document.getElementById('htmlbutton').style.backgroundColor="blue";
		document.getElementById('cssbutton').style.backgroundColor="blue";
	}

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>