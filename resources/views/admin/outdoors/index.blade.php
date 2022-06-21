@extends('layouts.app')
@section('content')
<h1>Outdoor</h1>
<div class="col-md-12 text-end mt-4" style="margin-bottom: 10px;">
</div>
<table class="table table-striped">
    @foreach($outdoors as $outdoor)
    <tr>
        <td>{{$outdoor->filename}}</td>
        <td>
            <x-form action="{{route('outdoor.destroy', $outdoor)}}" method="post">
                <a class="btn btn-primary" href="{{ route('outdoor.edit', $outdoor)}}">{{ __('Edit') }}</a>
                @csrf
                @method('delete')
                <x-form-submit type="submit" class="btn btn-danger delsoft">{{ __('Delete') }}</x-form-submit>
            </x-form>
        </td>
    </tr>
    @endforeach
</table>
@endsection

