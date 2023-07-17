@if($errors->any())
    <div class="alert small p-2 alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all()  as $message)
                <li>
                    {{ $message }}
                </li>
            @endforeach
        </ul>
    </div>
@endif