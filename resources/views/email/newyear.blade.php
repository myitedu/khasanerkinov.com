<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div id="mymail">
    <h5>Dear {{$data['user']->name}},</h5>
    <pre>
    <p>The following user has sent you a message from your site.</p>
    <p>Name: {{$data['user']->name}}</p>
    <p>Email: {{$data['user']->email}}</p>
    <p>Subject: {{$data['subject']}}</p>
    <p>Body: {{$data['message']}}</p>
    </pre>
</div>
<style>
    body{
        background-color: palegreen;
    }
    .myimg{
        width: 100%;
    }

    #mymail{
        width: 80%;
        margin: 100px auto;
        background-color: antiquewhite;
        text-align: center;
    }

</style>
</body>
</html>
