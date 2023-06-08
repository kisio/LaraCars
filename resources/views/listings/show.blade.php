<x-layout>
  <a href="/" class="inline-block text-black ml-4 mb-4" style="background-color:black; color:white;"><i class=" fa-solid fa-arrow-left"></i> Back</a>
  <div class="mx-4">
    <x-card class="p-10">
      <div class="flex flex-col md:flex-row items-center justify-center text-center">
        <img class="w-96 mr-12 mb-12" src="{{$listing->image ? asset('storage/' . $listing->image) : asset('/images/no-image.jpeg')}}" alt="" />

        <div class="md:text-left">
          <h3 class="text-2xl mb-2">{{$listing->title}}</h3>
          <div class="text-xl font-bold mb-4">{{$listing->company}}</div>

          <x-listing-tags :tagsCsv="$listing->tags" />

          <div class="text-lg my-4">
            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
          </div>

          <div class="border border-gray-200 w-full mb-6"></div>

          <div>
            <h3 class="text-3xl font-bold mb-4">Car Description</h3>
            <div class="text-lg space-y-6">
              {{$listing->description}}
            </div>
          </div>

          <div class="mt-6">
            <a href="mailto:{{$listing->email}}" class="block bg-laravel text-white py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-envelope"></i> Contact Employer</a>
            <a href="{{$listing->website}}" target="_blank" class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-globe"></i> Visit Website</a>
          </div>
        </div>
      </div>
    </x-card>
  </div>
</x-layout>
