{{--    {{var_dump($errors)}}--}}
<!-- Validation Error div -->
@if($errors->any())
    <div class="alert alert-danger" role="alert">
        <ol>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ol>
    </div>
@endif