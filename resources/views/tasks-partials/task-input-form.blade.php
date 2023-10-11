<section class="box-content h-32">
    <header>
        <h1 class="font-semibold text-gray-900 dark:text-white">
            {{ __('ADD TO QUEUE') }}
        </h1>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Add a task to today\'s queue') }}
        </p>
    </header>
    <div>
        <form method="POST" action="" class="w-full max-w-sm">
            @csrf
            @method('POST')
            <div class="flex border-b border-tea-500 py-2">
              <input class="appearance-none bg-transparent border-none w-full text-gray-700 dark:text-gray-100 mr-3 py-1 px-2 leading-tight focus:outline-none"
                    type="text"
                    placeholder="Start a task"
                    aria-label="Full name">
              <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"
                  type="submit">
                  {{ __('Add Task') }}
              </button>
              <button class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded"
                  type="reset">
                  {{ __('Cancel') }}
              </button>
            </div>
        </form>
    </div>
</section>
