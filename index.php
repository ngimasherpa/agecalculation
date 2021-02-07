<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
      
      .form{
        text-align: center;
        font-size: 20px;
      }
      #submits{ 
        align-items: center;
        border: 1px solid gray;
        font-size: 30px;
      }
      
    </style>
</head>
<body>
 
<form action="calculation.php" method="POST" class="form">
  <fieldset>
  <legend>  <h2>AGE Calculation</h2></legend>

  <div >
<span><b>Enter Your Birthday Date:</b></span> <input type="date" name="bdate" required>
<br/>
<br/>
 <input type="submit" name="submit" id="submits">
 </div>
 </fieldset>
 
</form>
</body>
</html>
