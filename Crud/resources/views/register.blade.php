<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
    .parsley-errors-list li{
        list-style: none;
        color: red;
    }
 </style>

</head>
<body>
    <section style="padding-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Register
                        </div>
                        <div class="card-body">
                            <form id="registerForm" method="post" action="{{route('register.create')}}">
                                @csrf
                                <div class="form-group">
                                    <div for="name">Name</div>
                                    <input type="text" name="name" class="form-control" id="name" required data-parsley-pattern="[a-zA-z]+$" data-parsley-trigger="keyup"/>
                                </div>
                                <div class="form-group">
                                    <div for="Email">Email</div>
                                    <input type="text" name="email" class="form-control" id="email" required data-parsley-type="email" data-parsley-trigger="keyup"/>
                                </div>

                                <div class="form-group">
                                    <div for="Password">Password</div>
                                    <input type="text" name="password" class="form-control" id="password" required data-parsley-length="[6,12]" data-parsley-trigger="keyup"/>
                                </div>

                                <div class="form-group">
                                    <div for="cpassword">Confirm Password</div>
                                    <input type="text" name="cpassword" class="form-control" id="cpassword" required data-parsely-equalto="#password" data-parsley-trigger="keyup"/>
                                </div>

                                <div class="form-group">
                                    <div for="phone">Phone</div>
                             <input type="text" name="phone" class="form-control" id= "phone" required data-parsley-pattern="[0-9]+$" 
                             data-parsley-length="[10,13]" data-parsley-trigger="keyup"/>
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
         <script>
             $(function(){
                $("#registerForm").parsley();
             });
        </script>
</body>
</html>