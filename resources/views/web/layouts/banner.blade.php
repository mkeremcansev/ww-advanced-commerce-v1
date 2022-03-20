@if (setting('left_status'))
    <div class="left_banner">
        <img src="{{ asset(setting('left')) }}" alt="{{ setting('title') }}">
    </div>
@endif
@if (setting('right_status'))
    <div class="right_banner">
        <img src="{{ asset(setting('right')) }}" alt="{{ setting('title') }}">
    </div>
@endif
