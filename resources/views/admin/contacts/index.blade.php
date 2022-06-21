@extends('layouts.app')
@section('content')
<h1>Contact</h1>
<div class="col-md-12 text-end mt-4" style="margin-bottom: 10px;">
</div>
<table class="table table-striped">
    @foreach($contacts as $contact)
    <tr>
        <td>{{$contact->subject}}</td>
        <td>
            <x-form action="{{route('contact.destroy', $contact)}}" method="post">
                <a class="btn btn-primary" href="{{ route('contact.edit', $contact) }}">{{ __('Edit') }}</a>
                @csrf
                @method('delete')
                <x-form-submit type="submit" class="btn btn-danger delsoft">{{ __('Delete') }}</x-form-submit>
            </x-form>
        </td>
    </tr>
    @endforeach
</table>
@endsection

