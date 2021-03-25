@extends('layouts.backEnd.layoutBackEnd')
@section('title_page','Blog Admin')
@section('title_form','Blog')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <iframe src="{{url('public/file/dialog.php')}}" style="width: 100%; height: 500px;overflow-y: auto;border: none"></iframe>
        </div>
    </div>
@endsection
