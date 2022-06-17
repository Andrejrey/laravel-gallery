@extends('layouts.app')
@section('content')
    <h1>Update Contacts</h1>

    <x-form method="put" action="" >
        @csrf
        @bind($outdoor)
        <x-form-input type="text" class="mb-3" name="filename" label="{{ __('Filename') }}" />
        <x-form-input type="text" class="mb-3" name="title" label="{{ __('Title') }}" />
        <x-form-textarea class="mb-3" name="description" label="{{ __('Description') }}" />
        @endbind
        <x-form-submit class="mt-3">{{ __('Update') }}</x-form-submit>
    </x-form>
@endsection

