<?php if(session()->get('mode') == 'light' OR session()->get('mode') == null): ?>
    <a id="mode" class="mode fas fa-moon"></a>
<?php elseif(session()->get('mode') == 'dark'): ?>
    <a id="mode" class="mode fas fa-sun"></a>
<?php endif; ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/web/layouts/menu/mode.blade.php ENDPATH**/ ?>