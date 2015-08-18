@extends('guest.layout.layout')

@section('content')

    <!-- Header -->
    <div class="intro-header">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Kingsville Homeowners Association</h1>
                        <h3>Kingsville Heights Antipolo City</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="{{route('User.index')}}" class="btn btn-primary btn-lg btn-block"><i class="fa fa-signin"></i>Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->
    </div>
    <!-- /.intro-header -->
    <!-- Page Content -->

    @if(count($contents) > 0)
    @foreach ($contents as $c)
    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">{{$c->title}} </h2>
                    <span class="pull-right badge">{{$c->created_at}}</span>
                    <hr>
                    <p class="lead">{{$c->content}}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif
@stop