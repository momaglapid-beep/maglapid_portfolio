<div class="space-y-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block font-medium text-sm text-gray-700">Title</label>
            <input type="text" name="title" value="{{ old('title', $work->title ?? '') }}" required class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
        </div>
        <div>
            <label class="block font-medium text-sm text-gray-700">Category</label>
            <input type="text" name="category" value="{{ old('category', $work->category ?? '') }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
        </div>
        <div class="col-span-2">
            <label class="block font-medium text-sm text-gray-700">Project Image</label>
            @if(isset($work) && $work->image)
                <img src="{{ Str::startsWith($work->image, 'img/') ? asset($work->image) : asset('storage/' . $work->image) }}" class="w-40 mb-2 rounded shadow">
            @endif
            <input type="file" name="image" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
        </div>
        <div>
            <label class="block font-medium text-sm text-gray-700">Project Leader</label>
            <input type="text" name="leader" value="{{ old('leader', $work->leader ?? '') }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
        </div>
        <div>
            <label class="block font-medium text-sm text-gray-700">Designer</label>
            <input type="text" name="designer" value="{{ old('designer', $work->designer ?? '') }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
        </div>
        <div>
            <label class="block font-medium text-sm text-gray-700">Developer</label>
            <input type="text" name="developer" value="{{ old('developer', $work->developer ?? '') }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
        </div>
        <div>
            <label class="block font-medium text-sm text-gray-700">Customer</label>
            <input type="text" name="customer" value="{{ old('customer', $work->customer ?? '') }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
        </div>
    </div>
    <div>
        <label class="block font-medium text-sm text-gray-700">Description</label>
        <textarea name="description" rows="3" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">{{ old('description', $work->description ?? '') }}</textarea>
    </div>
</div>