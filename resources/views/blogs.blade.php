@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                <h2>Blog List</h2>
                    <div>

                        <table id="example" class="table table-striped table-hover table-bordered" bgcolor="#fff8dc">
                            <h3>Select Blog :</h3>
                            <thead>
                            <tr>
                                <th>Blog ID</th>
                                <th>Blog Desc</th>
                                <th>Blog Name</th>
                                <th>Posted On</th>
                                <th>Url</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($blogs as $blogs)
                                <tr>
                                    <td>{{ $blogs->blog_id }}</td>
                                    <td>{{ $blogs->blog_desc }}</td>
                                    <td>{{ $blogs->blog_name }}</td>
                                    <td>{{ $blogs->created_at }}</td>
                                    <td>{{ $blogs->blog_url }}</td>
                                    <td>

                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info">Action</button>
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                        <li data-toggle="modal" data-target="#acceptModal" data-bookingid="{{ $blogs->blog_id }}"><a href="{{ url('blog/edit/'.$blogs->blog_id) }}">View/ Edit</a>
                                                        </li>

                                                    <li><a href="{{ url('/blog/delete/'.$blogs->blog_id)}}">Delete</a></li>
                                                </ul>
                                            </div>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
