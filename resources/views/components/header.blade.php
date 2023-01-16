<div>
    <h1>Header</h1>
    <h2>Hi {{$name}}</h2>
    <h2>The following fruits are available:</h2>
    <ul>
        @foreach ($fruits as $fruit)
            <li>{{$fruit}}</li>
        @endforeach
    </ul>
</div>