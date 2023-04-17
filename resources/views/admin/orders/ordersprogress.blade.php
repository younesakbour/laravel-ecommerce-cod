<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
    <x-headdash>
      Orders in Progress
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
        <main class="h-full overflow-y-auto p-3">
          <x-table :orders="$orders"/>
        </main>
      </div>
    </div>
  </body>
</html>