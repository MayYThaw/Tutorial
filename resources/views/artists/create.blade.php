@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new Artist</div>

                <div class="card-body">
                    <form method="post" action="{{url('/artists')}}">
                      @csrf
                      <label class="form.label">Artist Name</label>
                      <input type="text" name="name" class="form-control">

                      <label class="form.label">
                        <input type="radio" name="gender" value="Male" class="form-control">Male
                      </label>
                      <label class="form.label">
                        <input type="radio" name="gender" value="Female" class="form-control">Female
                      </label><br>

                      <label class="form.label">Native Town</label>
                      <input type="text" name="nativetown" class="form-control"><br>

                      <input type="submit" value="Add new Artist" class="btn btn-info">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
