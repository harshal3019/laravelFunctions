<!DOCTYPE html>
<html lang="en">
<head>
  <title>QUery Builder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Crud Operations</h2>
@if(Session::has('update_profile'))
<div class="alert alert-success">
  <p>{{Session::get('update_profile')}}</p>
</div>
@endif
  <form action="{{route('student.update')}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$data->id}}}" />

    <div class="form-group">
           <label for="name">Student Name:</label>
      <input type="text" class="form-control" id="student_name" placeholder="Enter Student Name" name="student_name" value="{{$data->student_name}}">
    </div>
    <div class="form-group">
      <label for="student_rno">Roll No:</label>
      <input type="text" class="form-control" id="student_rno" placeholder="Enter Roll No" name="student_rno" value="{{$data->student_rno}}">
    </div>
   <div class="form-group">
       <label for="address">Address:</label>
       <input type="text" class="form-control" id="student_address" placeholder="Enter Address" name="student_address" value="{{$data->student_address}}"/>
   </div>
    <button type="submit" class="btn btn-success">Update</button>
  </form>
</div>

</body>
</html>
