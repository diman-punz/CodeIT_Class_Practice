<x-layout>
    <section>
        <div class= "p-10" margin-auto>
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold mb-6 text-center underline col-span-3">Admission</h1>
            <a href="/admission/create" class="bg-[#4949db] px-2 py-1 rounded-3xl text-amber-50 text-1xl "> <i class="fa-solid fa-plus"></i> Add new admission</a>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-body">
                <thead class="text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default">
                    <tr>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Admission id
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            name
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Contact
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Course-Id
                        </th>
                    </tr>
                </thead>
                {{-- <tbody>
                    @foreach ($companies as $id=>$company)
                    <tr>
                        <td class="px-6 py-4 font-medium text-body whitespace-nowrap">
                            {{ ++$id }}
                        </td>
                        <td class="px-6 py-4 font-medium text-body whitespace-nowrap">
                            {{ $company->name }}
                        </td>
                        <td class="px-6 py-4 font-medium text-body whitespace-nowrap">
                            {{ $company->email }}
                        </td>
                        <td class="px-6 py-4 font-medium text-body whitespace-nowrap">
                            {{ $company->contact }}
                        </td>
                        <td class="px-6 py-4 font-medium text-body whitespace-nowrap">
                            {{ $company->address }}
                        </td>
                        <td class="px-6 py-4 font-medium text-body whitespace-nowrap">
                           <img src="{{asset($company->image)}}" class="h-[100px]"alt="">
                        </td>
                        <td class="px-6 py-4 font-medium text-body whitespace-nowrap">
                            <div class="flex gap-4 justify-between">
                                <form action="/delete-company/{{$company->id}}" method="post">
                                    @csrf
                                    @method("delete")
                                    <button type="submit">
                                        <i class="fa-solid fa-trash  text-red-600 cursor-pointer"></i>
                                    </button>
                                </form>
                                <a href="/edit-company/{{$company->id}}" method="GET">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody> --}}
            </table>
        </div>
    </div>
    </section>
</x-layout>
