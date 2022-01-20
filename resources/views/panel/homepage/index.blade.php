@extends('panel.layouts.extends')
@section('title')
    Ana Sayfa
@endsection
@section('script')
    @if ($message = Session::get('success'))
        <script>
            toastr.success('', '{{ $message }}', {
                positionClass: "toast-bottom-right"
            })
        </script>
    @endif
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
                    <div class="row match-height">
                        
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
