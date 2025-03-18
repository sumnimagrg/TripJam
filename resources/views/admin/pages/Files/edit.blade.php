@extends('admin.inc.main')

@section('container')

    <div class="container p-5">
        <a href="{{ route('file.index') }}" class="btn btn-primary my-3">Back</a>
        
        <fieldset>
            <legend> Form </legend>
            <form action="{{ route('file.update', $file->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <label for="floatingInputValue">Title</label> <br />
                    <input type="text" class="form-control " id="floatingInputValue" placeholder="name@example.com"
                        value="{{ $file->title }}" name="title" required />

                    <input type="text" class="form-control d-none" id="floatingInputValue" placeholder="name@example.com"
                        value="{{ auth()->user()->id }}" name="user_id" required />
                </div>
                <br />            
                       <div>
                        <label for="newImage">Edit Image:</label> <br />
                        <input type="file" class="form-control" id="newImage" name="image" accept="image/*">
                    </div>
                    <br />              
                    <div>
                    <button type="submit" class="my-3 btn btn-primary">Submit</button>
                </div>
            </form>
        </fieldset>
    </div>
@endsection
