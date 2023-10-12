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
                @if ($task->completion_status === 1)
                    <td class="border-b-2 px-4 py-2 rounded-3x1 text-gray-500 dark:text-gray-500 line-through">
                @else
                    <td class="border-b-2 px-4 py-2 rounded-3x1 text-gray-900 dark:text-gray-100">
                @endif
                        <form action="{{route('tasks.update')}}" method="patch">
                            @csrf
                            @method('patch')
                            <input type="hidden" name="id" value="{{ $task->id }}">
                        @if ($task->completion_status === 1)
                            <input type="hidden" name="completion_status" value="0">
                        @else
                            <input type="hidden" name="completion_status" value="1">
                        @endif
                            <a href="#" onclick="this.parentNode.submit()"> {{$task->name}} </a>
                        </form>
                    </td>
                    <td class="px-4 py-2 rounded-3x1 text-gray-900 dark:text-gray-100">
                        <form action="{{route('tasks.edit')}}" method="get">
                            @csrf
                            @method('get')
                            <input type="hidden" name="task" value="{{ $task }}">
                            <input type="hidden" name="edit" value="1">
                            <button type="submit"
                                class="text-center text-white bg-gray-800 hover:bg-gray-600 px-2 py-1 rounded">
                                <i class='fa'>&#xf044;</i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
