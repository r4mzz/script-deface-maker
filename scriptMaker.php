<?php 

print "\n\n \033[93m
 ------------------------------------------------
 \033[92mIIIIIIIIIIIIIII                  IIIIIIIIIIIIIII
 IIIIIIIIIIIIIII                  IIIIIIIIIIIIIII
 IIIII                                      IIIII
 IIIII                                      IIIII
 IIIII -------- SCRIPT DEFACE MAKER ------- IIIII
 IIIII                                      IIIII
 IIIII           CODED BY MR.R4MZ           IIIII
 IIIII                                      IIIII
 IIIII                                      IIIII
 IIIII          THANKS TO MR.TENWAP         IIIII
 IIIII                                      IIIII
 IIIII                                      IIIII
 IIIIIIIIIIIIIII                  IIIIIIIIIIIIIII
 IIIIIIIIIIIIIII                  IIIIIIIIIIIIIII
 \033[93m------------------------------------------------
\n";

echo " \033[91m[+]\033[93m Enter your script title --> ";
$input_title=trim(fgets(STDIN));
if (empty($input_title)) {
	echo " \n\n\n--- >> Don't press enter before you fill it! << ---\n\n\n";
	exit(0);
}
echo "\n";
echo " \033[91m[+]\033[93m Enter your nick name --> ";
$name=trim(fgets(STDIN));
if (empty($name)) {
	echo " \n\n\n--- >> Don't press enter before you fill it! << ---\n\n\n";
	exit(0);
}
echo "\n";
echo " \033[91m[+]\033[93m Enter your first paragraph message --> ";
$first=trim(fgets(STDIN));
if (empty($first)) {
	echo " \n\n\n--- >> Don't press enter before you fill it! << ---\n\n\n";
	exit(0);
}
echo "\n";
echo " \033[91m[+]\033[93m Enter your second paragraph message --> ";
$second=trim(fgets(STDIN));
if (empty($second)) {
	echo " \n\n\n--- >> Don't press enter before you fill it! << ---\n\n\n";
	exit(0);
}
echo "\n";
echo " \033[91m[+]\033[93m Enter your third paragraph message --> ";
$third=trim(fgets(STDIN));
if (empty($third)) {
	echo " \n\n\n--- >> Don't press enter before you fill it! << ---\n\n\n";
	exit(0);
}
echo "\n";
echo " \033[91m[+]\033[93m Enter your thanks greeting message --> ";
$greeting=trim(fgets(STDIN));
if (empty($greeting)) {
	echo " \n\n\n--- >> Don't press enter before you fill it! << ---\n\n\n";
	exit(0);
}
echo "\n";
echo " \033[91m[+]\033[93m Enter your script deface file name --> " ;
$file=trim(fgets(STDIN)) ;
 if (empty($file)) {
	echo " \n\n\n--- >> Don't press enter before you fill it! << ---\n\n\n";
	exit(0);
}
echo "\n\n\n\n Copy your html script below, and paste in your html file!\n\n\n\n \e[1m \033[92m";
 ?>

	<!DOCTYPE html>
	<html >
	<head>
		<title><?php echo "$input_title"; ?></title>
		
		<style type="text/css">
			body{
				text-align: center;
				background-color: black;
				
			}
			img{
				text-align: center;
			}
			h1{
				color: red;
				text-align: center;
				font-family: Stencil;
			}
			h3{
				color: white;
				text-align: center;
			}h4{
				color: grey;
				text-align: center;
			}
			h5{
				color: white;
				text-align: center;
			}#kotak{
				width: 100%;
				height: 30px;
				background-color: red;
			}#text{
				padding-top: 5px;
				color: white;
			}
		</style>
	</head>
	<body>
		
		<br><br>
		<img src="https://media.giphy.com/media/MJttD4oi3Hg4M/giphy.gif">
	<h1><b>TOUCHED BY  <?php echo "$name";?></b></h1><br>
	<h3><?php echo "$first"; ?></h3>
	<h4><?php echo "$second"; ?></h4>
	<h5><?php echo "$third"; ?></h5><br><br>
	<div id="kotak">
	<marquee id="text">[ THANKS TO ] --- [ <?php echo "$greeting"; ?> ]</marquee></div>
	</body>
	</html>

<?php 
echo "\n\n\n\n";
$result = fopen("$file.html", "a+");
fwrite($result, "");
fclose($result);
?>