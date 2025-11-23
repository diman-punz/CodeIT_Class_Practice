<x-layout>
    <section>
        <div class= "p-10" margin-auto>
            <h1 class="text-3xl font-bold mb-6 text-center underline">Edit Course</h1>
            <form action="{{route('course-update',$course->id)}}", method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="name">Course Name</label>
                        <input type="text" name="name" id="name" class="w-full rounded" value="{{$course->name}}">
                    </div>
                    <div>
                        <label for="price">Course Price</label>
                        <input type="number" name="price" id="price" class="w-full rounded" value="{{$course->price}}">
                    </div>
                    <div class="col-span-2">
                        <label for="description">Course Description</label>
                        <textarea name="description" id="description" rows="4" class="w-full rounded">{{$course->description}}
                        </textarea>
                    </div>
                    <div>
                        <label for="image">Course image</label>
                        <input type="file" name="image" id="image" class="w-full rounded">
                        <img src="{{asset($course->image)}}" height="100" alt="">
                    </div>
                    <div class="col-span-2 flex justify-center">
                        <button type="submit" class="bg-green-500 hover:bg-green-700 px-6 py-2 rounded mt-6 text-white">update Course</button>
                    </div>
                </div>
            </form>
        </div>
     </section>
</x-layout>
