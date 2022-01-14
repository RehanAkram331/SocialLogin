@extends('Layout.app')
@section('title','Home')




@section('content')



    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-body text-center py-5 my-5">
                        <h4 class="pb-3">User Login</h4>
                        <a href="/CallGitHub" class="btn btn-primary text-white btn-block btn-social btn-microsoft">
                            <i class="fab fa-github" style='font-size:30px; padding:0 0 0 0; margin: 0 10px 0 0;'></i> Sing in with GitHub
                        </a>
                        <br>
                        <br>
                        <a href="/CallGitHub" class="btn btn-dark text-white btn-block btn-social btn-microsoft">
                            <i class="fab fa-github " style='font-size:30px; padding:0 0 0 0; margin: 0 10px 0 0;'></i> Sing Up with GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
