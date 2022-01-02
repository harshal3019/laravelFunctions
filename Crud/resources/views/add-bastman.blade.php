    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Bastman Profile</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <section style="padding:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Add New Batsman
                            <button class="btn btn-info col-md-3" style="color: white;float: right;"><a href="{{route('bastman.list')}}">Bastman List</a></button>
                        </div>
                       
                        @if(Session::has('status'))
                        <div class="alert alert-success">
                          <p class="alert">{{Session::get('status')}}</p>
                        </div>
                        @endif
                       
                        <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{route('create.bastman')}}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" class="form-control" type="text" name="name">
                            </div>

                            <div class="form-group">
                                <label for="country">Country</label>
                                <input id="country" class="form-control" type="text" name="country">
                            </div>

                            <div class="form-group">
                                <label for="batting_style">Batting Style</label>
                                <input id="batting_style" class="form-control" type="text" name="Batting_style">
                            </div>
                            <div class="form-group">
                                <label for="profileImage">Image</label>
                                <input id="file" class="form-control" type="file" name="profileImg">
                    
                            </div>
                            <br>
                            <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            
    </body>
    </html>