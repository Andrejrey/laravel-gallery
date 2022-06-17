@extends('layouts.app')
@section('content')
<h1>Indoor</h1>
<div class="col-md-12 text-end mt-4" style="margin-bottom: 10px;">
</div>
<table class="table table-striped">
    @foreach($indoors as $indoor)
    <tr>
        <td>{{$indoor->filename}}</td>
        <td>
            <x-form action="" method="post">
                <a class="btn btn-primary" href="{{ route('indoor.edit', $indoor) }}">{{ __('Edit') }}</a>
                @csrf
                @method('delete')
                <x-form-submit type="submit" class="btn btn-danger delsoft">{{ __('Delete') }}</x-form-submit>
            </x-form>
        </td>
    </tr>
    @endforeach
</table>
@endsection

