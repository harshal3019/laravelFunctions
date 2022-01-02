<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Batsman Records</title>
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
    <h1>{{$title}}</h1>
    <h2>{{$date}}</h2>
    
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Name</th>
            <th>Country</th>
            <th>Batting Style</th>
            <th>Profile Img</th>      
          </tr>
        </thead>
        <tbody>
            @foreach ($emp as $item)   
          <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->country}}</td>
            <td>{{$item->Batting_style}}</td>
            <td>
                <img src="{{ 'public\uploads\bastmen\.$item->profileImg' }}" alt="Profile" width="70px" height="70px" />
            </td>
          
        </tr>
          @endforeach
            </tbody>
      </table>
</body>
</html>