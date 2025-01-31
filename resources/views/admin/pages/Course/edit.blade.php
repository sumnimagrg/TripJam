@extends('admin.inc.main')

@section('container')
    <div class="container p-5">
        <a href="{{ route('course.index') }}" class="btn btn-primary my-3">Back</a>
        <fieldset>
            <legend> Form </legend>
            <form action="{{ route('course.update', $course->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <label for="floatingInputValue">Title</label> <br />
                    <input type="text" class="form-control " id="floatingInputValue" placeholder="name@example.com"
                        value="{{ $course->title }}" name="title" required />
                    <input type="text" class="form-control d-none" id="floatingInputValue" placeholder="name@example.com"
                        value="{{ auth()->user()->id }}" name="user_id" required />
                </div>
                <br />  

                       {{-- <div>
                        <label for="newImage">Edit Image:</label> <br />
                        <input type="course" class="form-control" id="newImage" name="image" accept="image/*">
                    </div>
                    <br />               --}}

                    <div>
                        <label for="FloatingInputValue">Description</label> <br />
                        <textarea class="form-control" id="floatingInputArea" name="description" required></textarea>
                    </div>
                    <br />
                    
                    <div>
                    <button type="submit" class="my-3 btn btn-primary">Submit</button>
                </div>
            </form>
        </fieldset>
    </div>
@endsection
