@extends('panel.layouts.extends')
@section('title')
    @lang('words.product_list')
@endsection
@include('panel.product.script.script')
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="responsive-datatable">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            @if ($m = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    <div class="alert-body">
                                        {{ $m }}
                                    </div>
                                </div>
                            @endif
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">@lang('words.product_list')</h4>
                                </div>
                                <div class="card-datatable">
                                    <table id="category_list_table" class="dt-responsive table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>@lang('words.image')</th>
                                                <th>@lang('words.product_name')</th>
                                                <th>@lang('words.brand')</th>
                                                <th>@lang('words.category')</th>
                                                <th>@lang('words.price')</th>
                                                <th>@lang('words.variation')</th>
                                                <th>@lang('words.status')</th>
                                                <th>@lang('words.actions')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $p)
                                            @php($product = $p->getOneProductAttributes)
                                                <tr>
                                                    <td></td>
                                                    <td><img width="100" src="{{ asset($p->getOneProductImages->image) }}" alt=""></td>
                                                    <td>{{ $product->title }}</td>
                                                    <td>{{ $p->getOneProductBrand->title }}</td>
                                                    <td>{{ $p->getOneProductCategory->title }}</td>
                                                    <td class="custom-list-style-none">
                                                        @if ($product->discount)
                                                            <li class="text-danger">
                                                                <del>{{ getMoneyOrder($product->price) }}</del>
                                                            </li>
                                                            <li>{{ getMoneyOrder($product->discount) }}</li>
                                                        @else
                                                            <span>{{ getMoneyOrder($product->price) }}</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @foreach ($p->getAllProductVariants as $v)
                                                            <li>
                                                                <h5>{{ $v->title }}</h5>
                                                                @foreach ($v->getAllVariantAttributes as $a)
                                                                    <span>
                                                                        @lang('words.variant_attributes_count', ['variant'=>$a->title, 'count'=>$a->stock])
                                                                    </span>
                                                                @endforeach
                                                            </li>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-control-success custom-switch ml-auto">
                                                            <input type="checkbox" onchange="productStatus({{ $p->id }});" class="custom-control-input" id="products_status-{{ $p->id }}" @if($p->status) checked @endif/>
                                                                <label class="custom-control-label" for="products_status-{{ $p->id }}">
                                                                    <span class="switch-icon-left"><i data-feather="check"></i></span>
                                                                    <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                                </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('words.actions')</button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                                <a class="dropdown-item text-success" href="{{ route('panel.product.edit', $product->id) }}">@lang('words.edit')</a>
                                                                <form action="{{ route('panel.product.destroy', $p->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="dropdown-item text-danger w-100" href="">@lang('words.delete')</button>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
