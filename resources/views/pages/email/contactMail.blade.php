<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Template</title>
</head>
<body>


    @if (isset($details['name']) && $details['email'] && $details['address'] && $details['phone'])
        <p>Name: {{$details['name']}}</p>
        <p>Email: {{$details['email']}}</p>
        <p>Address: {{$details['address']}}</p>
        <p>Phone: {{$details['phone']}}</p>
    @endif

    @if(isset($content))
        <p>Message: {{$content}}</p>
    @else
        <p>Message: {{$details['notes']}}</p>
    @endif
</body>
</html>
