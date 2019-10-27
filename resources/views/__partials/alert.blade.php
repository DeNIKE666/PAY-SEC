@if (count($errors))
    <section class="error bg-offwhite">
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }} </li> <br>
            @endforeach
        </ul>
    </section>
@endif
