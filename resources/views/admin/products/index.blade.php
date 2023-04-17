<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
    <x-headdash>
      Products
    </x-headdash>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
      <!-- Desktop sidebar -->
      <x-aside/>
      <div class="flex flex-col flex-1 w-full">
      <x-profile/>
        <main class="h-full">
          {{-- contents --}}
        
<div class="m-3 p-3 "> 


         {{-- @foreach ( $data as $item )
           
       

        <div class="flex justify-center">
          <div
            class="flex flex-col rounded-lg bg-white shadow-lg dark:bg-neutral-700 md:max-w-xl md:flex-row">
            <img
              class="h-6 w-24 rounded-circle img-fluid border"
              src="{{ asset('imgs').'/'.$item->path }}"
              alt="" />
            <div class="flex flex-col justify-start p-6 ">
              <h5
                class="mb-2 text-xl font-medium text-neutral-800 dark:text-neutral-50">
                {{ $item->product_name }}
              </h5>
              <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              <p class="text-xs text-neutral-500 dark:text-neutral-300">
                Last updated 3 mins ago
              </p>
            </div>
          </div>
        </div>
        @endforeach --}}
        <div class="flex flex-col mt-8">
          <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
              <div class="inline-block w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg  dark:bg-black">
                  <table class="w-100 bg-gray">
                      <thead>
                          <tr class="">
                              <th
                                  class="px-6 py-3 text-xs font-medium  tracking-wider text-left text-gray  uppercase border-b border-gray-200 bg-gray-50">
                                  Name</th>
                              <th
                                  class="px-6 py-3 text-xs font-medium  tracking-wider text-left text-gray uppercase border-b border-gray-200 bg-gray-50">
                                  Category</th>
                              <th
                                  class="px-6 py-3 text-xs font-medium  tracking-wider text-left text-gray uppercase border-b border-gray-200 bg-gray-50">
                                  reviews</th>
                                  <th
                                  class="px-6 py-3 text-xs font-medium  tracking-wider text-left text-gray uppercase border-b border-gray-200 bg-gray-50">
                                  quantity</th>
                                
                              <th
                                  class="px-6 py-3 text-xs font-medium  tracking-wider text-left text-gray uppercase border-b border-gray-200 bg-gray-50">
                                  Edit</th>
                              <th
                                  class="px-6 py-3 text-xs font-medium  tracking-wider text-left text-gray uppercase border-b border-gray-200 bg-gray-50">
                                  Delete</th>
                          </tr>
                      </thead>
                      <tbody class="">
                        @foreach ( $data as $item )
                          
                  
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="w-5 h-5 " 
                                        src="{{ asset('imgs').'/'.$item->path }}"
                                        alt="admin dashboard ui">
                                    </div>
    
                                    <div class="ml-4">
                                        <div class="text-sm font-medium leading-5 text-gray-900  dark:text-white">
                                           {{ $item->product_name }}
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 ">
                              <div class=" text-gray-500 dark:text-white">{{ $item->name }}</div>
                          </td>

                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <span
                                class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 dark:bg-green-100 rounded-full">{{ $item->reviews }}</span>
                        </td>

                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 dark:text-white">
                            <div class=" leading-5 text-black-500">{{ $item->quantity }}</div>
                        </td>
  
                      
  
                          <td 
                              class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                              <a href="{{ route('editproduct',$item->id) }}">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none"
                                  viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                              </svg>
                              </a>
                          </td>
                          <td
                             data-id="{{ $item->id }}"
                              class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                              <button class="remove">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none"
                                  viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                              </svg>
                            </button>
                          </td>
                      </tr>

                      @endforeach
                    </tbody>
                  </table>
              </div>
          </div>
      </div>


      </div>





        </main>
      </div>
    </div>
    <script type="text/javascript">
          $(".remove").click(function (e) {
     
   
        var ele = $(this);
   
        if(confirm("Do you really want to remove?")) {
            $.ajax({
                url: '{{ route("destroy") }}',
                method: "DELETE",
                data: {
                  _token: '{{ csrf_token() }}', 
                    id: ele.parents("td").attr("data-id")
                },
                success: function (response) {
                  
                    window.location.reload();
                }
            });
        }
    });
      </script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js/Chart.min.js"></script>

  </body>
</html>