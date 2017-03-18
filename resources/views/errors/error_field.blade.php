@if($errors->has($field))

    <p style="color: #8c0615">{{ $errors->first($field) }}</p>

@endif