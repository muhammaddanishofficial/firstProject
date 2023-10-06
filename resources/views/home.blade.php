<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhondlo</title>
</head>
<body>
    <form action="{{ route('search') }}" method="GET">
        <select name="category">
            <!-- Populate this dropdown with available categories -->
            <option value="hostel">Hostel</option>
            <option value="hotels">Hotels</option>
            <!-- Add more category options if needed -->
        </select>
        <select name="city">
            <!-- Populate this dropdown with available cities -->
            <option value="Jamshoro">Jamshoro</option>
            <option value="Hyderabad">Hyderabad</option>
            <!-- Add more city options if needed -->
        </select>
        <button type="submit">Search</button>
    </form>

</body>
</html>