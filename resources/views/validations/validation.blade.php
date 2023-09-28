@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li class="text-white bg-danger rounded p-2">
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif
