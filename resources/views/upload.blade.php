@extends('layouts/main')
@section('title', 'Upload page')
@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form method=POST action="{{route('upload-uploadpost')}}">
                    @csrf <!-- toevoeging nodig om sessie te behouden -->
                    @if (Session::has('uploaded')) 
                        <div class="alert alert-succes" role="alert">{{Session::get('uploaded')}}</div>
                    @endif
                    <label for="file">Upload file</label>
                    <input type="file" id="file" name="file" />
                    <button id="submit" class="btn btn-success">Upload</button>
                </form>
            </div>
        </div>
    </div>

@endsection