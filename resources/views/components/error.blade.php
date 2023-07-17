@props(['name'=>''])

@error($name)
    <div class="pt-1 small text-danger">
        {{ $message }}
    </div>
@enderror