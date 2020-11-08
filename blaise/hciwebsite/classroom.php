
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
