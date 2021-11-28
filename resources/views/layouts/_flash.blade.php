@if (session('status'))
<div class="border bg-red-100 border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
    <span class="block sm:inline"> {{ session('status') }}</span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 text-teal-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <title>Close</title>
            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
        </svg>
    </span>
</div>

@endif

@if (session('flash'))
<!-- <div class="alert alert-{{ session('flash')['level'] }}" role="alert" x-data="{show : true}" x-show="show" x-init="setTimeout(() => { show = false; }, 3500);">
    {{ session('flash')['message'] }}
</div> -->
if({{ session('flash')['level'] }} == 'success')
{
<div class="border bg-teal-100 border-teal-400 text-teal-700 px-4 py-3 rounded relative" role="alert">
    <span class="block sm:inline"> {{ session('flash')['message'] }}</span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <title>Close</title>
            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
        </svg>
    </span>
</div>
}
else
{
<div class="border bg-red-100 border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
    <span class="block sm:inline"> {{ session('flash')['message'] }}</span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 text-teal-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <title>Close</title>
            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
        </svg>
    </span>
</div>
}


@endif
<div x-data="{show : false}" x-cloak @flash.window="
        show = true;
        $el.innerHTML = $event.detail.message;
        $el.classList.add($event.detail.level);
        $el.classList.add('alert');
        setTimeout(() => { show = false; }, 3500);
    " class="alert" role="alert" x-show="show">
</div>