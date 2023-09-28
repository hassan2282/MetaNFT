@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li class="bg-danger text-white rounded p-2">{{$error}}</li>
        @endforeach
    </ul>
@endif
