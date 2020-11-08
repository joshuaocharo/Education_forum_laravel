
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CLASSROOM REGISTRATION</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".btn").click(function(){
			  $("input[type='text'], textarea").val("");
			});
		});
	</script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styled.css') }}">
</head>
<body>
	
<div class="wrapper">
  <div class="content">
    <h1>CLASSROOM FORM</h1>
    <p>Join Thousand of other students just like you.</p>
  </div>
<form method="POST" action="classroomphp.php">
  <div class="form">

    <div class="top-form">
      <div class="inner-form">
        <div class="label">name</div>
        <input type="text" name="name" id="name"  placeholder="John"/>
      </div>
      <div class="inner-form">
        <div class="label">email</div>
        <input type="text" name="email" id="email"  placeholder="Example@gmail.com"/>
      </div>
      <div class="inner-form">
        <div class="label">phone</div>
        <input type="text" name="phone" id="phone"  placeholder="0712345678"/>
      </div>
    </div>

    <div class="middle-form">
      <div class="inner-form">
        <div class="label">Form</div>
        <input type="text" name="form" id="form" placeholder="Form IV"/>
      </div>
    </div>

    <div class="bottom-form">
      <div class="inner-form">
        <div class="label">Subject</div>
        <input type="text" name="subject" id="subject"   placeholder="Math, Chemistry..."/>
      </div>
    </div>
    <div>
      <input class="btn" type="submit" name="Join Now">
    </div>

  </div>
  </form>
</div>

</body>
</html>
