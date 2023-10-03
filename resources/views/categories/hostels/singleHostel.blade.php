<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($data as $id => $hostel)
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
</body>
</html>