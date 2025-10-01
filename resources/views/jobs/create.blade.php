<x-layout>
  <x-slot:heading>
    Create Job
  </x-slot:heading>

  <form method="POST" action="/jobs" class="max-w-lg mx-auto p-4 bg-white rounded shadow">
    @csrf

    <div class="mb-4">
      <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
      <input type="text" name="title" id="title" class="mt-1 block w-full border-gray-300 rounded-md" value="{{ old('title') }}">
      @error('title')
        <p class="text-sm text-red-500">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4">
      <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
      <input type="text" name="salary" id="salary" class="mt-1 block w-full border-gray-300 rounded-md" value="{{ old('salary') }}">
      @error('salary')
        <p class="text-sm text-red-500">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4">
      <label for="employer_id" class="block text-sm font-medium text-gray-700">Employer</label>
      <select name="employer_id" id="employer_id" class="mt-1 block w-full border-gray-300 rounded-md">
        <option value="">Select an employer</option>
        @foreach ($employers as $employer)
          <option value="{{ $employer->id }}" {{ old('employer_id') == $employer->id ? 'selected' : '' }}>
            {{ $employer->name }}
          </option>
        @endforeach
      </select>
      @error('employer_id')
        <p class="text-sm text-red-500">{{ $message }}</p>
      @enderror
    </div>

    <div class="flex justify-end gap-4">
      <a href="/jobs" class="text-gray-600">Cancel</a>
      <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded">Save</button>
    </div>
  </form>
</x-layout>
