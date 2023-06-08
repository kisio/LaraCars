<x-layout>
  <x-card class="p-10">
    <header>
      <h1 class="text-3xl text-center font-bold my-6 uppercase">
        Manage My Cars
      </h1>
    </header>

    <table class="w-full table-auto rounded-sm">
    <thead>
        <tr class="border-gray-300">
          <th class="px-4 py-2 border-t border-b border-gray-300 text-lg">Title</th>
          <th class="px-4 py-2 border-t border-b border-gray-300 text-lg">Company</th>
          <th class="px-4 py-2 border-t border-b border-gray-300 text-lg">Location</th>
          <th class="px-4 py-2 border-t border-b border-gray-300 text-lg">Created At</th>
          <th class="px-4 py-2 border-t border-b border-gray-300 text-lg">Image</th>
          <th class="px-4 py-2 border-t border-b border-gray-300 text-lg">Actions</th>
        </tr>
      </thead>
      <tbody>
        @unless($listings->isEmpty())
        @foreach($listings as $listing)
        
        <tr class="border-gray-300">
          
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <a href="/listings/{{$listing->id}}"> {{$listing->title}} </a>
          </td>
          <!--  -->
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <a href="/listings/{{$listing->id}}"> {{$listing->company}} </a>
          </td>
          <!--  -->
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <a href="/listings/{{$listing->id}}"> {{$listing->location}} </a>
          </td>
          <!--  -->
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <a href="/listings/{{$listing->id}}"> {{$listing->created_at}} </a>
          </td>
          <!--  -->
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
          <img class="w-96 mr-12 mb-12" src="{{$listing->image ? asset('storage/' . $listing->image) : asset('/images/no-image.jpeg')}}" alt="" />
          </td>
          <!--  -->
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <a href="/listings/{{$listing->id}}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i
                class="fa-solid fa-pen-to-square"></i>
              Edit</a>
          </td>
          <!--  -->
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <form method="POST" action="/listings/{{$listing->id}}">
              @csrf
              @method('DELETE')
              <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
        @else
        <tr class="border-gray-300">
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <p class="text-center">No Listings Found</p>
          </td>
        </tr>
        @endunless

      </tbody>
    </table>
  </x-card>
</x-layout>
