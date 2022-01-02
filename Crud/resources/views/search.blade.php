<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search AutoCompleted</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
   <section style="padding-top:60px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Search Products
                    </div>
                        <div class="card-body" style="padding-top: 30px; padding-bottom:40px;padding-left:30px;padding-right:30px">
                            <form>
                                <div class="form-group">
                                    <input id="text" class="form-control typehead" type="text" placeholder="Search.."/>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
   </section>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"
     integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>  
    
    <script>
        var path = "{{route('product.autocomplete')}}"

        $('input.typehead').typehead({
            source: function(terms,process){
                return $.get(path,{terms:terms},function(data){
                    return process(data);
                })
            }
        })
        </script>
</body>
</html>