<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TestMail</title>
</head>
<body>
    <h2>{{$details['title']}}</h1>
    <p>{{$details['workerName']}} has accepted your Working Around request!</p>
    <h4>Details about your reservation:</h6>
    <ul>
        <li>Worker: {{$details['workerName']}}</li>
        <li>Price: {{$details['service']->price}}€</li>
        <li>Description: {{$details['service']->description}}</li>
    </ul>
    <p>Thank you for using Working Around!</p>
</body>
</html>