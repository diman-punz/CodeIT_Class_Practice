<x-layout>
    <section>
        <div class= "p-10" margin-auto>
            <h1 class="text-3xl font-bold mb-6 text-center underline">Courses</h1>
            <form action="/save-course", method="POST">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="name">Course Name</label>
                        <input type="text" name="name" id="name" class="w-full rounded">
                    </div>
                    <div>
                        <label for="price">Course Price</label>
                        <input type="number" name="price" id="price" class="w-full rounded">
                    </div>
                    <div class="col-span-2">
                        <label for="description">Course Description</label>
                        <textarea name="description" id="description" rows="4" class="w-full rounded"></textarea>
                    </div>
                    <div class="col-span-2 flex justify-center">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 px-6 py-2 rounded mt-6 text-white">Add Course</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default col-span-2 mt-10 margin-auto p-10">
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
                            <td class-="px-6 py-4 font-medium text-body whitespace-nowrap">
                                <form action="/delete-company/{{$course->id}}", method="POST"></form>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 px-4 py-2 rounded text-white">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </section>
</x-layout>
