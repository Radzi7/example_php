@props(['post'=> null])


<x-form {{ $attributes }}>
        <x-form-item>
            <x-label required>{{ __('Название поста') }}</x-label>
            <x-input name="title" autofocus />
            <x-error name="title"/>
            {{-- <x-input name="title" value="{{ $post->title ?? '' }}" autofocus /> --}}
        </x-form-item>

        <x-form-item>
            <x-label required>{{ __('Содержание поста') }}</x-label>
            <x-trix name="content"/>
            <x-error name="content"/>
            {{-- <x-trix name="content" value="{{ $post->content ?? '' }}" /> --}}
        </x-form-item>

        <x-form-item>
            <x-label required>{{ __('Дата публикации') }}</x-label>
            <x-input name="published_at" placeholder="dd.mm.yyyy"/>
            <x-error name="published_at"/>
        </x-form-item>

        <x-form-item>
            <x-checkbox name='published'>
                {{__('Опубликовано')}}
            </x-checkbox>
        </x-form-item>
        
        {{ $slot }}
    </x-form>