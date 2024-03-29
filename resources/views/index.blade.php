<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('css/auth.css')}}">
</head>

<body>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Welcome</h3>
                <p>Public Project Planning</p>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Login</h3>
                        <div class="row register-form">
                            <form action="{{route('auth.login')}}" method="post">
                                @csrf
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email *" value="" name="email"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *"
                                        value="" name="password"/>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <input type="submit" class="btnRegister" value="Login" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Register</h3>
                        <div class="row register-form">
                            <form action="{{route('auth.register')}}" method="post">
                                @csrf
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name *"
                                            value="" name="name"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email *"
                                            value="" name="email"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            placeholder="Phone *" value="" name="phone"/>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *"
                                            value="" name="password"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password *"
                                            value="" name="confirm_password"/>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="type">
                                            <option class="hidden" selected disabled>Please select user type *</option>
                                            <option>Application Users</option>
                                            <option>Executing Agency</option>
                                            <option>Ministry of Planning</option>
                                            <option>Executive Committee of the National Economic Council</option>
                                            <option>System Admin</option>
                                        </select>
                                    </div>
                                    <input type="submit" class="btnRegister" value="Register" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
