<x-layout>
    <div class="container p-5">
    <h2>Log In</h2>
    <form action="/login" method="POST">
        @csrf
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email ID:</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" >
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Password:</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" >
        </div>
        <button type="submit" class="btn btn-primary">Log In</button>
    </form>
    </div>
</x-layout>