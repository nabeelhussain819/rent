@extends('admin.app')

@section('content')
<div class="container mt-2 section-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-box">
                    <div class="form-title-wrap">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="title">CARS OF NOMAD FORCE
                                </h3>
                            </div>
                            <a class="btn btn-success float-right" href="{{ route('posts.create') }}"> Create New Cars</a>
                        </div>
                    </div>
                    <div class="form-content">
                        <div class="table-form table-responsive">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Car Name</th>
                                        <th scope="col">Car Brand</th>
                                        <th scope="col">featured</th>
                                        <th scope="col">Car Price</th>
                                        <th scope="col">Car Image</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                    <tr>
                                        <th scope="row">{{ $post->id }}</th>
                                        <td>
                                            <div class="table-content">
                                                <h3 class="title">{{ $post->title }}</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-content">
                                                <h3 class="title">{{ $post->category->title }}</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-content">
                                                <h3 class="title">{{ $post->feature }}</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-content">
                                                <h3 class="title">{{ $post->price }}</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="{{ Storage::url($post->image1) }}" height="75" width="75" alt="" />
                                            <!-- @foreach(json_decode($post->image) as $image)
                                            <img src="{{ Storage::url($image) }}" height="75" width="75" alt="" />
                                            @endforeach -->
                                        </td>
                                        <td>
                                            <div class="table-content">
                                                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">

                                                    <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- end form-box -->
                {!! $posts->links('pagination::bootstrap-4') !!}
            </div><!-- end col-lg-12 -->
        </div>
    </div><!-- end container-fluid -->

    @endsection