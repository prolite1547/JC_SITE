@extends('main_layout')
@section('title', 'Admin')
@section('content')
    <form action="{{ route('import.json') }}" class="json_import_file" method="post">
        <div class="container-fluid"> 
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                     <label for="json_upload">Upload JSON</label><br>
                     <input type="file" name="json_upload" id="json_upload">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <textarea name="json_content" id="json_content" cols="50" rows="10"></textarea>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <input type="submit" class="btn btn-sm btn-danger" value="SUBMIT">
                </div>
            </div>
        </div>
    </form>
@endsection