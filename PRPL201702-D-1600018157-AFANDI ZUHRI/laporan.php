<html>
    <head>
        <title>LAPORAN</title>
        <script src="Chart.bundle.js"></script>
        <style type="text/css">
            .container {
                width: 40%;
                margin: 10px auto;
            }
			body{
				background-color:white;
				background-position:center;
				background-size:cover;
			}
			ul{
				border-radius: 20px;
				margin:10;
				padding:5;
				overflow:hidden;
				background:rgba(0,204,204, 0.8);
			}
			li{
				list-style-type:none;
				float:left;
			}
			li a{
				color:white;
				font-family:arial;
				display:block;
				color:white;
				text-align:center;
				padding:14px 16px;
				text-decoration:none;
			}
			li a:hover{
				background:rgba(0,204,204, 0.8);
				color:white;
			}
        </style>
    </head>
    <body>
	<ul>
		<li><a href="interface.html">BERANDA</a></li>
		<li><a href="pilihinput.php">RESERVASI</a></li>
		<li><a href="output2.php">KAMAR</a></li>
		<li><a href="bukutamu.php">BUKU TAMU</a></li>
		<li><a href="laporan.php">LAPORAN</a></li>
		</ul>
        <div class="container">
            <canvas id="myChart" width="100" height="90"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Standar room", "Classic room", "Double room", "Meeting room"],
                    datasets: [{
                            label: '#of Votes',
                            data: [1, 1,1, 1  ],
                            backgroundColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(154, 162, 235, 1)',
                                'rgba(250, 200, 70, 1)',
                                //'rgba(75, 192, 192, 1)',
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(154, 162, 235, 1)',
                                'rgba(250, 200, 70, 1)',
                                //'rgba(75, 192, 192, 1)',
                            ],
                            borderWidth: 0
                        }]
                },
                options: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    
                }
            });
        </script>
    </body>
</html>