<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin log in page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('admin-assets/login.css')}}">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-4">
                <div class="card bx">
                   <div class="card-body">
                    <div class="card-title">
                        <h4>Log In as Admin</h4>
                        <p class="card-text small text-muted">Login with your username &amp;
                            password
                        </p>
                        <form method="post" action="{{route('auth.Login')}}">
                            @csrf
                            <div class="results">
                                @if(Session::get('fail'))
                                  <div class="alert alert-danger">
                                      {{Session::get('fail')}}
                                  </div>
                                  @endif
                            </div>
                            <div class="mb-3">
                                <input type="text" name="email" class="form-control form-control-sm" placeholder="username" required value="{{old('email')}}">
                                <span class="text-danger"@error('email') {{$message}} @enderror></span>
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control form-control-sm" placeholder="password" required>
                                <span class="text-danger"@error('password') {{$message}} @enderror></span>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-block btn-sm btn-success" value="Sign In">
                            </div>
                        </form>

                    </div>
                   </div>
                </div>

            </div>
        </div>
    </div>
  
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
</html>