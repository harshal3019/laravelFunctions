<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Student Listing</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  @if(Session::has('profile_delete'))
  <div class="alert alert-success">
    <p>{{Session::get('profile_delete')}}</p>
  </div>
  @endif
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Roll No</th>
        <th>Address</th>
        <th>View</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)   
      <tr>
        <td>{{$item->student_name}}</td>
        <td>{{$item->student_rno}}</td>
        <td>{{$item->student_address}}</td>
        <td><a href="/student/view/{{$item->id}}" class="btn btn-info">View</td>
          <td><a href="/edit/{{$item->id}}" class="btn btn-success">Update</a></td>
          <td><a href="/delete/{{$item->id}}" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
        </tbody>
  </table>
</div>

</body>
</html>
