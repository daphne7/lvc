@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center><img src="{{ asset('images/faces/Logotipo_hagiazo.png') }}" width="480" height="480" alt="InternetCtrl"></center>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
