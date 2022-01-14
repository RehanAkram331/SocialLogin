@extends('Layout.app')
@section('title','Dashboard')




@section('content')


    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card p-3">

                    <div class="card-img">
                        <img class="w-25" style="object-fit: cover; width: 110px; height: 180px; border-radius: 2px;" src="{{Session::get('img')}}" alt="">
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>User ID</td>
                                <td>{{Session::get('userID')}}</td>
                            </tr>
                            <tr>
                                <td>Nick Name</td>
                                <td>{{Session::get('nickName ')}}</td>
                            </tr>
                            <tr>
                                <td>Full Name</td>
                                <td>{{Session::get('name')}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{Session::get('email')}}</td>
                            </tr>
                            <tr>
                                <td>Token</td>
                                <td>{{Session::get('token')}}</td>
                            </tr>
                        </table>
                    </div>

                    <div>
                        <a href="/Logout" class="btn btn-primary text-white">Logout</a>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
