<x-layout>
    <div class="container">
        <h1 class="m-5 text-center text-info">Edit Question</h1>
        <form method="post">
            @csrf
            <div class="row m-2">
                @foreach ($questions as $question)
                <div class="col-md-6 p-2 d-flex">
                    <input type="text" name="question[]" id="question" class="form-control" value="{{$question->Question}}">
                    <button formaction="/editquestion/{{$question->Question_id}}" class="btn btn-info">update</button>
                </div>
                @endforeach
            </div>
        </form>
    </div>
</x-layout>