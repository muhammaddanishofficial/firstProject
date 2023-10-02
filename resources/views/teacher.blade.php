<h1>Teacher Detail</h1>
@foreach($data as $id => $teacher)
<h3>Name: {{ $teacher->name }}</h3>
<h3>Eamil: {{ $teacher->email }}</h3>
<h3>Age: {{ $teacher->age }}</h3>
<h3>City: {{ $teacher->city }}</h3>
@endforeach