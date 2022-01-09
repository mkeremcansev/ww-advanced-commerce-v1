@foreach ($getAllSubCategoriesCollection as $c)
    <option value="{{ $c->id }}">{{ $parent_title . __('words.separator') . $c->title }}</option>
    @if (count($c->getAllCategoriesCollection) > 0)
        @include('panel.product.create.layouts.parents', ['getAllSubCategoriesCollection' => $c->getAllCategoriesCollection, 'parent_title' =>$parent_title.__('words.separator'). $c->title])
    @endif
@endforeach
