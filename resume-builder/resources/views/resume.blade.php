<x-layout>
    <div class="container mt-5">
        <h2>Your Resume</h2>
        <form action="/resume" method="POST">
            @csrf
            <div class="row p-3">
                <div class="col-md-5 mt-3">
                    <label for="fname" class="form-label">Title</label>
                    <input type="text" id="title" name="title" class="form-control">
                </div>
                <div class="col-md-5 mt-3 ms-auto">
                    <label for="lname" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{$user[0]->name}}">
                </div>
                <div class="col-md-5 mt-3">
                    <label for="email" class="form-label">Email ID</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{$user[0]->email}}">
                </div>
                <div class="col-md-5 mt-3 ms-auto">
                    <label for="phone" class="form-label">Mobile No.</label>
                    <input type="tel" id="phone" name="phone" class="form-control">
                </div>
                <div class="col-md-5 mt-3">
                    <label for="fit" class="form-label">Github ID link</label>
                    <input type="text" id="git" name="git" class="form-control">
                </div>
                <div class="col-md-5 mt-3 ms-auto">
                    <label for="rank" class="form-label">Hakerrank ID</label>
                    <input type="text" id="rank" name="rank" class="form-control">
                </div>
                <div class="col-md-10 mt-3">
                    <h3>Address</h3>
                </div>
                <div class="col-md-1 mt-3 ms-auto">
                    <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#demo1">Hide/Unhide</button>
                </div>
                <div class="collapse col-md-5 mt-3" id="demo1">
                    <label for="district" class="form-label">District Name</label>
                    <input type="text" id="district" name="district" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3 ms-auto" id="demo1">
                    <label for="state" class="form-label">State Name</label>
                    <input type="text" id="state" name="state" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3" id="demo1">
                    <label for="pcode" class="form-label">Pin Code</label>
                    <input type="text" id="pcode" name="pcode" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3 ms-auto" id="demo1">
                    <label for="nation" class="form-label">Nationalty</label>
                    <input type="text" id="nation" name="nation" class="form-control">
                </div>                
                <div class="col-md-10 mt-3">
                    <h3>Carear Objective</h3>
                </div>
                <div class="col-md-1 mt-3 ms-auto">
                    <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#demo2">Hide/Unhide</button>
                </div>
                <div class="container collapse mt-3" id="demo2">
                    <textarea name="objective" id="objective" cols="10" rows="3" class="form-control" placeholder="Enter text.."></textarea>
                </div>
                <div class="container mt-3">
                    <h3>Acadmic Qualification</h3>
                </div>
                <div class="col-md-10 mt-3">
                    <h5>Master/B.Tech Degree Details</h5>
                </div>
                <div class="col-md-1 mt-3 ms-auto">
                    <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#demo3">Hide/Unhide</button>
                </div>
                <div class="collapse col-md-5 mt-3" id="demo3">
                    <label for="buniversity" class="form-label">University Name</label>
                    <input type="text" id="buniversity" name="buniversity" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3 ms-auto" id="demo3">
                    <label for="bcname" class="form-label">College Name</label>
                    <input type="text" id="bcname" name="bcname" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3" id="demo3">
                    <label for="bcoursename" class="form-label">Course Name</label>
                    <input type="text" id="bcoursename" name="bcoursename" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3 ms-auto" id="demo3">
                    <label for="mpercentages" class="form-label">Mark in Percentages</label>
                    <input type="text" id="bpercentages" name="bpercentages" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3" id="demo3">
                    <label for="bsdate" class="form-label">Start Date</label>
                    <input type="date" id="bsdate" name="bsdate" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3 ms-auto" id="demo3">
                    <label for="bpdate" class="form-label">Passed Date</label>
                    <input type="date" id="bpdate" name="bpdate" class="form-control">
                </div>
                <div class="col-md-10 mt-3">
                    <h5>Batchelor/Diploma/Graduation Degree Details</h5>
                </div>
                <div class="col-md-1 mt-3 ms-auto">
                    <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#demo4">Hide/Unhide</button>
                </div>
                <div class="collapse col-md-5 mt-3" id="demo4">
                    <label for="guniversity" class="form-label">University Name</label>
                    <input type="text" id="guniversity" name="guniversity" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3 ms-auto" id="demo4">
                    <label for="gcname" class="form-label">College Name</label>
                    <input type="text" id="gcname" name="gcname" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3" id="demo4">
                    <label for="gcoursename" class="form-label">Course Name</label>
                    <input type="text" id="gcoursename" name="gcoursename" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3 ms-auto" id="demo4">
                    <label for="gpercentages" class="form-label">Mark in Percentages</label>
                    <input type="text" id="gpercentages" name="gpercentages" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3" id="demo4">
                    <label for="gsdate" class="form-label">Start Date</label>
                    <input type="date" id="gsdate" name="gsdate" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3 ms-auto" id="demo4">
                    <label for="gpdate" class="form-label">Passed Date</label>
                    <input type="date" id="gpdate" name="gpdate" class="form-control">
                </div>
                <div class="col-md-10 mt-3">
                    <h5>12th Details</h5>
                </div>
                <div class="col-md-1 mt-3 ms-auto">
                    <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#demo5">Hide/Unhide</button>
                </div>
                <div class="collapse col-md-5 mt-3" id="demo5">
                    <label for="board" class="form-label">Board Name</label>
                    <input type="text" id="board" name="board" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3 ms-auto" id="demo5">
                    <label for="icname" class="form-label">College Name</label>
                    <input type="text" id="icname" name="icname" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3" id="demo5">
                    <label for="icoursename" class="form-label">Course Name</label>
                    <input type="text" id="icoursename" name="icoursename" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3 ms-auto" id="demo5">
                    <label for="ipercentages" class="form-label">Mark in Percentages</label>
                    <input type="text" id="ipercentages" name="ipercentages" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3" id="demo5">
                    <label for="isdate" class="form-label">Start Date</label>
                    <input type="date" id="isdate" name="isdate" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3 ms-auto" id="demo5">
                    <label for="ipdate" class="form-label">Passed Date</label>
                    <input type="date" id="ipdate" name="ipdate" class="form-control">
                </div>
                <div class="col-md-10 mt-3">
                    <h5>10th Details</h5>
                </div>
                <div class="col-md-1 mt-3 ms-auto"> 
                    <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#demo6">Hide/Unhide</button>
                </div>
                <div class="collapse col-md-5 mt-3" id="demo6">
                    <label for="mboard" class="form-label">Board Name</label>
                    <input type="text" id="mboard" name="mboard" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3 ms-auto" id="demo6">
                    <label for="mcname" class="form-label">Collerge Name</label>
                    <input type="text" id="mcname" name="mcname" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3" id="demo6">
                    <label for="mcoursename" class="form-label">Course Name</label>
                    <input type="text" id="mcoursename" name="mcoursename" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3 ms-auto" id="demo6">
                    <label for="mpercentages" class="form-label">Mark in Percentages</label>
                    <input type="text" id="mpercentages" name="mpercentages" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3" id="demo6">
                    <label for="msdate" class="form-label">Start Date</label>
                    <input type="date" id="msdate" name="msdate" class="form-control">
                </div>
                <div class="collapse col-md-5 mt-3 ms-auto" id="demo6">
                    <label for="mpdate" class="form-label">Passed Date</label>
                    <input type="date" id="mpdate" name="mpdate" class="form-control">
                </div>
                <div class="col-md-10 mt-3">
                    <h5>Your Experience</h5>
                </div>
                <div class="col-md-1 mt-3 ms-auto">
                    <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#demo7">Hide/Unhide</button>
                </div>
                <div id="demo7" class="collapse col-md-5 mt-3">
                    <label for="esdate" class="form-label">Start Date</label>
                    <input type="text" id="esdate" name="esdate" class="form-control">
                </div>
                <div id="demo7" class="collapse col-md-5 mt-3 ms-auto">
                    <label for="epdate" class="form-label">Passed Date</label>
                    <input type="text" id="epdate" name="epdate" class="form-control">
                </div>
                <div class="container collapse mt-3" id="demo7">
                    <textarea name="objective" id="objective" rows="3" class="form-control"></textarea>
                </div>
                <div class="col-md-10 mt-3">
                    <h2>Technical Skills</h2>
                </div>
                <div class="col-md-1 mt-3 ms-auto">
                    <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#demo8">Hide/Unhide</button>
                </div>
                <div class="container collapse mt-3" id="demo8">
                    <h5>Programming languages/Tools/framwork</h5>
                </div>
                <div class="collapse col-md-5 mt-3" id="demo8">
                    <input type="text" name="language1" id="language1" class="form-control" placeholder="Enter....">
                </div>
                <div class="collapse col-md-5 mt-3 ms-auto" id="demo8">
                    <input type="text" name="language2" id="language2" class="form-control" placeholder="Enter....">
                </div>
                <div class="collapse col-md-5 mt-3" id="demo8">
                    <input type="text" name="language3" id="language3" class="form-control" placeholder="Enter....">
                </div>
                <div class="collapse col-md-5 mt-3 ms-auto" id="demo8">
                    <input type="text" name="language4" id="language4" class="form-control" placeholder="Enter....">
                </div>
                <div class="collapse col-md-5 mt-3" id="demo8">
                    <input type="text" name="language5" id="language5" class="form-control" placeholder="Enter....">
                </div>
                <div class="collapse col-md-5 mt-3 ms-auto" id="demo8">
                    <input type="text" name="language6" id="language6" class="form-control" placeholder="Enter....">
                </div>
            </div>
            <button type="submit" class="btn mb-3 btn-primary">Submit</button>
        </form>
    </div>
</x-layout>