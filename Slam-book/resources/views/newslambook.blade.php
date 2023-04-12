<x-layout>
    <div class="container">
        <form action="/create" method="post">
            @csrf
            <div class="form-group">
                <label for="slambook" class="form-label">User ID</label>
                <input type="text" name="userid" id="userid" class="form-control" value="{{ $userid }}">
            </div>
            <div class="form-group">
                <label for="slambook" class="form-label">Slam book Name</label>
                <input type="text" name="slambook" id="slambook" class="form-control">
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
</x-layout>