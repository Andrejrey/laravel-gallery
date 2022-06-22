@extends('layouts.app')
@section('content')
    <h1>Create Biography</h1>

    <x-form method="post" action="{{ route('about_me.store') }}" enctype="multipart/form-data">
        <x-form-input type="text" class="mb-3" name="title" label="{{ __('Title') }}" />
        <x-form-input type="text" class="mb-3" name="subtitle" label="{{ __('Subtitle') }}" />
        <x-form-textarea class="mb-3" name="text" label="{{ __('Text') }}" />
        <x-form-input type="file" class="mb-3" name="img" label="{{ __('Imagedatei') }}:" />
        <x-form-submit class="mt-3">{{ __('Create') }}</x-form-submit>
    </x-form>
@endsection

