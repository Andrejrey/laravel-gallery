@extends('layouts.app')
@section('content')
    <h1>Update Contacts</h1>

    <x-form method="put" action="" >
        @csrf
        @bind($contact)
        <x-form-input type="text" class="mb-3" name="subject" label="{{ __('Subject') }}" />
        <x-form-input type="text" class="mb-3" name="email" label="{{ __('E-mail') }}" />
        <x-form-textarea class="mb-3" name="message" label="{{ __('Message') }}" />
        @endbind
        <x-form-submit class="mt-3">{{ __('Update') }}</x-form-submit>
    </x-form>
@endsection
