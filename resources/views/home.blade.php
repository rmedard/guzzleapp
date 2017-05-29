@extends('layouts.app')
@section('content')
    <div class="intro-header">
        <div class="container">
            <div class="row" id="upper-header">
                <div class="col-lg-12">
                    <div class="intro-message" id="intro-message-main">
                        <div class="description">
                            <h1 class="h1-responsive wow fadeInDown" style="font-size: 80px;">A Place To Live </h1>
                            <hr class="hr-light wow fadeInUp">
                            <p>Code: {{ $code  }}; Reason: {{ $reason  }}</p>
                            <p>Body: {{ $body }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
@endsection