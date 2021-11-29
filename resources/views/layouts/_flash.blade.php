@if (session('status'))
<div class="alert alert-{{ session('flash')['level'] }} bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert" x-data="{show : true}" x-show="show" x-init="setTimeout(() => { show = false; }, 3500);">
    <strong class="font-bold"> {{ session('flash')['message'] }} </strong>
</div>
@endif

@if (session('flash'))
        @if (session('flash')['level'] == 'success')
        <div class="alert alert-{{ session('flash')['level'] }} bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert" x-data="{show : true}" x-show="show" x-init="setTimeout(() => { show = false; }, 3500);">
           <strong class="font-bold"> {{ session('flash')['message'] }} </strong>
        </div>
        @elseif (session('flash')['level'] == 'danger')
        <div class="alert alert-{{ session('flash')['level'] }} bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert" x-data="{show : true}" x-show="show" x-init="setTimeout(() => { show = false; }, 3500);">
           <strong class="font-bold"> {{ session('flash')['message'] }} </strong>
        </div>
        @endif

@endif
<div x-data="{show : false}" x-cloak @flash.window="
        show = true;
        $el.innerHTML = $event.detail.message;
        $el.classList.add($event.detail.level);
        $el.classList.add('alert');
        setTimeout(() => { show = false; }, 3500);
    " class="alert" role="alert" x-show="show">
</div>