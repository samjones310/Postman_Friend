<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
    <title>Unique id deatails</title>
    <style>
        body{
            background: #E9D460;
        }
        input{
            width: 250px;
            background: ;
            border:0px;
            height: 40px;
            padding: 10px;
            border-radius: 2%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Link your data</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4"></div>
            <div class="col-lg-4 col-md-4 box">
			<br>
			<br>
			<br>
			<form action="lin2.php" method="post">
                <input type="text" name="pid" id="pid" placeholder="Property Id"><br><br>
				<input type="text" name="dis" id="dis" placeholder="District"><br><br>
                <input type="text" name="sta" id="" placeholder="State"><br><br>
                <input type="text" name="pin" id="" placeholder="Pin code"><br><br>
                <input type="text" name="own" id="" placeholder="Owner name"><br><br>
                <!--<button class="btn btn-success">Link to</button>-->
				<h2><input type="submit" class="btn btn-success" value="Link to"></h2>
                <a href="">HELP</a>
            </div>
        </div>
    </div>
</body
</html>