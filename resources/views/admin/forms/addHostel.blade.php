<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Teachers From</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Add New Hostel</h1>
                <form action="{{ route('add.hostel') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Hostel Name</label>
                        <input type="text" class="form-control" name="hostelName">
                    </div>
                    <!-- <div class="mb-3">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" name="city">
                    </div> -->
                    <label class="form-label">Category</label><br>
                    <select name="category" class="mb-3" >
                    <!-- Populate this dropdown with available categories -->
                    <option value="1">Hostel</option>
                    <option value="2">Hotels</option>
                    <!-- Add more category options if needed -->
                    </select><br>
                    <label class="form-label">City</label><br>
                    <select name="city" class="mb-3">
                        <!-- Populate this dropdown with available cities -->
                        <option value="1">Jamshoro</option>
                        <option value="2">Hyderabad</option>
                        <!-- Add more city options if needed -->
                    </select>
                    <div class="mb-3">
                        <label class="form-label">Vacancies</label>
                        <input type="number" class="form-control" name="vacancies">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" class="form-control" name="price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Discription</label>
                        <input type="text" class="form-control" name="discription">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="phone" class="form-control" name="phone">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Slug</label>
                        <input type="slug" class="form-control" name="slug">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>    
</body>
</html>