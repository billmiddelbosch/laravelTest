<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD woning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Voeg woning toe
                    </div>
                </div>
                <div class="card-body">
                    @if (Session::has('woning-added')) 
                        <div class="alert alert-succes" role="alert">{{Session::get('woning-added')}}</div>
                    @endif
                    <form method=POST action="{{route('woning-addwoningpost')}}"  >
                        @csrf <!-- toevoeging nodig om sessie te behouden -->
                        <div class="form-floating">
                          <input type="text" class="form-control" id="straat" name="straat" placeholder="straat">
                          <label for="straat">Straat</label>
                          @error('straat')
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="form-floating">
                          <input type="text" class="form-control" id="plaats" name="plaats" placeholder="plaats">
                          <label for="plaats">Plaats</label>
                          @error('plaats')
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
                
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>