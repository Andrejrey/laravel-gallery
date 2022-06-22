@extends('layouts.app')
@section('content')
    <h1>Update Biography</h1>

    <x-form action="{{ route('about_me.update', $aboutMe) }}" enctype="multipart/form-data">
        @method('put')
        @bind($aboutMe)
        <x-form-input type="text" class="mb-3" name="title" label="{{ __('Title') }}" />
        <x-form-input type="text" class="mb-3" name="subtitle" label="{{ __('Subtitle') }}" />
        <x-form-textarea class="mb-3" name="text" label="{{ __('Text') }}" />
        <x-form-input type="file" class="mb-3" name="img" label="{{ __('Imagedatei') }}:" />
        @endbind
        <x-form-submit class="mt-3">{{ __('Update') }}</x-form-submit>
    </x-form>
@endsection
