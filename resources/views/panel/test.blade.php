@extends('panel.layouts.extends')
@section('title')
    @lang('words.brand_create')
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('#desc').text($('#description').val())
            $('#description').on('keyup', function(){
                $('#desc').text($('#description').val())
            })
        })
    </script>
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="pt-1 pb-1">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if ($m = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    <div class="alert-body">
                                        {{ $m }}
                                    </div>
                                </div>
                            @endif
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">@lang('words.brand_create')</h4>
                                </div>
                                <form method="POST" action="{{ route('panel.brand.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">@lang('words.brand_name')</label>
                                            <input type="text" class="form-control" name="title" id="description">
                                        </div>

                                        <button type="submit" class="btn btn-primary waves-effect waves-float waves-light mt-2 mb-2 float-right">@lang('words.save')</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-12 bg-white p-5 rounded">
                                <h1 style="text-decoration: underline;" class="text-primary">Canseworks Web Application</h1>
                                <p id="desc" style="color: rgb(39, 39, 39)">kjlaskjdjkals</p>
                            </div>
                        </div>
                        
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
