<?php 
session_start();
$dark = "false";
if(isset($_SESSION['color_mode']) AND $_SESSION['color_mode'] == "dark"){
	$dark = "true";
}
if(!isset($_SESSION['language'])) {
	$_SESSION['language'] = "fr";
}
function lang($msg_fr, $msg_en){

	if ($_SESSION['language'] == "fr") {

		echo $msg_fr;

	}elseif($_SESSION['language'] == "en"){

		echo $msg_en;
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page introuvable</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');
		*{
			font-family: Varela Round;
		}
		body{
			margin: 0;
			padding: 0;
			background: #F6F6F6;
			display: flex;
			justify-content: center
		}
		.error{
			margin: 22.5vh 0 0 0;
			height: 400px;
			width: 750px;
			background: #fff;
			-webkit-box-shadow: 5px 5px 26px -7px rgba(0,0,0,0.41); 
			box-shadow: 5px 5px 26px -7px rgba(0,0,0,0.41);
			display: flex;
			flex-direction: column;
			align-items: center;
		}
		h1{
			display: block;
			font-size: 160px;
			margin: 40px 0 0 0;
		}
		p{
			display: block;
			text-transform: uppercase;
			width: 90%;
			margin: 10px auto 0 auto;
			text-align: center;
			font-size: 20px;
		}
		a{
			margin: 40px 0 0 0;
			display: flex;
			flex-direction: column;
			text-align: center;
			justify-content: center;
			height: 50px;
			width: 200px;
			background: #5CBBDA;
			color: #fff;
			border: 1px solid #5CBBDA;
			text-decoration: none;
		}
		a:hover{
			background: transparent;
			color: #5CBBDA;
		}
		.color{
			color: #5CBBDA;
		}
		.button{
			display: block;
		}
		@media screen and (max-width: 950px){
			.error{
				width: 90%;
				min-height: 350px;
				height: 350px;
			}
			h1{
				font-size: 100px;
			}
		}
		<?php 

		if ($dark == "true") {
			?>
				*{
					color: #fff;
				}
				body{
					background: #272727;
				}
				.error{
					background: #5F5F5F;
				}
			<?php 
		}

		?>
	</style>
</head>
<body>

	<section class="error">
		<h1>4<span class="color">0</span>4</h1>
		<p><?php lang("LA PAGE QUE VOUS AVEZ DEMANDÉE n'a PAS était TROUVÉE","THE PAGE YOU REQUESTED WAS NOT FOUND"); ?></p>
		<a href="https://alex-marteau.com"><span class="button"><?php lang("Retourner sur le site","Return to the site"); ?></span></a>
	</section>

</body>
</html>