<!DOCTYPE html>
<html lang="en">
<head>
  <title>Batsman Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-14/css/all.min.css"
   integrity="sha512-YVm6dLGBSj6KG3uUb1L5m25JXXYrd9yQ1P7RKDSstzYiPxI2vYLCCGyfrlXw3YcN/EM3UJ/IAqsCmfdc6pk/Tg==" 
   crossorigin="anonymous" referrerpolicy="no-referrer" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-14/css/fontawesome.min.css" 
   integrity="sha512-PpvdURzin61ErCyeGBvEKy7EKX9A5MvKLS3zVWUxoFciqP4+3pqKTmLNwQ3nYQuVv9QU0ObG/dNGKFDX9OU/4g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Batsman Listing {{$time}}</h2><br>
  <hr>
  <button class="btn btn-info" style="float: right;"><a href="{{route('create.bastman')}}"><i class="fas fa-plus"></i>Add New</a></button>
  <button class="btn btn-success"><a href="{{route('export.all')}}"><i class="fas fa-download"></i>PDF</a></button>&nbsp; 
  <button class="btn btn-warning"><a href="{{route('export.excel')}}"><i class="far fa-file-excel"></i>Excel</a></button> &nbsp; 
  <button class="btn btn-success"><a href="{{route('export.csv')}}"><i class="fas fa-file-csv"></i>CSV</a></button><br>
  <button class="btn btn-info "><a href="{{route('current.time')}}">Time</a></button>
  <hr>
  @if(Session::has('status'))
  <div class="alert alert-success">
    <p>{{Session::get('status')}}</p>
  </div>
  @endif
  <br><br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Country</th>
        <th>Batting Style</th>
        <th>Profile Img</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>PDF</th>
      
      </tr>
    </thead>
    <tbody>
        @foreach ($bastman as $item)   
      <tr id="bid{{$item->id}}">
        <td>{{$item->name}}</td>
        <td>{{$item->country}}</td>
        <td>{{$item->Batting_style}}</td>
        <td>
            <img src="{{asset('uploads/bastmen/'.$item->profileImg)}}" alt="Profile" width="70px" height="70px" />
        </td>
        <td><a href="/edit-bastman/{{$item->id}}" class="btn btn-info">Edit</td>
          {{-- <td><a href="/edit/{{$item->id}}" class="btn btn-success">Update</a></td> --}}
         <!--  <td><a href="/delete-bastman/{{$item->id}}" class="btn btn-danger">Delete</a></td>
 -->    
 <td><a href="javascript:void(0)" class="btn btn-danger" onclick="deleteBatsman({{$item->id}})">Delete</a></td>

   <td><center><a href="/export-pdf/{{$item->id}}"><i class="fas fa-download"></i></a></center></td>
    
      </tr>
      @endforeach
        </tbody>
  </table>
  {{$bastman->links()}}
  
</div>
<script>
         function deleteBatsman(id)
         {

             if(confirm("Do you really want to delete this record?"))
             {
                 $.ajax({
                     url:'delete-bastman/'+id,
                     type:'DELETE',
                    data: {
                 "_token": "{{ csrf_token() }}",
                     "id": id
                   },
                     success:function(response)
                     {
                        $("#bid"+id).remove();
                     }
                 });
             }
         }
         </script>
</body>
</html>
