<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- CSS and JS from https://getbootstrap.com/docs/5.3/getting-started/introduction/ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md6">
                <div class="card">
                    <div class="card-header">
                        Please sign in
                    </div>
                </div>
                <div class="card-body">
                    <form method=POST action="{{route('login-submit')}}"  >
                        @csrf <!-- toevoeging nodig om sessie te behouden -->
                        <div class="form-floating">
                          <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                          <label for="floatingInput">Email address</label>
                          @error('email')
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="form-floating">
                          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                          <label for="floatingPassword">Password</label>
                          @error('password')
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
                
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>