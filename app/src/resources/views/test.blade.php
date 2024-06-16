てすとだよ<br>

<form method="post" action="/exec">
    @csrf
    <label>
        <input type="text" name="name">
    </label>
    <label>
        <input type="text" name="password">
    </label>
    <input type="submit" value="送信">
</form>

@foreach($accounts as $account)
    ID:{{$account['name']}}  PASS:{{$account['password']}}<br>
@endforeach
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
