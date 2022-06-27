@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h6 class="card-header bg-dark bg-gradient text-white">Create Biography</h6>
                    <x-form method="post" action="{{ route('about_me.store') }}" enctype="multipart/form-data">
                        <x-form-input type="text" class="mb-3" name="title" label="{{ __('Title') }}" />
                        <x-form-input type="text" class="mb-3" name="subtitle" label="{{ __('Subtitle') }}" />
                        <x-form-textarea class="mb-3" name="text" label="{{ __('Text') }}" />
                        <x-form-input type="file" class="mb-3" name="img" label="{{ __('Imagedatei') }}:" />
                        <x-form-submit class="mt-3 btn-success"><i class="bi bi-plus-circle"></i> <span> {{ __('Add') }}</span></x-form-submit>
                    </x-form>
                </div>
            </div>
        </div>
    </div>
@endsection

