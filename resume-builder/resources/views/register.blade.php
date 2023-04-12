<x-layout>
    <div class="container p-5">
    <h2>Register Page</h2>
    <form action="/register" method="POST">
        @csrf
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" >
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email ID:</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" >
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Password:</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/login" class="btn btn-primary">Login</a>
    </form>
    </div>
</x-layout>