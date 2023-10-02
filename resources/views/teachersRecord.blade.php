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
                <h2>Teachers Record List</h2>
                <a href=" {{ route('new')}}"  class="btn btn-success btn-sm">Add New</a>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    @foreach($data as $id => $teacher)
                        <tr>
                            <td>{{ $teacher->id }}</td>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->email }}</td>
                            <td>{{ $teacher->age }}</td>
                            <td>{{ $teacher->city }}</td>
                            <td><a href="{{ route('view.teacher',$teacher->id) }}" class="btn btn-primary btn-sm">View</a></td>
                            <td><a href="{{ route('delete.record',$teacher->id) }}" class="btn btn-danger btn-sm">Delete</a></td>
                            <td><a href="{{ route('update.page',$teacher->id) }}" class="btn btn-warning btn-sm">Update</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
     </div>   
</body>
</html>

<h3>
    
    
   
    
</h3>