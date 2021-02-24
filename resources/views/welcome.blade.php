<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
        body{
			margin: 0;
			padding: 0;
			text-align: center;
			font-family: sans-serif;
			min-height: 100vh;
		}
		div{
			width: 500px;
			position: absolute;
			top: 50%;
			left: 50%;
			background-color: #fff;
			transform: translate(-50%, -50%);
			padding: 20px;
			border-radius: 10px;
			box-shadow: 1px 1px 20px #000000;
		}
		h2{
			font-size: 30px;
			font-weight: 600;
		}
		#btn{
			font-family: inherit;
			margin-top: 10px;
			border: none;
			color: #fff;
			background-image: linear-gradient(60deg,#000000, #423c3c);
			width: 150px;
			padding: 10px;
			border-radius: 30px;
			outline: none;
			cursor: pointer;
		}
        </style>
    </head>
    <script type="text/javascript">
		function BMI() {
			var h=document.getElementById('h').value;
			var w=document.getElementById('w').value;
			var bmi=w/(h/100*h/100);
			var bmio=(bmi.toFixed(2));

			document.getElementById("result").innerHTML="BMI Kamu adalah " + bmio;
		}
	</script>
    <body>
        <div class="flex-center position-ref full-height">
            <h2>BMI Calculator</h2>
			<p class="text">Tinggi</p>
			<input type="text" id="h">
			<p class="text">Berat</p>
			<input type="text" id="w">
			<p id="result"></p>
			<button id="btn" onClick="BMI()">Calculate</button>
			<p id="info">Masukkan Tinggi [cm] dan Berat [kg]</p>
        </div>
    </body>
</html>
