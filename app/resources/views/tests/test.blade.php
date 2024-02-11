test.blade.php<br>

@foreach($values as $value)
    <hr>
    <div>
        <p>{{ $value->id }}</p>
        <p>{{ $value->text }}</p>
    </div>
    <hr>
@endforeach
