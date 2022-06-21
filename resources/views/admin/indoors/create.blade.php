@extends('layouts.app')
@section('content')
    <h1>Add Indoor Image</h1>

    <x-form method="post" action="{{ route('indoor.store') }}" >
        <x-form-input type="file" class="mb-3" name="filename" label="{{ __('Imagedatei') }}:" />
        <x-form-input type="text" class="mb-3" name="titel" label="{{ __('Titel') }}" />
        <x-form-textarea class="mb-3" name="description" label="{{ __('Description') }}" />
        <x-form-submit class="mt-3">{{ __('Add') }}</x-form-submit>
    </x-form>
@endsection



