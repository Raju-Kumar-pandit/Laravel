<x-layout>
    <div class="container">
        <h1>Lists Resume</h1>
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Download</th>
            </tr>
            <tr>
                <td>{{$resume->name}}</td>
                <td>{{$resume->email}}</td>
                <td>View</td>
                <td>Edit</td>
                <td>Delete</td>
                <td>Download</td>
            </tr>
        </table>
    </div>
</x-layout>