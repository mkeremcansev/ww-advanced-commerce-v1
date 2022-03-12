@component('mail::message')
@include('vendor.notifications.style.style')
{{-- Greeting --}}
# @lang('words.hello_name', ['name'=>$user->name])
{{-- Intro Lines --}}
@lang('words.thank_u_for_choosing_us')
{{-- Outro Lines --}}

<ul class="order_ul_tag">
    @foreach (orderAccountStatus($order->status) as $s)
        <li class="order_email_notification @if($s['status']) order_updated_check_color @endif " >
            <span>@lang('words.check_icon')</span>
            <span>{{ $s['text'] }}</span>
        </li>
    @endforeach
</ul>

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