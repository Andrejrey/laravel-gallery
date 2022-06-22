@extends('layouts.app')
@section('content')
<h1>About Me</h1>

<div class="col-md-12 text-end mt-4" style="margin-bottom: 10px;">
    <a class="btn btn-primary" href="{{ route('about_me.create') }}">
        {{ __('Add Biography') }}
    </a>
</div>
<table class="table table-striped">
    @foreach($aboutMe as $biography)
        <tr>
            <td>{{$biography->title}}</td>
            <td><img height="100" src="/storage/about_me/{{$biography->img}}"></td>
            <td>
                <x-form action="{{route('about_me.destroy', $biography)}}" method="post">
                    <a class="btn btn-primary" href="{{ route('about_me.edit', $biography) }}">{{ __('Edit') }}</a>
                    @csrf
                    @method('delete')
                    <x-form-submit type="submit" class="btn btn-danger delsoft">{{ __('Delete') }}</x-form-submit>
                </x-form>
            </td>
        </tr>
    @endforeach
</table>
@endsection

