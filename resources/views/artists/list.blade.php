@extends('layouts.app')

@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Artists Lists</div>

                <div class="card-body">
                	<table class="table">
                		<tr>
                			<th>#</th>
                			<th>Name</th>
                			<th>Gender</th>
                      <th>Native Town</th>
                			<th>Option</th>
                		</tr>

                		@foreach($artists as $art)
                		<tr>
                			<td></td>
                			<td>{{$art->name}}</td>
                			<td>{{$art->gender}}</td>
                      <td>{{$art->nativetown}}</td>
                			<td>
                				<a class="btn btn-info" href="{{url('')}}/artists/{{$art->id}}/edit">Edit</a>

                		<form class="delete-form" action="{{url('artists/')}}/{{$art->id}}" method="post">
                			@csrf
                			@method('delete')
                			<input class="btn btn-danger" type="submit" value="Delete">
                		</form>
                	</td>

                		</tr>
                		@endforeach
                	</table>
                	{{$artists->links()}}
                	<a class="btn btn-info" href="{{url('artists/create')}}">+Create New Artist</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
