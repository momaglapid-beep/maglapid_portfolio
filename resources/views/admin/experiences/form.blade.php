<div class="space-y-4">
    <div>
        <label class="block font-medium text-sm text-gray-700">Title</label>
        <input type="text" name="title" value="{{ old('title', $experience->title ?? '') }}" required class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
    </div>
    <div>
        <label class="block font-medium text-sm text-gray-700">Icon Class (e.g., icon-chemistry)</label>
        <input type="text" name="icon" value="{{ old('icon', $experience->icon ?? '') }}" required class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
    </div>
    <div>
        <label class="block font-medium text-sm text-gray-700">Description</label>
        <textarea name="description" rows="3" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">{{ old('description', $experience->description ?? '') }}</textarea>
    </div>
</div>