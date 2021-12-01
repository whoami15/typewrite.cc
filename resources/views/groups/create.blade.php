<x-layouts.main title="Create Group - Typewrite.cc">
    <h3>Create Group</h3>

    <form action="{{ route('app.groups.store') }}" method="POST">
        @csrf

        <label for="name">
            Name

            <input type="text" name="name" id="name" placeholder="My Awesome Newsletter">
        </label>

        <div class="grid">
            <label for="from_name">
                From Name

                <input type="text" name="from_name" id="from_name" placeholder="John Smith">
            </label>

            <label for="from_email">
                From Email

                <input type="text" name="from_email" id="from_email" placeholder="john@smith.com">
            </label>
        </div>

        <button type="submit">Create</button>
    </form>
</x-layouts.main>
