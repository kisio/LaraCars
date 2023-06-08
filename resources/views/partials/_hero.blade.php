<section class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4">
  <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
    style="background-image: url('images/logo.png')"></div>

    <div class="z-10">
  <h1 class="text-6xl font-bold uppercase text-white">
    <span class="text-black">Lara</span>Cars
  </h1>
  <p class="text-2xl text-gray-200 font-bold my-4">
    Discover and list Cars
  </p>
  <div>
    @auth
    @else
    <a href="/register"
      class="inline-block bg-black text-white py-3 px-6 rounded-xl uppercase mt-2 hover:bg-gray-800">Sign Up to List a Car</a>
    @endauth
  </div>
</div>

</section>
