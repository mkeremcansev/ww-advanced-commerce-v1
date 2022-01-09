@foreach ($getAllSubCategoriesCollection as $c)
    <tr>
        <td></td>
        <td><img width="150" src="{{ asset($c->image) }}" alt="{{ $c->title }}"></td>
        <td>{{ $parent_title . __('words.separator') . $c->title }}</td>
        <td>
            <div class="btn-group">
                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('words.actions')</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <a class="dropdown-item text-success" href="{{ route('panel.category.edit', $c->id) }}">@lang('words.edit')</a>
                    <a class="dropdown-item text-danger" href="">@lang('words.delete')</a>
                </div>
            </div>
        </td>
    </tr>
    @if (count($c->getAllCategoriesCollection) > 0)
        @include('panel.category.layouts.tree', ['getAllSubCategoriesCollection' => $c->getAllCategoriesCollection, 'parent_title' =>$parent_title. __('words.separator'). $c->title])
    @endif
@endforeach
