<div class="space-y-4">
    <div>
        <label class="block font-medium text-sm text-gray-700">Skill Name</label>
        <input type="text" name="name" value="{{ old('name', $skill->name ?? '') }}" required class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
    </div>
    <div>
        <label class="block font-medium text-sm text-gray-700">Percentage (0-100)</label>
        <input type="number" name="percentage" value="{{ old('percentage', $skill->percentage ?? '') }}" required min="0" max="100" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
    </div>
</div>