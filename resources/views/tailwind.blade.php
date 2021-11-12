@extends ('layouts.master')

@section('content')
<div class="pt-10 pb-10">
  <div class="py-8 px-8 max-w-sm mx-auto bg-white rounded-xl shadow-md space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
    <img class="block mx-auto h-24 rounded-full sm:mx-0 sm:flex-shrink-0" src="/storage/erin-lindford.jpg" alt="Woman's Face">
    <div class="text-center space-y-2 sm:text-left">
      <div class="space-y-0.5">
        <p class="text-lg text-black font-semibold">
          Erin Lindford
        </p>
        <p class="text-gray-500 font-medium">
          Product Engineer
        </p>
      </div>
      <button class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Message</button>
    </div>
  </div>



  <div class="mt-10 p-6 max-w-sm mx-auto bg-white rounded-xl shadow-md flex items-center space-x-4">
    <div class="flex-shrink-0">
      <img class="h-12 w-12" src="/storage/logo.svg" alt="ChitChat Logo">
    </div>
    <div>
      <div class="text-xl font-medium text-black">ChitChat</div>
      <p class="text-gray-500">You have a new message!</p>
    </div>
  </div>



  <div class="mt-10 max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
    <div class="md:flex">
      <div class="md:flex-shrink-0">
        <img class="h-48 w-full object-cover md:h-full md:w-48" src="/storage/store.jpg" alt="Man looking at item at a store">
      </div>
      <div class="p-8">
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Case study</div>
        <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Finding customers for your new business</a>
        <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.</p>
      </div>
    </div>
  </div>



  <form class="mt-10 p-4 bg-indigo-500 max-w-md mx-auto">
    <input class="border border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
    <button class="bg-purple-600 py-2 px-6 rounded-xl text-white hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50">
      Sign up
    </button>
  </form>

  <div class="max-w-md p-10 mx-auto text-center">
      <button class="py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
        Click me
      </button>

  </div>



  <!--
  Welcome to Tailwind Play, the official Tailwind CSS playground!

  Everything here works just like it does when you're running Tailwind locally
  with a real build pipeline. You can customize your config file, use features
  like `@apply`, or even add third-party plugins.

  Feel free to play with this example if you're just learning, or trash it and
  start from scratch if you know enough to be dangerous. Have fun!
-->
<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
      <div class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-sky-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
      <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
        <div class="max-w-md mx-auto">
          <div>
            <img src="/storage/tailwind-logo.svg" class="h-7 sm:h-8" />
          </div>
          <div class="divide-y divide-gray-200">
            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
              <p>An advanced online playground for Tailwind CSS, including support for things like:</p>
              <ul class="list-disc space-y-2">
                <li class="flex items-start">
                  <span class="h-6 flex items-center sm:h-7">
                    <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                  </span>
                  <p class="ml-2">
                    Customizing your
                    <code class="text-sm font-bold text-gray-900">tailwind.config.js</code> file
                  </p>
                </li>
                <li class="flex items-start">
                  <span class="h-6 flex items-center sm:h-7">
                    <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                  </span>
                  <p class="ml-2">
                    Extracting classes with
                    <code class="text-sm font-bold text-gray-900">@apply</code>
                  </p>
                </li>
                <li class="flex items-start">
                  <span class="h-6 flex items-center sm:h-7">
                    <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                  </span>
                  <p class="ml-2">Code completion with instant preview</p>
                </li>
              </ul>
              <p>Perfect for learning how the framework works, prototyping a new idea, or creating a demo to share online.</p>
            </div>
            <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
              <p>Want to dig deeper into Tailwind?</p>
              <p>
                <a href="https://tailwindcss.com/docs" class="text-cyan-600 hover:text-cyan-700"> Read the docs &rarr; </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection