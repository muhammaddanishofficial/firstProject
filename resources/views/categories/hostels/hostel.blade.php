<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        .card-container{
            margin:50px;
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Create three equal columns */
            gap: 20px; /* Add some space between the cards */
        }
        .card{
            border: solid 1px black;
            width: 250px;
            height: 250px;
        }
        h1{
            text-align:center;
        }
        h4{
            margin: 10px 5px;
        }
        h3{
            margin:15px 0;
            text-align:center;
        }
        a{
            text-decoration:none;
            color:black;
        }
    </style>
</head>
<body>
<h1>Hostels In Jamshoro</h1>
<div class="card-container">
    @foreach($data as $id => $hostel)
        <a href="{{ route('hostel',$hostel->hostel_name) }}">
        <div class="card">
            <h3>{{ $hostel->hostel_name }}</h3>
            <h4>{{ $hostel->discription }}</h4>
            <h4>City:{{ $hostel->city }}</h4>
            <h4>Price:{{ $hostel->price }}</h4>
            <h4>Vacancies:{{ $hostel->vacancies }}</h4>
            <h4>Phone:+92{{ $hostel->phone }}</h4>
        </div>
        </a>
    @endforeach
</div>
</body>
</html>