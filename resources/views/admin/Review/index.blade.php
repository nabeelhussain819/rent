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
                                <h3 class="title">review
                                </h3>
                            </div>
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
                                        <th scope="col">Car</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Rating</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($review as $reviews)
                                    <tr>
                                        <th scope="row">{{ $reviews->id }}</th>
                                        <td>
                                            <div class="table-content">
                                                <h3 class="title">{{ $reviews->post->title}}</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-content">
                                                <h3 class="title">{{ $reviews->description }}</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-content">
                                                <h3 class="title">{{ $reviews->rating  }}</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-content">
                                                <form action="{{ route('review.destroy',$reviews->id) }}" method="POST">
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

                {!! $review->links('pagination::bootstrap-4') !!}
            </div><!-- end col-lg-12 -->
        </div>
    </div><!-- end container-fluid -->

    @endsection