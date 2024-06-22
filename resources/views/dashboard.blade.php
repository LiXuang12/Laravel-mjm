@extends('layout.main')
@section('content')
    @include('component.sidebar.sidebar')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
           <div class="w-full grid-cols-4 grid place-items-center py-3 px-16 gap-8">
                <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                    <img class="w-full h-auto rounded-t-xl" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2532&q=80" alt="Image Description">
                    <div class="p-4 md:p-5">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                        New Order
                    </h3>
                    <p class="mt-1 text-gray-500 dark:text-neutral-400 font-bold">
                        100
                    </p>
                    <a class="mt-2 py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-yellow-300 text-white hover:bg-yellow-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                        Click Me
                    </a>
                    </div>
                </div>

                <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                    <img class="w-full h-auto rounded-t-xl" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2532&q=80" alt="Image Description">
                    <div class="p-4 md:p-5">
                      <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                        Bounce Rate
                      </h3>
                      <p class="mt-1 text-gray-500 dark:text-neutral-400 font-bold">
                        200
                      </p>
                      <a class="mt-2 py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-yellow-300 text-white hover:bg-yellow-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                        Click Me
                      </a>
                    </div>
                </div>

                  <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                        <img class="w-full h-auto rounded-t-xl" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2532&q=80" alt="Image Description">
                        <div class="p-4 md:p-5">
                        <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                            User Registration
                        </h3>
                        <p class="mt-1 text-gray-500 dark:text-neutral-400 font-bold">
                            300
                        </p>
                        <a class="mt-2 py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-yellow-300 text-white hover:bg-yellow-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                            Click Me
                        </a>
                        </div>
                </div>

                  <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                        <img class="w-full h-auto rounded-t-xl" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2532&q=80" alt="Image Description">
                        <div class="p-4 md:p-5">
                        <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                            Unique Visitor
                        </h3>
                        <p class="mt-1 text-gray-500 dark:text-neutral-400 font-bold">
                            400
                        </p>
                        <a class="mt-2 py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-yellow-300 text-white hover:bg-yellow-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                            Click Me
                        </a>
                        </div>
                  </div>
           </div>
        </div>
     </div>
@endsection
