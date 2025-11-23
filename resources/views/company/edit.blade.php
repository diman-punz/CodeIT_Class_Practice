<x-layout>
  <section>
    <div class="p-10" >
        <h1 class="mb-8 text-3xl text-center font-semibold">Edit Company</h1>
        <form action="{{route('company-update',$company->id)}} " method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="name">Enter Company Name</label>
                    <input type="text" name="name" id="name" class="w-full rounded" valu="{{ $company->name }}">
                </div>
                <div>
                    <label for="email">Enter Company Email</label>
                    <input type="email" name="email" id="email" class="w-full rounded" value="{{ $company->email }}">
                </div>
                <div>
                    <label for="contact">Enter Company Contact</label>
                    <input type="text" name="contact" id="contact" class="w-full rounded" value="{{ $company->contact }}">
                </div>
                <div>
                    <label for="address">Enter Company address</label>
                    <input type="text" name="address" id="address" class="w-full rounded" value="{{ $company->address }}">
                </div>
                <div>
                    <label for="address">Image</label>
                    <input type="file" name="image" id="image" class="w-full rounded"> <img src="{{ asset($company->image)}}" height="100px" alt="">
                </div>

                <div class="col-span-2 flex justify-center">
                    <button type="submit" class="bg-green-500 hover:bg-green-700 px-6 py-2 rounded mt-6 text-amber-50">Update</button>
                </div>
            </div>
        </form>
    </div>
  </section>
</x-layout>
