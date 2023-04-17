<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
    <x-headdash>
      Show Order
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
        <main class="h-full overflow-y-auto">
          <div class="container p-6 mx-auto grid">
            <div class="flex items-start py-2">
                <div class="px-4">
                    <a
                    class="cursor-pointer text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                    href="{{ redirect()->back()->getTargetUrl() }}"
                    >
                        Return
                </a>
                </div>
                <div class="px-4">
                    <h3 class="text-gray-700 dark:text-gray-400 mb-2">Order by {{ $user->first_name . ' ' . $user->last_name }}</h3>

                </div>
            </div>
            @if ($user->status == 'review')
              <form action="{{ route('order.update', ['id' => $user->id]) }}" method="post">
                <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
            @csrf
            <div class="flex flex-col">
                <div class="flex justify-center">
                    <label class="mt-4 mr-2 text-sm">
                      <span class="text-gray-700 dark:text-gray-400">First Name</span>
                      <input
                        type="text"
                        class="w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        name="first_name"
                        value="{{ $user->first_name }}"
                      />
                      <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                    </label>
                    <label class="mt-4 ml-2 text-sm">
                      <span class="text-gray-700 dark:text-gray-400">Last Name</span>
                      <input
                        type="text"
                        class="w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        value="{{ $user->last_name }}"
                        name="last_name"
                      />
                      <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                    </label>
                  </div>
                  <label class="mt-4 mr-2 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Tele</span>
                    <input
                      type="text"
                      class="w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                      name="phone"
                      value="{{ $user->phone }}"
                    />
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                  </label>
                  <label class="mt-4 ml-2 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Email</span>
                    <input
                      type="email"
                      class="w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                      value="{{ $user->email }}"
                      name="email"
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </label>
                  <div class="flex">
                    <label class="mt-4 mr-2 text-sm">
                      <span class="text-gray-700 dark:text-gray-400">Country</span>
                      <input
                        type="text"
                        class="w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        name="country"
                        value="{{ $user->country }}"
                      />
                      <x-input-error :messages="$errors->get('country')" class="mt-2" />
                    </label>
                    <label class="mt-4 ml-2 text-sm">
                      <span class="text-gray-700 dark:text-gray-400">City</span>
                      <input
                        type="text"
                        class="w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        value="{{ $user->city }}"
                        name="city"
                      />
                      <x-input-error :messages="$errors->get('city')" class="mt-2" />
                    </label>
                  </div>
                  <label class="mt-4 ml-2 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Adress</span>
                    <input
                      type="text"
                      class="w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                      value="{{ $user->adresse }}"
                      name="adresse"
                    />
                    <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
                  </label>
                    <label class="mt-4 mr-2 text-sm">
                      <span class="text-gray-700 dark:text-gray-400">Zip Code</span>
                      <input
                        type="text"
                        class="w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        name="zip_code"
                        value="{{ $user->zip_code }}"
                      />
                      <x-input-error :messages="$errors->get('zip_code')" class="mt-2" />
                    </label>
            </div>
              
              
              <div class="flex justify-end">
                <div class="px-4">
                  <form class="inline-flex" action="{{ route('order.update', ['id' => $user->id]) }}" method="post">
                    @csrf
                    <button
                        type="submit"
                        class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                        >
                            Update
                    </button>
                    </form>
                    <form class="inline-flex" action="{{ route('order.accept', ['id' => $user->id]) }}" method="post">
                        @csrf
                        <button
                        type="submit"
                        class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                        >
                            Accept
                        </button>
                    </form>
                </div>
              </div>
            </div>
              
            </form>
            @elseif ($user->status == 'progress')
              <form action="{{ route('order.confirm', ['id' => $user->id]) }}" method="post">
                  <div
                class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
              >
              @csrf
              <div class="flex flex-col">
                  <div class="flex justify-center">
                      <label class="mt-4 mr-2 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">First Name</span>
                        <input
                          type="text"
                          class="w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                          name="first_name"
                          value="{{ $user->first_name }}"
                        />
                        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                      </label>
                      <label class="mt-4 ml-2 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Last Name</span>
                        <input
                          type="text"
                          class="w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                          value="{{ $user->last_name }}"
                          name="last_name"
                        />
                        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                      </label>
                    </div>
                    <label class="mt-4 mr-2 text-sm">
                      <span class="text-gray-700 dark:text-gray-400">Tele</span>
                      <input
                        type="text"
                        class="w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        name="phone"
                        value="{{ $user->phone }}"
                      />
                      <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </label>
                    <label class="mt-4 ml-2 text-sm">
                      <span class="text-gray-700 dark:text-gray-400">Email</span>
                      <input
                        type="email"
                        class="w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        value="{{ $user->email }}"
                        name="email"
                      />
                      <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </label>
                    <div class="flex">
                      <label class="mt-4 mr-2 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Country</span>
                        <input
                          type="text"
                          class="w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                          name="country"
                          value="{{ $user->country }}"
                        />
                        <x-input-error :messages="$errors->get('country')" class="mt-2" />
                      </label>
                      <label class="mt-4 ml-2 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">City</span>
                        <input
                          type="text"
                          class="w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                          value="{{ $user->city }}"
                          name="city"
                        />
                        <x-input-error :messages="$errors->get('city')" class="mt-2" />
                      </label>
                    </div>
                    <label class="mt-4 ml-2 text-sm">
                      <span class="text-gray-700 dark:text-gray-400">Adress</span>
                      <input
                        type="text"
                        class="w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        value="{{ $user->adresse }}"
                        name="adresse"
                      />
                      <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
                    </label>
                      <label class="mt-4 mr-2 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Zip Code</span>
                        <input
                          type="text"
                          class="w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                          name="zip_code"
                          value="{{ $user->zip_code }}"
                        />
                        <x-input-error :messages="$errors->get('zip_code')" class="mt-2" />
                      </label>
              </div>
              <div class="flex justify-end">
                  <div class="px-4">
                      <button
                          type="submit"
                          class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                          >
                              Confirm
                      </button>
                  </div>
                </div>
              </div>
                
              </form>
            @else
            <div
            class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
          >
          <div class="flex flex-col">
              <div class="flex justify-center">
                  <label class="mt-4 mr-2 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">First Name</span>
                    <input
                      type="text"
                      class="w-full mt-1 text-sm bg-black text-white dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                      name="first_name"
                      value="{{ $user->first_name }}"
                      readonly
                    />
                  </label>
                  <label class="mt-4 ml-2 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Last Name</span>
                    <input
                      type="text"
                      class="w-full mt-1 text-sm bg-black text-white dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                      value="{{ $user->last_name }}"
                      name="last_name"
                      readonly
                    />
                  </label>
                </div>
                <label class="mt-4 mr-2 text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Tele</span>
                  <input
                    type="text"
                    class="w-full mt-1 text-sm bg-black text-white dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    name="phone"
                    value="{{ $user->phone }}"
                    readonly
                  />
                </label>
                <label class="mt-4 ml-2 text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Email</span>
                  <input
                    type="email"
                    class="w-full mt-1 text-sm bg-black text-white dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    value="{{ $user->email }}"
                    name="email"
                    readonly
                  />
                </label>
                <div class="flex">
                  <label class="mt-4 mr-2 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Country</span>
                    <input
                      type="text"
                      class="w-full mt-1 text-sm bg-black text-white dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                      name="country"
                      value="{{ $user->country }}"
                      readonly
                    />
                  </label>
                  <label class="mt-4 ml-2 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">City</span>
                    <input
                      type="text"
                      class="w-full mt-1 text-sm bg-black text-white dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                      value="{{ $user->city }}"
                      name="city"
                    />
                  </label>
                </div>
                <label class="mt-4 ml-2 text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Adress</span>
                  <input
                    type="text"
                    class="w-full mt-1 text-sm bg-black text-white dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    value="{{ $user->adresse }}"
                    name="adresse"
                    readonly
                  />
                </label>
                  <label class="mt-4 mr-2 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Zip Code</span>
                    <input
                      type="text"
                      class="w-full mt-1 text-sm bg-black text-white dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                      name="zip_code"
                      value="{{ $user->zip_code }}"
                      readonly
                    />
                  </label>
              </div>
            @endif
              
              
          </div>
        </main>
      </div>
    </div>
  </body>
</html>