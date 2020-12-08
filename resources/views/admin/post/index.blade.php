@extends('layouts.app')

@section('main-content')

<!-- Page Wrapper -->
<div class="page-wrapper">

    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Welcome {{ Auth::user() -> name }}!</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">All Posts</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-lg-12">
                @include('validate')
                <a class="btn btn-primary" data-toggle="modal" href="#post_modal">Add new Post</a>
                <br>
                <br>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Post</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table  class="table table-striped data-table mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Categories</th>
                                    <th>tags</th>
                                    <th>Featured Image</th>
                                    <th>Author</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                    @foreach($all_data as $data)
                                    <tr>
                                        <td>{{ $loop -> index + 1 }}</td>
                                        <td>{{ $data -> title }}</td>
                                        <td>
                                            @foreach( $data -> categories  as $category )
                                                {{ $category  -> name }} |
                                            @endforeach
                                        </td>
                                        <td>{{ $data -> tag }}</td>
                                        <td>
                                            @if( !empty($data -> featured_image) )
                                            <img style="width: 60px;height: 60px;" src="{{ URL::to('/') }}/media/posts/{{ $data -> featured_image }}" alt="">
                                            @endif
                                        </td>
                                        <td>
                                            {{ $data -> author -> name }}
                                        </td>
                                        <td>{{ $data -> created_at -> diffForHumans() }} </td>
                                        <td>
                                            @if($data -> status == 'Published')
                                                <span class="badge badge-success">Published</span>
                                            @else
                                                <span class="badge badge-danger">Unpublished</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($data -> status == 'Published')
                                                <a class="btn btn-sm btn-danger" href="{{ route('category.unpublished', $data -> id ) }}"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                            @else
                                                <a class="btn btn-sm btn-success" href="{{ route('category.published', $data -> id ) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            @endif
                                            <a id="post_edit" data-toggle="modal" edit_id="{{  $data -> id }}" class="btn  btn-warning btn-sm" href="#post_modal_update">Edit</a>

                                                <form style="display: inline;" action="{{ route('post-category.destroy', $data -> id ) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger">delete</button>
                                                </form>
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

        <div id="post_modal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add new Post</h4>
                        <button class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('post.store') }}"  method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input name="title" class="form-control" type="text" placeholder="Title">
                            </div>

                            <div class="form-group">
                                <label for="">Categories</label>
                                <hr>

                                @foreach($categories as $category)
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="{{ $category -> id }}" name="category[]"> {{ $category -> name }}
                                        </label>
                                    </div>
                                    @endforeach


                            </div>

                            <div class="form-group">
                                <label style="font-size:70px; cursor:pointer;" for="fimage"><i class="fa fa-file-image-o" aria-hidden="true"></i></label>
                                <input style="display: none;" name="fimg" class="" type="file" id="fimage">
                                <img style="max-width: 100%; display:block;" id="post_featured_image_load" src="" alt="">
                            </div>
                            <div class="form-group">
                                <textarea id="post_editor" name="content"></textarea>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-block btn-primary" type="submit" value="Add">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <div id="post_modal_update" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Post</h4>
                        <button class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('category.update') }}"  method="POST">
                            @csrf
                            <div class="form-group">
                                <input name="name" class="form-control" type="text" placeholder="Name">
                                <input name="id" class="form-control" type="hidden" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-block btn-primary" type="submit" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
<!-- /Page Wrapper -->

@endsection
