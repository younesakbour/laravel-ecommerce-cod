<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
    <x-headdash>
      New Category
    </x-headdash>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
      <!-- Desktop sidebar -->
    <x-aside/>
      <!-- Mobile sidebar -->

      <div class="flex flex-col flex-1 w-full">
        
        <x-profile/>
        <main class="h-full overflow-y-auto">
          <div class="container p-6 mx-auto grid">
          
            <form enctype="multipart/form-data" action="{{ route('storecategorie') }}" method="post">
              @csrf
              <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Categorie Name</span>
                <input
                  name="name"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Product Name"
                />
                @error('name')
                <p style="color: red">    Ktb gha smiya mgada asahbi </p>
                @enderror
              </label>

              

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Categorie Icon</span>
                <input
                  name="image"
                  type='file'
                  accept=".ico"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  multiple
                />
                @if(session('fail'))
                <p style="color: red">     {{ session('fail') }}</p>
                  @endif
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Size type
                </span>
                <select
                name="taille"
                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              >
         
              <option value="num">Foot measurement </option>
              <option value="hoc">Body measurement </option>
              <option value="null" selected>Non</option>
            
                
             
               
              </select>
              </label>
              
            

       

              <button
                  type="submit"
                  class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                  Add Categorie
              </button>
              
            </div>
            </form>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>