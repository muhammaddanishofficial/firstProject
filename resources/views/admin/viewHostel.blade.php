@foreach($data as $id => $hostel)
<li> {{ $hostel->id }}</li>
<li> {{ $hostel->hostel_name }}</li>
<li> {{ $hostel->city }}</li>
<li> {{ $hostel->vacancies }}</li>
<li> {{ $hostel->price }}</li>
<li> {{ $hostel->discription }}</li>
<li> {{ $hostel->address }}</li>
<li> {{ $hostel->phone }}</li>
<li> {{ $hostel->email }}</li>
@endforeach