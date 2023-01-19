<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Woning overzicht</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>


    <section>
        <div class="container">                
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Woning Overzicht</div>
                        <div class="card-body">
                            @if (Session::has('woning-deleted')) 
                                <div class="alert alert-succes" role="alert">{{Session::get('woning-deleted')}}</div>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Plaats</th>
                                        <th>Straat</th>
                                        <th>Actions</th>
                                    <tr>
                                </thead>
                                <tbody>
                                    @foreach ($woning as $item)
                                    <tr>
                                        <td>{{$item->plaats}}</td>
                                        <td>{{$item->straat}}</td>
                                        <td> <a href="/woning/{{$item->id}}" class="btn btn-success">details</a> </td>
                                        <td> <a href="/woning/delete/{{$item->id}}" class="btn btn-danger">delete</a> </td>
                                        <td> <a href="/woning/update/{{$item->id}}" class="btn btn-outline-primary">update</a> </td>
                                    </tr>
                                    @endforeach                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>