@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Contact</h1>
        <div class="col-md-12 mt-4" style="margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('contact.create') }}">
                {{ __('Add Contact') }}
            </a>
        </div>
        <table class="table table-striped">
        <tr>
            <td>Subject:</td>
            <td>E-mail:</td>
            <td></td>
        </tr>
            @foreach($contacts as $contact)
            <tr>
                <td>{{$contact->subject}}</td>
                <td>{{$contact->email}}</td>
                <td>
                    <x-form class="text-end" action="{{route('contact.destroy', $contact)}}" method="post">
                        <a class="btn btn-primary" href="{{ route('contact.edit', $contact) }}">{{ __('Edit') }}</a>
                        @csrf
                        @method('delete')
                        <x-form-submit type="submit" class="btn btn-danger delsoft">{{ __('Delete') }}</x-form-submit>
                    </x-form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection

