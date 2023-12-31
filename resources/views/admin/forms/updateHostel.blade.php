<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Teachers From</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Update Hostel</h1>
                <form action="{{ route('update.hostel', $data->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Hostel Name</label>
                        <input type="text" value="{{ $data->hostel_name }}" class="form-control" name="hostelName">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <input type="text" value="{{ $data->city }}" class="form-control" name="city">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Vacancies</label>
                        <input type="number" value="{{ $data->vacancies }}" class="form-control" name="vacancies">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="text" value="{{ $data->price }}" class="form-control" name="price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Discription</label>
                        <input type="text" value="{{ $data->discription }}" class="form-control" name="discription">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" value="{{ $data->address }}" class="form-control" name="address">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" value="{{ $data->phone }}" class="form-control" name="phone">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" value="{{ $data->email }}" class="form-control" name="email">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>    
</body>
</html>