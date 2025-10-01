<x-layout>
  <x-slot:heading>
    Home
  </x-slot:heading>

  <div class="space-y-6">
    <p class="text-lg leading-relaxed">
      Welcome to our modern website! This Home page is styled with a clean layout, lots of whitespace, and a responsive design that looks good on mobile and desktop.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow">
        <h2 class="text-2xl font-semibold mb-2">Feature One</h2>
        <p class="text-gray-600">Description for feature one goes here. Highlight something important.</p>
      </div>
      <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow">
        <h2 class="text-2xl font-semibold mb-2">Feature Two</h2>
        <p class="text-gray-600">Description for feature two goes here. Highlight something else important.</p>
      </div>
    </div>

    <div class="mt-8">
      <button class="px-6 py-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">
        Learn More
      </button>
    </div>
  </div>

</x-layout>
