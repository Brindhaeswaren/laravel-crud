@extends('main')

@section('content')
<div class="container">
  <h2 class="text-center">View Student Records</h2>
           
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>City Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
      <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->first_name }}</td>
      <td>{{ $user->last_name }}</td>
      <td>{{ $user->city_name }}</td>
      <td>{{ $user->email }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>

@endsection('content')