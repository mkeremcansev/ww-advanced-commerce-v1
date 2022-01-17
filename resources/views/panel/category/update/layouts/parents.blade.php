@foreach ($getAllSubCategoriesCollection as $c)
    <option value="{{ $c->id }}" {{ $c->getCategoryBlock($category->id, $c->parent_id) }} @if ($category->parent_id == $c->id) selected @elseif ($category->id == $c->id) disabled @endif>
        {{ $parent_title . __('words.separator') . $c->title }}
    </option>
    @if (count($c->getAllCategoriesCollection) > 0)
        @include('panel.category.layouts.parents', ['getAllSubCategoriesCollection' => $c->getAllCategoriesCollection, 'parent_title' =>$parent_title.__('words.separator'). $c->title])
    @endif
@endforeach
