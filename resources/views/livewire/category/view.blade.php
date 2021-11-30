
<div class="w-full">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username" required>
                Name
            </label>
            <h4 class="py-2">{{$category->name}}</h4>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username" key="category.description">
                Description
            </label>
            <h4 class="py-3">{{$category->description ?? "null"}}</h4>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username" required>
                Created At
            </label>
            <h4 class="py-2">{{$category->created_at->diffForHumans()}}</h4>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username" key="category.description">
                Updated At
            </label>
            <h4 class="py-3">{{$category->updated_at->diffForHumans()}}</h4>
        </div>

    </div>
</div>
