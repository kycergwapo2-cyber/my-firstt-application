<x-layout>
  <x-slot:heading>
    {{ $job->title }}
  </x-slot:heading>

  <div class="bg-white shadow rounded-lg p-6 max-w-3xl mx-auto">
    <h2 class="text-2xl font-bold text-indigo-600">{{ $job->title }}</h2>
    <p class="text-sm text-gray-500">{{ $job->employer->name }}</p>
    <p class="mt-4 text-gray-700">This job pays <strong>{{ $job->salary }}</strong> per year.</p>

    <a href="/jobs" class="inline-block mt-6 text-indigo-500 hover:underline">
      ← Back to all jobs
    </a>
  </div>
</x-layout>
