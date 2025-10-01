<x-layout>
  <x-slot:heading>
    Job Listings
  </x-slot:heading>

  <a href="/jobs/create" class="inline-block mb-4 px-4 py-2 bg-green-600 text-white rounded">Create Job</a>

  <div class="space-y-4">
    @foreach ($jobs as $job)
      <div class="border rounded-md p-4 hover:shadow-md">
        <a href="/jobs/{{ $job->id }}" class="text-lg font-semibold text-indigo-600 hover:underline">{{ $job->title }}</a>
        <p class="text-gray-700">Employer: {{ $job->employer->name }}</p>
        <p class="text-gray-700">Salary: {{ $job->salary }}</p>
        <div class="mt-2 space-x-2">
          @foreach($job->tags as $tag)
            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-0.5 rounded">{{ $tag->name }}</span>
          @endforeach
        </div>
      </div>
    @endforeach
  </div>

  <div class="mt-6">
    {{ $jobs->links() }}
  </div>
</x-layout>
