@section('title',  trans('GitScrum Login'))

@extends('layouts.master', ['hideNavbar' => true, 'bodyClass' => 'body-login'])

@section('content')
<script async defer src="https://buttons.github.io/buttons.js"></script>

<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <div class="middle-box text-center loginscreen">
                <h5 class="lead">{{trans('Welcome to')}} <strong>GitScrum</strong></h5>

                <a href="{{route('auth.provider', ['provider' => 'github'])}}" class="btn btn-hg btn-info btn-loader">
                        <i class="fa fa-github" aria-hidden="true"></i>&nbsp;&nbsp;Login with <strong>GitHub</strong>
                </a>

                <a href="{{route('auth.provider', ['provider' => 'gitlab'])}}" class="btn btn-hg btn-danger btn-loader">
                        <i class="fa fa-gitlab" aria-hidden="true"></i>&nbsp;&nbsp;Login with <strong>GitLab</strong>
                </a>

                <p class="small">The GitScrum is licensed under the <a href="http://opensource.org/licenses/GPL-3.0" target="_blank">GPL v3 license</a></p>
        </div>
    </div>
</div>

@endsection
