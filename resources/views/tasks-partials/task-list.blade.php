<section class="box-content h-32">
    <header>
        <h1 class="font-semibold text-gray-900 dark:text-white">
            {{ __('QUEUE OF THE DAY') }}
        </h1>
    </header>
    <div>
        <table class="table-auto">
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td class="border-b-2 px-4 py-2 rounded-3x1 text-gray-900 dark:text-gray-100">
                        {{$task->name}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
