<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <a href="/newslambook/{{ $slambook[0]->id }}" class="btn btn-info m-2">New Slam Book</a>
            </div>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Question</th>
                    <th scope="col">Share</th>
                    <th scope="col">Delete</th>
                    <th scope="col">View</th>
                    <th scope="col">Edit View</th>
                    <th scope="col">Update</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $slambook[0]->Slambook_id }}</th>
                    <th>{{ $slambook[0]->Slambook_Name }}</th>
                    <td><a href="/add/{{ $slambook[0]->id }}" class="btn btn-info m-2">add </a></td>
                    <td><button class="btn btn-info m-2 " onclick="copylink()">Share</button></td>
                    <td><a href="" class="btn btn-info m-2">delete</a></td>
                    <td><a href="/view/{{$slambook[0]->id}}" class="btn btn-info m-2">View </a></td>
                    <td><a href="/editview/{{$slambook[0]->id}}" class="btn btn-info m-2">Edit View </a></td>
                    <td><a href="/editquestion/{{ $slambook[0]->id }}" class="btn btn-info m-2">Edit Question</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layout>