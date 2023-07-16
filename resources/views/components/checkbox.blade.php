@php($id = Str::uuid())

<div class="form-check">
    <input class="form-check-input" {{ $attributes->merge([
      'value' => '1',
      'checked' => !! old($attributes->get('name')),
    ]) }} type="checkbox"  id="{{ $id }}" >

    <label class="form-check-label" for="{{ $id }}">
      {{ $slot}}
    </label>
 </div>