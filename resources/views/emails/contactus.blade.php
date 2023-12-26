<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <span >Hi, </span> <br>
        <span> You have received a new contact query from Surveillance UK, details are below</span> <br> <br>
        <span style="font-weight:bold;">Full Name : </span> <span>{{$formData['first_name']}} {{$formData['first_name']}}</span> <br>
        <span style="font-weight:bold;">Email Address: </span> <span>{{$formData['email_address']}}</span> <br>
        <span style="font-weight:bold;">Contact: </span> <span>{{$formData['phone']}}</span> <br>
        <span style="font-weight:bold;">Message: </span> <span>{{$formData['message']}}</span> <br><br>
        <span>Regards,</span> <br>
        <span>Surveillance UK</span>
    </section>
</body>
</html>