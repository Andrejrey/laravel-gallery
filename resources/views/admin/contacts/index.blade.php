@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h6 class="card-header bg-dark bg-gradient text-white">Contacts</h6>
                    <div class="col-md-12 mt-4" style="margin-bottom: 10px;">
                        <a class="btn btn-success" href="{{ route('contact.create') }}">
                            <i class="bi bi-plus-circle"></i> <span>  {{ __('Add Contact') }}</span>
                        </a>
                    </div>
                    {{ $contacts->links() }}
                        <table class="table table-striped">
                        <tr class="bg-dark bg-gradient">
                            <td class="text-white">Subject:</td>
                            <td class="text-white">E-mail:</td>
                            <td></td>
                        </tr>
                            @foreach($contacts as $contact)
                            <tr class="align-middle">
                                <td>{{$contact->subject}}</td>
                                <td>{{$contact->email}}</td>
                                <td>
                                    <x-form class="text-end" action="{{route('contact.destroy', $contact)}}" method="post">
                                        <a class="btn btn-primary" href="{{ route('contact.edit', $contact) }}"><i class="bi bi-pencil-square"></i> <span class="d-none d-md-inline">{{ __('Edit') }}</span></a>
                                        @csrf
                                        @method('delete')
                                        <x-form-submit type="submit" class="btn btn-danger delsoft"><i class="bi bi-trash-fill"></i> <span class="d-none d-md-inline">{{ __('Delete') }}</span></x-form-submit>
                                    </x-form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        {{ $contacts->links() }}
        </div>
    </div>
@endsection

