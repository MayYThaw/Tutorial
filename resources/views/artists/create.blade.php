@extends('layouts.app')

@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Creating Artist</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('artists') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" required />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Gender</label>

                            <div class="col-md-6">
                                <input type="radio" name="gender" value="Male"> Male
                                <input type="radio" name="gender" value="Female"> Female
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nativetown" class="col-md-4 col-form-label text-md-right">Native Town</label>

                            <div class="col-md-6">
                                <input type="text" name="nativetown" class="form-control" required />
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Add new Artist
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
