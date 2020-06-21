<!DOCTYPE html>
<html>
	<head>
		<title>create</title>
	<style>
		input[type=text], select {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}

		input[type=submit] {
		  width: 100%;
		  background-color: #4CAF50;
		  color: white;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  border-radius: 4px;
		  cursor: pointer;
		}

		input[type=submit]:hover {
		  background-color: #45a049;
		}

		div {
		  border-radius: 5px;
		  background-color: #f2f2f2;
		  padding: 20px;
		}
	</style>
	</head>
	<body>

	<h3>創建帳號</h3>

		<div>
		  <form action="{{url('created')}}" method="post">
		  	@csrf
			<label for="account">帳號</label>
			<input type="text" id="account" name="ac">

			<label for="password">密碼</label>
			<input type="text" id="password" name="psd">
            	
            <label for="nickname">暱稱</label>
			<input type="text" id="nickname" name="name">

			<input type="submit" value="Submit">
		  </form>
		</div>

	</body>
</html>