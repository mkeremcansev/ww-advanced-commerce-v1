@foreach ($getAllSubCategoriesCollection as $c)
    <option value="{{ $c->id }}" @if($c->id == $a->category_id) selected @endif>{{ $parent_title . __('words.separator') . $c->title }}</option>
    @if (count($c->getAllCategoriesCollection) > 0)
        @include('panel.showcase.update.layouts.parents', ['getAllSubCategoriesCollection' => $c->getAllCategoriesCollection, 'parent_title' =>$parent_title.__('words.separator'). $c->title])
    @endif
@endforeach
