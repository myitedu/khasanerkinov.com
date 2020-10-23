<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A list of all airports in the world!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid">

    <div id="airports">
        <h5>World Airports</h5>
        <hr>
        <div>
            <form>
                <p>
                    <label>
                        Search:  <input value="{{$keyword}}" name="keyword" placeholder="Your Keyword">
                    By
                        <select name="by">
                            <option value="country">Country</option>
                            <option value="city">City</option>
                            <option value="name">Name</option>
                            <option value="anywhere">Anywhere</option>
                        </select>
                    </label>
                    <button type="submit">GO</button>
                </p>
            </form>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>City</th>
                <th>Country</th>
            </tr>

            @foreach($airports as $airport)

            <tr>
                <td>{{$airport->id}}</td>
                <td>{{$airport->name}}</td>
                <td>{{$airport->city}}</td>
                <td>{{$airport->country}}</td>
            </tr>

            @endforeach

        </table>
    </div>

</div>
<style>
    th{
        background-color: darkmagenta;
        color: yellow;
    }


    tr:nth-child(even){
        background-color: #ddf8dd !important;
    }

    tr:hover{
        background-color: #dbe6ec !important;
        color: #535304 !important;
        cursor: pointer;
    }

</style>
</body>
</html>
