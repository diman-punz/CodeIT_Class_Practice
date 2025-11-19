<x-layout>
  <section>
    <div class="p-10" >
        <h1 class="mb-8 text-3xl text-center font-semibold">Create Company</h1>
        <form action="/save-company" method="post" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="name">Enter Company Name</label>
                    <input type="text" name="name" id="name" class="w-full rounded">
                </div>
                <div>
                    <label for="email">Enter Company Email</label>
                    <input type="email" name="email" id="email" class="w-full rounded">
                </div>
                <div>
                    <label for="contact">Enter Company Contact</label>
                    <input type="text" name="contact" id="contact" class="w-full rounded">
                </div>
                <div>
                    <label for="address">Enter Company address</label>
                    <input type="text" name="address" id="address" class="w-full rounded">
                </div>
                <div>
                    <label for="address">Image</label>
                    <input type="file" name="image" id="image" class="w-full rounded">
                </div>

                <div class="col-span-2 flex justify-center">
                    <button type="submit" class="bg-green-500 hover:bg-green-700 px-6 py-2 rounded mt-6 text-amber-50">Save</button>
                </div>


            </div>
        </form>
        <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default col-span-2 mt-10">
            <table class="w-full text-sm text-left rtl:text-right text-body">
                <thead class="text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default">
                    <tr>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Company id
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Company name
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Contact
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Address
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Images
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
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
                            <form action="/delete-company/{{$company->id}}" method="post">
                                @csrf
                                @method("delete")
                                <button type="submit">
                                    <i class="fa-solid fa-trash  text-red-600 cursor-pointer"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </section>
</x-layout>
