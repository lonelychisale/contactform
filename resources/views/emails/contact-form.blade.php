<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Email</title>
</head>
<body>
    <h2 style="text-transform:capitalize">contact form  email from {{$cf_senderemail}}</h2>
    
    <h3 style="text-transform:capitalize">{{ $cf_subject }}</h3>
    <p>{{ $cf_message }}</p>
    <p>regards,<br>{{$cf_name}} </p>


   
</body>
</html>
