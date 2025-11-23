<x-layout>
    <section>
        <div class= "p-10" margin-auto>
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold mb-6 text-center underline col-span-3">Courses</h1>
                <a href="{{route('course')}}" class="bg-[#4949db] px-2 py-1 rounded-3xl text-amber-50 text-1xl "> <i class="fa-solid fa-plus"></i> create course</a>
            </div>
                <table class="w-full text-sm text-left rtl:text-right text-body">
                    <thead class="text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default">
                        <tr>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Course id
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Course name
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Course price
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Course description
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Course image
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $id=>$course)
                        <tr>
                            <td class="px-6 py-4 font-medium text-body whitespace-nowrap">
                                {{ ++$id}}
                            </td>
                            <td class="px-6 py-4 font-medium text-body whitespace-nowrap">
                                {{ $course->name }}
                            </td>
                            <td class="px-6 py-4 font-medium text-body whitespace-nowrap">
                                {{ $course->price }}
                            </td>
                            <td class="px-6 py-4 font-medium text-body whitespace-nowrap">
                                {{ $course->description }}
                            </td>
                            <td class="px-6 py-4 font-medium text-body whitespace-nowrap">
                                <img src="{{asset($course->image)}}" class="h-[100px]"alt="">
                            </td>
                            <td class-="px-6 py-4 font-medium text-body whitespace-nowrap">
                                <div class="flex gap-4">
                                    <form action="{{route('course-delete',$course->id)}}", method="POST">
                                        @csrf
                                        @method("delete")
                                        <button type="submit">
                                        <i class="fa-solid fa-trash  text-red-600 cursor-pointer"></i>
                                        </button>
                                    </form>
                                    <a href="{{route('course-edit',$course->id)}}", method="GET">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </section>
</x-layout>
