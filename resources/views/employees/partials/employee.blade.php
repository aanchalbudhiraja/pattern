<li>
    {{ $employee->name }}

    @if ($employee->children->isNotEmpty())
        <ul>
            @foreach ($employee->children as $child)
                @include('employees.partials.employee', ['employee' => $child])
            @endforeach
        </ul>
    @endif
</li>
