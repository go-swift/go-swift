<html>
		<head>
			<title>Starbucks pass creator - PHP class demo</title>
			
			<!-- Reusing some CSS from another project of mine -->
			<link href="http://www.lifeschool.nl/static/bootstrap.css" rel="stylesheet" type="text/css" />
			<meta name="viewport" content="width=320; user-scalable=no" />
			<style>
				.header { background-color: #CCC; padding-top: 30px; padding-bottom: 30px; margin-bottom: 32px; text-align: center; }
				.logo { width: 84px; height: 84px; margin-bottom: 20px; }
				.title { color: black; font-size: 22px; text-shadow: 1px 1px 1px rgba(0,0,0,0.1); font-weight: bold; display: block; text-align: center; }
				.userinfo { margin: 0px auto; padding-bottom: 32px; width: 280px;}
				form.form-stacked { padding: 0px;}
				legend { text-align: center; padding-bottom: 25px; border-bottom: none; clear: both;}
				input.xlarge { width: 280px; height: 26px; line-height: 26px;}
			</style>
		</head>
		<body>
			<div class="header">
				<img class="logo" src="logo_web.png" />
				<span class="title">Starbucks</span>
			</div>
			<div class="userinfo">
				<form action="index.php" method="post" class="form-stacked">
            <fieldset>
                <legend style="padding-left: 0px;">Please enter your info</legend>
                                                
                <div class="clearfix">
                	<label style="text-align:left">Nickname</label>
                	<div class="input">
                		<input class="xlarge" name="name" type="text" value="Johnny's card" />
                	</div>
                </div>
                                
                <br /><br />
                <center><input type="submit" class="btn primary" value=" Create pass &gt; " /></center>
            </fieldset>
        </form>

			</div>
		</body>
	</html>