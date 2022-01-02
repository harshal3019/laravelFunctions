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
  <h2>Batsman Listing</h2><br>
  <hr>
  <a href="#" class="btn btn-success" data-toggle="modal" data-target="#teacherModal">Add New</a></button>
  {{-- <button class="btn btn-success"><a href="{{route('export.all')}}"><i class="fas fa-download"></i>PDF</a></button>&nbsp; 
  <button class="btn btn-warning"><a href="{{route('export.excel')}}"><i class="far fa-file-excel"></i>Excel</a></button> &nbsp; 
  <button class="btn btn-success"><a href="{{route('export.csv')}}"><i class="fas fa-file-csv"></i>CSV</a></button><br> --}}
  <hr>
  @if(Session::has('status'))
  <div class="alert alert-success">
    <p>{{Session::get('status')}}</p>
  </div>
  @endif
  <br><br>
  <table class="table table-bordered" id="teacherTable">
    <thead>
      <tr>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($teacher as $item)   
      <tr id="tid{{$item->id}}">
        <td>{{$item->firstname}}</td>
        <td>{{$item->lastname}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->phone}}</td>
        
        <td><a href="#" class="btn btn-info">Edit</td>
        
          <td><a href="javascript:void(0)" class="btn btn-danger" onclick="deleteTeacher({{$item->id}})">Delete</a></td>
      </tr>
      @endforeach
        </tbody>
  </table>
  {{-- {{$bastman->links()}} --}}

 
 <!-- Modal -->
 <div class="modal fade" id="teacherModal" role="dialog">
   <div class="modal-dialog">
   
     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Add New Teacher</h4>
       </div>
       <div class="modal-body">
         <form id="teacherForm">
             @csrf
             <div class="form-group">
                 <label for="FirstName">First Name</label>
                 <input type="text" class="form-control" id="firstname"/>
             </div>
             <div class="form-group">
                <label for="LirstName">Last Name</label>
                <input type="text" class="form-control" id="lastname"/>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email"/>
            </div>
            <div class="form-group">
                <label for="Phone">Phone</label>
                <input type="text" class="form-control" id="phone"/>
            </div>

            <button type="submit" class="btn btn-primary">SUbmit</button>
         </form>
       </div>
      
     </div>
     
   </div>
 </div>
 
  
</div>
        <script>
            $("#teacherForm").submit(function(e){
                e.preventDefault();

                let firstname = $("#firstname").val();
                let lastname = $("#lastname").val();
                let email = $("#email").val();
                let phone = $("#phone").val();
                let _token = $("input[name=_token]").val();


                $.ajax({

                    url: "{{route('teacher.add')}}",
                    type: "POST",
                    data:{
                        firstname:firstname,
                        lastname:lastname,
                        email:email,
                        phone:phone,
                        _token:_token
                    },
                    success:function(response)
                    {
                        if(response)
                        {
                            $("#teacherTable tbody").prepend('<tr><td>'+response.firstname+'</td><td>'+response.lastname+'</td><td>'+response.email+'</td><td>'+response.email+'</td><td>'+response.phone+'</td></tr>');
                            $("#teacherForm")[0].reset();
                            $("#teacherModal").modal('hide');
                        }
                    }
                })
            });
        
     </script>
     <script>
         function deleteTeacher(id)
         {
             if(confirm("Do you really want to delete this record?"))
             {
                 $.ajax({
                     url:'delete-teacher/'+id,
                     type:'DELETE',
                     data:{
                         _token : $("input[name=_token]").val()
                     },
                     success:function(response)
                     {
                        $("#tid"+id).remove();
                     }
                 });
             }
         }
         </script>
</body>
</html>
