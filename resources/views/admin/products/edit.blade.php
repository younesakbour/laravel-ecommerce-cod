<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
    <x-headdash>
      Edit Product
    </x-headdash>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
    <x-aside/>
    <div class="flex flex-col flex-1 w-full">
    <x-profile/>
        <main class="h-full overflow-y-auto">
          <div class="container p-6 mx-auto grid">
            <?php  $product = $product[0]   ?>
            
            <form enctype="multipart/form-data" action="{{ route('update',$product->id) }}" method="get">
              @csrf
              <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input
                  name="product_name"
                  value="{{ $product->product_name }}"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Product Name"
                />
              </label>

              

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Price</span>
                <input
                  name="price"
                  value="{{ $product->price }}"
                  step="any"
                  type='number'
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Product Price"
                />
              </label>
              
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Description</span>
                <textarea
                  name="description"
                
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  rows="3"
                  placeholder="Type your Description of your Product."
                >{{ $product->description }}</textarea>
              </label>

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Specification</span>
             
                <textarea
                  name="specification"
                 
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  rows="3"
                  placeholder="Type your Specification of your Product."
                >{{ $product->specification }}</textarea>
              </label>

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Quantity</span>
                <input
                  name="quantity"
                  value="{{ $product->quantity }}"
                  type='number'
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Product Quantity"
                />
              </label>

             
              
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Category
                </span>
                <select
                  name="category"
                 
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                >
          
                  <option selected>{{ $product->name }}</option>
          
                </select>
      
              </label>

              <button
                  type="submit"
                  class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                  Edite Product
              </button>
              
            </div>
            </form>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>