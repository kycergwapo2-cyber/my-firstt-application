<x-layout>
  <x-slot:heading>
    Job Listings
  </x-slot:heading>

  <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-3xl font-bold mb-6 text-indigo-600">Available Jobs</h1>

    <ul class="space-y-4">
      @foreach ($jobs as $job)
        <li class="border border-gray-200 rounded-md p-4 hover:shadow-lg transition-shadow duration-300">
          <a href="/jobs/{{ $job->id }}" class="block text-lg font-semibold text-blue-600 hover:underline">
            {{ $job->title }}
          </a>
          <p class="text-gray-700 mt-1">
            <strong>Employer:</strong> {{ $job->employer->name }}
          </p>
          <p class="text-gray-700 mt-1">
            <strong>Salary:</strong> {{ $job->salary }}
          </p>

          @if ($job->tags->isNotEmpty())
            <div class="mt-2">
              @foreach ($job->tags as $tag)
                <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                  {{ $tag->name }}
                </span>
              @endforeach
            </div>
          @endif
        </li>
      @endforeach
    </ul>
  </div>
</x-layout>
