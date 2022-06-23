@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h6 class="card-header bg-dark bg-gradient text-white">Add Outdoor Image</h6>
                    <x-form method="post" action="{{ route('outdoor.store') }}" enctype="multipart/form-data">
                        <x-form-input type="file" class="mb-3" name="filename" label="{{ __('Imagedatei') }}:" />
                        <x-form-input type="text" class="mb-3" name="title" label="{{ __('Title') }}" />
                        <x-form-textarea class="mb-3" name="description" label="{{ __('Description') }}" />
                        <x-form-submit class="mt-3 btn-success">{{ __('Add') }}</x-form-submit>
                    </x-form>
                </div>
            </div>
        </div>
    </div>
@endsection




