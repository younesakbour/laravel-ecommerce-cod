<div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
      <table class="w-full whitespace-no-wrap">
        <thead>
          <tr
            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
          >
            <th class="px-4 py-3">Client Name</th>
            <th class="px-4 py-3">City</th>
            <th class="px-4 py-3">Status</th>
            <th class="px-4 py-3">Date</th>
            <th class="px-4 py-3">Actions</th>
          </tr>
        </thead>
        <tbody
          class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
        >
        @foreach ( $orders as $item )
          <tr class="text-gray-700 dark:text-gray-400">
            <td class="px-4 py-3">
              <div class="flex items-center text-sm">
                
              </div>
                <div>
                  <p class="font-semibold">{{ $item->first_name . ' ' . $item->last_name }}</p>
                  <p class="text-xs text-gray-600 dark:text-gray-400">
                    {{ 'phone: ' . $item->phone }}
                  </p>
                </div>
              </td>
            <td class="px-4 py-3 text-sm">
                {{ $item->city }}
            </td>
            <td class="px-4 py-3 text-xs">
                @if ($item->status == 'review')
                    <span
                    class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700"
                >
                    {{ $item->status }}
                </span>
                @elseif($item->status == 'progress')
                    <span
                    class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600"
                >
                {{ $item->status }}
                </span>
                @else
                    <span
                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                >
                {{ $item->status }}
                </span>
                @endif
            </td>
            <td class="px-4 py-3 text-sm">
                {{ $item->created_at }}
            </td>
            <td class="px-4 py-3">
              <div class="flex items-center space-x-4 text-sm"
              data-id="{{ $item->id }}">
              @if ($item->status == 'progress')
                <form action="{{ route('order.confirm', ['id' => $item->id]) }}" method="post">
                  @csrf
                  <button
                    type="submit"
                    class="collapsible-bt flex items-center justify-between p-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                    >
                        Confirm
                  </button>
                </form>
              @endif
              <form action="{{ route('order.show', ['id' => $item->id]) }}" method="get">
                @csrf
                <button
                    class="collapsible-bt flex items-center justify-between text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                    type="submit"
                    aria-label="Show"
                  >
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"> <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/> <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/> </svg>
                </button>
              </form>
              <form action="{{ route('order.destroy', ['id' => $item->id]) }}" method="post">
                @method("delete")
                @csrf
                <button
                  class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                  aria-label="Delete"
                >
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </button>
                </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
</div>