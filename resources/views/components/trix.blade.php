{{-- <input  type="text" {{ $attributes->class([
    'form-control',
]) }}> --}}

<input {{$attributes->class([
    'form-control',
])->merge([
    'type'=>'text',
])
}}>