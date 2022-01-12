@extends('panel.layouts.main')
@section('title')
asdasd
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js" integrity="sha512-foIijUdV0fR0Zew7vmw98E6mOWd9gkGWQBWaoA1EOFAx+pY+N8FmmtIYAVj64R98KeD2wzZh1aHK0JSpKmRH8w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var $repeater = $('.repeater').repeater({
        repeaters: [{
            selector: '.inner-repeater',
            repeaters: [{
                selector: '.deep-inner-repeater'
            }]
        }]
    });
</script>
@endsection
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <form action="{{ route('panel.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <section>
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-12">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="pt-1 pb-1">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    <div class="alert-body">
                                        {{ $message }}
                                    </div>
                                </div>
                            @endif
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="product-tab" data-toggle="tab" href="#product" aria-controls="home" role="tab" aria-selected="false">
                                                <i data-feather='shopping-bag'></i>
                                            @lang('words.product')
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="variation-tab" data-toggle="tab" href="#variation" aria-controls="profile" role="tab" aria-selected="false">
                                                <i data-feather='codepen'></i>
                                                @lang('words.variation')
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="images-tab" data-toggle="tab" href="#images" aria-controls="about" role="tab" aria-selected="true">
                                                <i data-feather='upload'></i>
                                                @lang('words.images')
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="information-tab" data-toggle="tab" href="#information" aria-controls="about" role="tab" aria-selected="true">
                                                <i data-feather='info'></i>
                                                @lang('words.information')
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="product" aria-labelledby="product-tab" role="tabpanel">
                                            <div class="card">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="name">@lang('words.name')</label>
                                                            <input type="text" class="form-control" name="title" value="{{ $product->getOneProductAttributes->title }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="category_name">@lang('words.price')</label>
                                                            <input type="text" class="form-control" name="price" value="{{ $product->getOneProductAttributes->price }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="category_name">@lang('words.discount_price')</label>
                                                            <div class="badge badge-light-success">@lang('words.product_discount_alert')
                                                            </div>
                                                            <input type="text" class="form-control" name="discount" value="{{ $product->getOneProductAttributes->discount }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>@lang('words.category')</label>
                                                            <select class="select2 form-control" name="category_id">
                                                                    @foreach ($categories as $c)
                                                                        <option @if($product->category_id == $c->id) selected @endif value="{{ $c->id }}">{{ $c->title }}</option>
                                                                    @if (count($c->getAllCategoriesCollection) > 0)
                                                                        @include('panel.product.update.layouts.parents', ['getAllSubCategoriesCollection' => $c->getAllCategoriesCollection, 'parent_title' => $c->title])
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>@lang('words.brand')</label>
                                                            <select class="select2 form-control" name="brand_id">
                                                                    @foreach ($brands as $b)
                                                                        <option @if($product->brand_id == $b->id) selected @endif value="{{ $b->id }}">{{ $b->title }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="description">@lang('words.description')</label>
                                                            <textarea type="text" class="form-control ckeditor" name="description">{{ $product->getOneProductAttributes->description }}</textarea>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="variation" aria-labelledby="variation-tab" role="tabpanel">
                                            @if ($product->getAllProductVariants->count())
                                                <div class="card">
                                                    <div class="repeater">
                                                        <div class="card-body">
                                                            <div data-repeater-list="list">
                                                                @foreach ($product->getAllProductVariants as $variant)
                                                                <div data-repeater-item>
                                                                    <div class="row d-flex align-items-end">
                                                                        <div class="col-md-10 col-12">
                                                                            <div class="form-group">
                                                                                <label for="name">@lang('words.variation_name')</label>
                                                                                <input type="text" name="variant" class="form-control" value="{{ $variant->title }}"/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2 col-12">
                                                                            <div class="form-group">
                                                                                <button data-repeater-delete type="button" class="btn btn-danger waves-effect waves-float waves-light w-100">
                                                                                    @lang('words.delete')
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="inner-repeater">
                                                                        <div data-repeater-list="attribute">
                                                                            @foreach ($variant->getAllVariantAttributes as $attribute)
                                                                            <div data-repeater-item>
                                                                                <div class="row d-flex align-items-end">
                                                                                    <div class="col-md-4 col-12">
                                                                                        <div class="form-group">
                                                                                            <label for="">@lang('words.attribute_name')</label>
                                                                                            <input type="text" class="form-control" name="attribute_title" value="{{ $attribute->title }}"/>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 col-12">
                                                                                        <div class="form-group">
                                                                                            <label for="">@lang('words.attribute_stock')</label>
                                                                                            <input type="text" class="form-control" name="attribute_stock" value="{{ $attribute->stock }}"/>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 col-12">
                                                                                        <div class="form-group">
                                                                                            <label for="">@lang('words.attribute_price')</label>
                                                                                            <input type="text" class="form-control" name="attribute_price" value="{{ $attribute->price }}"/>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-2 col-12">
                                                                                        <div class="form-group">
                                                                                            <button class="btn btn-danger text-nowrap variant-btn-canseworks w-100" data-repeater-delete type="button">
                                                                                                @lang('words.delete')
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            @endforeach
                                                                        </div>
                                                                        
                                                                        <button data-repeater-create type="button" class="btn btn-primary waves-effect waves-float waves-light w-100 mb-2 mt-2">
                                                                            @lang('words.add_deep_attribute')
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                            
                                                            <button data-repeater-create type="button" class="btn btn-success waves-effect waves-float waves-light w-100">
                                                                @lang('words.add_attribute')
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="card">
                                                    <div class="repeater">
                                                        <div class="card-body">
                                                            <div data-repeater-list="list">
                                                                <div data-repeater-item>
                                                                    <div class="row d-flex align-items-end">
                                                                        <div class="col-md-10 col-12">
                                                                            <div class="form-group">
                                                                                <label for="name">@lang('words.variation_name')</label>
                                                                                <input type="text" name="variant" class="form-control" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2 col-12">
                                                                            <div class="form-group">
                                                                                <button data-repeater-delete type="button" class="btn btn-danger waves-effect waves-float waves-light w-100">
                                                                                    @lang('words.delete')
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="inner-repeater">
                                                                        <div data-repeater-list="attribute">
                                                                            <div data-repeater-item>
                                                                                <div class="row d-flex align-items-end">
                                                                                    <div class="col-md-4 col-12">
                                                                                        <div class="form-group">
                                                                                            <label for="">@lang('words.attribute_name')</label>
                                                                                            <input type="text" class="form-control" name="attribute_title" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 col-12">
                                                                                        <div class="form-group">
                                                                                            <label for="">@lang('words.attribute_stock')</label>
                                                                                            <input type="text" class="form-control" name="attribute_stock"/>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 col-12">
                                                                                        <div class="form-group">
                                                                                            <label for="">@lang('words.attribute_price')</label>
                                                                                            <input type="text" class="form-control" name="attribute_price"/>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-2 col-12">
                                                                                        <div class="form-group">
                                                                                            <button class="btn btn-danger text-nowrap variant-btn-canseworks w-100" data-repeater-delete type="button">
                                                                                                @lang('words.delete')
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <button data-repeater-create type="button" class="btn btn-primary waves-effect waves-float waves-light w-100 mb-2 mt-2">
                                                                            @lang('words.add_deep_attribute')
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button data-repeater-create type="button" class="btn btn-success waves-effect waves-float waves-light w-100">
                                                                @lang('words.add_attribute')
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="tab-pane" id="images" aria-labelledby="images-tab" role="tabpanel">
                                            <div class="card">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="name">@lang('words.images')</label>
                                                            <input type="file" class="form-control" name="images[]" multiple>
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            @foreach ($product->getAllProductImages as $image)
                                                                <div class="col-md-3 col-6">
                                                                    <img width="220px" src="{{ asset($image->image) }}" class="img-fluid rounded mb-1"/>
                                                                        <div class="text-center">
                                                                            <a href="{{ route('panel.product.image.destroy', $image->id) }}" class="btn btn-danger waves-effect waves-float waves-light mb-1">@lang('words.delete')</a>
                                                                        </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
                                            <div class="card">
                                                <div class="repeater">
                                                    <div class="card-body">
                                                        <div data-repeater-list="informations">
                                                            @foreach ($product->getAllProductInformations as $information)
                                                            <div data-repeater-item>
                                                                <div class="row d-flex align-items-end">
                                                                    <div class="col-md-5 col-12">
                                                                        <div class="form-group">
                                                                            <label for="name">@lang('words.title')</label>
                                                                            <input type="text" name="information_title" class="form-control" value="{{ $information->title }}"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5 col-12">
                                                                        <div class="form-group">
                                                                            <label for="name">@lang('words.description')</label>
                                                                            <input type="text" name="information_description" class="form-control" value="{{ $information->description }}"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2 col-12">
                                                                        <div class="form-group">
                                                                            <button data-repeater-delete type="button" class="btn btn-danger waves-effect waves-float waves-light w-100">
                                                                                @lang('words.delete')
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                        <button data-repeater-create type="button" class="btn btn-success waves-effect waves-float waves-light w-100">
                                                            @lang('words.add_attribute')
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="card">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-warning waves-effect waves-float waves-light w-100">@lang('words.save')</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </div>
</div>
@endsection