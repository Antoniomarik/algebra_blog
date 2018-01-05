@extends('Centaur::layout')

@section('title', 'Posts')

@section('content')
    <div class="page-header">
        <div class='btn-toolbar pull-right'>
            <a class="btn btn-primary btn-lg" href="{{ route('posts.create') }}">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                Create Post
            </a>
        </div>
        <h1>Posts</h1>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="table-responsive">
				@if(count($posts) > 0)
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Title</th>
								<th>User</th>
								<th>Created at</th>
								<th>Updated at</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
						
						</tbody>
					</table>
				@else
					{{ 'No Posts!' }}
				@endif
			
			
        </div>
    </div>
    {!! $posts->render() !!}
@stop
