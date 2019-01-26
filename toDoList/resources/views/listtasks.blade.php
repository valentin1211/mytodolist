@if ($todolist->tasks->count())
        <ul class="thelist__list-tasks">


            @foreach ($todolist->tasks as $task)
               
                <li class="thelist__task">
                    <form class="thelist__task-checkbox" action="/tasks/{{ $task->id }}" method="POST" >
                        @method("PATCH")
                        @csrf
                        <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? "checked" : "" }}>
                    </form>
                    <h3 class="thelist__task-title {{ $task->completed ? "thelist__task-title--completed" : "" }}" >{{ $task->description }}</h3>
                </li>
                
            @endforeach

        </ul>
@else
        <p class="u-center-text">You dont have any tasks.</p>
@endif


