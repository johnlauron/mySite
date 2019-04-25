@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{ route('skills.store')}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="skill_name" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="customFile" onchange="custom_file()">
                                <label class="custom-file-label" for="customFile" id="customLabel">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
