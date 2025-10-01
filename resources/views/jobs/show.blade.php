<x-layout>
  <x-slot:heading>
    {{ $job->title }}
  </x-slot:heading>

  <div class="bg-white rounded-lg shadow p-6 max-w-3xl mx-auto">
    <h2 class="text-2xl font-bold text-indigo-600">{{ $job->title }}</h2>
    <p class="text-sm text-gray-500">{{ $job->employer->name }}</p>
    <p class="mt-4 text-gray-700">This job pays <strong>{{ $job->salary }}</strong> per year.</p>
    <div class="mt-4 space-x-2">
      @foreach ($job->tags as $tag)
        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-0.5 rounded">{{ $tag->name }}</span>
      @endforeach
    </div>
    <div class="mt-6">
      <a href="/jobs/{{ $job->id }}/edit" class="px-4 py-2 bg-indigo-600 text-white rounded">Edit Job</a>
      <a href="/jobs" class="text-gray-600 ml-4">Back to all jobs</a>
    </div>
  </div>
</x-layout>
