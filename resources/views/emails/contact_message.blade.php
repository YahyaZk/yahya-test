<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background:#eee;font-family:Arial, Helvetica, sans-serif ">
  <div style="with: 600px; margin:30px auto; padding:20px; border:20px solid #d2d2d2; background:#fff  ">
        <h3>Dear Yahya,</h3>
        <p>Hope this email find yoy will</p>
        <br>
        <p>There is new contact us data as bellow</p>
        <p><b>Name</b>:  {{ $data ['lname'] }}</p>
        <p><b>Email</b>: {{ $data ['email'] }}</p>
        <p><b>Phone</b>: {{ $data ['phone'] }}</p>
        <p><b>Message</b>: {{ $data ['message'] }}</p>
        <br>
        <br>
        <p>Best Regards</p>
  </div>



</body>
</html>
