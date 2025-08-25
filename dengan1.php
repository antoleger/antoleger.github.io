<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Penjumlahan dengan Satu</title>

	<style>
		body{
			font-family: arial, sans-serif;
			text-align: center;
		}

		#jumlah{
			font-size: 150px;	
		}		

		#kotak {
			top: 0px;
			width: 100%;
			height: 800px;
			position: absolute;
			opacity: 0%;
		}		
	</style>

	<script>
        document.addEventListener('keydown', function(event) {
            if (event.key === "Enter") {
                window.location.reload();
            }
        });
    </script>

</head>

<body>
		<!-- <button id="tombol" onclick="window.location.reload();">PENJUMLAHAN</button> -->
	
		<div id="jumlah">
			<?php
				$p = 1;
				$q = rand(0,10);
				// $r = ($p)." "."x"." ".($q)." "."="." ".($p*$q);
	
				echo "<h1> $p + $q </h1>";
 			?>
		</div>

		<div id="kotak" onclick="window.location.reload();"></div>
		


</body>
</html>