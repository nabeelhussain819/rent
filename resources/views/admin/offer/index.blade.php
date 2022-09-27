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
                            <a class="btn btn-success float-right" href="{{ route('offer.create') }}"> Create New offer</a>
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
                                        <th scope="col">valid Date</th>
                                        <th scope="col">Offer Three Days Price</th>
                                        <th scope="col">Car Name</th>
                                        <th scope="col">Offer One Month Price</th>
                                        <th scope="col">Offer One Week Price</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($offer as $offers)
                                    <tr>
                                        <th scope="row">{{ $offers->valid_date }}</th>
                                        <td>
                                            <div class="table-content">
                                                <h3 class="title">{{ $offers->three_days_price }}</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-content">
                                                <h3 class="title">{{ $offers->post->title }}</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-content">
                                                <h3 class="title">{{ $offers->one_month_price }}</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-content">
                                                <h3 class="title">{{ $offers->One_week_price }}</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-content">
                                                <form action="{{ route('offer.destroy',$offers->id) }}" method="POST">

                                                    <a class="btn btn-primary" href="{{ route('offer.edit',$offers->id) }}">Edit</a>

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
                {!! $offer->links('pagination::bootstrap-4') !!}
            </div><!-- end col-lg-12 -->
        </div>
    </div><!-- end container-fluid -->

    @endsection