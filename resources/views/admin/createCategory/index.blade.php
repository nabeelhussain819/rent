@extends('admin.app')

@section('content')
<div class="dashboard-main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-box">
                    <div class="form-title-wrap">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="title">BRANDS OF NOMAD FORCE
                                </h3>
                            </div>
                            <a class="btn btn-success float-right" href="{{ route('category.create') }}"> Create New Brand</a>
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
                                        <th scope="col">Brand Name</th>
                                        <th scope="col">Brand Description</th>
                                        <th scope="col">Brand Video</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category as $post)
                                    <tr>
                                        <th scope="row">{{ $post->id }}</th>
                                        <td>
                                            <div class="table-content">
                                                <h3 class="title">{{ $post->title }}</h3>
                                            </div>
                                        </td>
                                        <td>{{ $post->description }}</td>
                                        <td> <video autoplay="" loop="" muted="" class="img-fluid portfolio-image" poster="videos/road.jpg" width="300" height="300">
                                                <source src="{{ Storage::url($post->image) }}" type="video/mp4">

                                                Your browser does not support the video tag.
                                            </video></td>
                                        <td>
                                            <div class="table-content">

                                                <a class="btn btn-primary" href="{{ route('category.edit',$post->id) }}">Edit</a>

                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- end form-box -->
                {!! $category->links('pagination::bootstrap-4') !!}
            </div><!-- end col-lg-12 -->
        </div>
    </div><!-- end container-fluid -->
</div>

@endsection