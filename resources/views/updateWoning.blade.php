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
                        Update woning
                    </div>
                </div>
                <div class="card-body">
                    @if (Session::has('woning-updated')) 
                        <div class="alert alert-succes" role="alert">{{Session::get('woning-updated')}}</div>
                    @endif
                    <form method=POST action="{{route('woning-updatewoningpost')}}">
                        @csrf <!-- toevoeging nodig om sessie te behouden -->
                        <input type="hidden" id="id" value="{{$woning->id}}" name="id">
                        <div class="form-floating">
                          <input type="text" class="form-control" id="straat" name="straat" value="{{$woning->straat}}">
                          <label for="straat">Straat</label>
                          @error('straat')
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="form-floating">
                          <input type="text" class="form-control" id="plaats" name="plaats" value="{{$woning->plaats}}">
                          <label for="plaats">Plaats</label>
                          @error('plaats')
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Update</button>
                    </form>
                </div>
                <a href="/woning" class="btn">Back</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>