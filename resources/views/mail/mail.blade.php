<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>mail</title>
</head>
<body>
    <h1>You have a new messsage from Car rental</h1>
    
        <h2>First Name:<span>{{$request['fname']}}<span></h2>
            <h2>Last Name:<span>{{$request['lname']}}<span></h2>
            <h2>Email:<span>{{$request['email']}}<span></h2>
                <h2>Phone:<span>{{$request['phone']}}<span></h2>
                    <h2>Destination:<span>{{$request['destination']}}<span></h2>
                        <h2>Pick Up Place:<span>{{$request['pickup']}}<span></h2>
                            <h2>Pick Up time:<span>{{$request['time']}}<span></h2>
</body>                         <h2>age:<span>{{$request['age']}}<span></h2>
</html>