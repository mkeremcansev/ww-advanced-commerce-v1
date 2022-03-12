@component('mail::message')
@include('vendor.notifications.style.style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
{{-- Greeting --}}
# @lang('words.hello_name', ['name'=>$user->name])
{{-- Intro Lines --}}

<ul class="order_ul_tag">
    @foreach (orderAccountStatus($order->status) as $s)
        <li class="order_email_notification @if($s['status']) order_updated_check_color @endif " >
            <span>@lang('words.check_icon')</span>
            <span>{{ $s['text'] }}</span>
        </li>
    @endforeach
</ul>

{{-- Outro Lines --}}

# @lang('words.order_total', ['number'=>$order->id ,'price'=>getMoneyOrder($order->total)])

<ul>
    @foreach ($order->getAllOrderAttributes as $p)
        <li>
            @lang('words.order_product_list', ['product'=>$p->product, 'quantity'=>$p->quantity, 'text'=>__('words.quantity'),'price'=>getMoneyOrder($p->price), 'total'=>getMoneyOrder($p->total)])
            <ul>
                @foreach ($p->variants as $v)
                    <li>
                        <span>
                            @lang('words.get_variant_main',['variant'=> $v->get_one_variant_main->title])
                            {{ $v->title }}
                        </span>
                    </li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>

@component('mail::button', ['url' => route('web.index')])
    @lang('words.resume_to_shopping')
@endcomponent

{{-- Salutation --}}
{{ config('app.name') }}
@endcomponent