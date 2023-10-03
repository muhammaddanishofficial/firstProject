<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Teachers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
     <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Admin Dashboard</h1>
                <h2>Hostels Record</h2>
                <a href=" {{ route('add')}}"  class="btn btn-success btn-sm">Add New</a>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Hostel Name</th>
                        <th>City</th>
                        <th>Vacancies</th>
                        <th>Price</th>
                        <th>View</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($data as $id => $hostel)
                        <tr>
                            <td>{{ $hostel->id }}</td>
                            <td>{{ $hostel->hostel_name }}</td>
                            <td>{{ $hostel->city }}</td>
                            <td>{{ $hostel->vacancies }}</td>
                            <td>{{ $hostel->price }}</td>
                            <td><a href="{{ route('view.hostel',$hostel->id) }}" class="btn btn-primary btn-sm">View</a></td>
                            <td><a href="{{ route('delete.hostel',$hostel->id) }}" class="btn btn-danger btn-sm">Delete</a></td>
                            <td><a href="{{ route('update.hostel.data',$hostel->id) }}" class="btn btn-warning btn-sm">Update</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
     </div>   
</body>
</html>