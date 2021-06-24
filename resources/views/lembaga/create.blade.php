@extends('template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">Input data Institution</div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('course.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">ID</label>
                                <input type="text" name="id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" id="" cols="30" rows="3"></textarea>
                            </div>
                            <input type="submit" name="submit" value="Save Course" class="btn btn-primary">
                            <a href="{{ route('lembaga.index') }}" class="btn btn-outline-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
