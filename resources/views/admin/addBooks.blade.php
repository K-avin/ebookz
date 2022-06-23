<!-- component -->
{!! Toastr::message() !!}
<div class="bg-gray-100 min-h-screen pt-2 font-mono my-16">
    <div class="container mx-auto">
        <div class="inputs w-full max-w-2xl p-6 mx-auto">
            <h2 class="text-2xl text-gray-900">Add New Book</h2>

            <form action="{{route('save-book')}}" method="post" enctype="multipart/form-data" class="mt-6 border-t border-gray-400 pt-4">
                @csrf
                <div class='flex flex-wrap -mx-3 mb-6'>
                    <div class="personal w-full pt-4">
                        <div class="flex items-center justify-between mt-4">
                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Book
                                    name</label>
                                <input name="bookName"
                                    class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                    type='text' required>
                            </div>
                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                <label
                                    class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Author</label>
                                <input name="author"
                                    class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                    type='text' required>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                <label
                                    class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Language</label>
                                <input name="language"
                                    class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                    type='text' required>
                            </div>
                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                <label
                                    class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Price</label>
                                <input name="price"
                                    class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                    type='text' required>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Cover
                                    image</label>
                                <input name="coverImg"
                                    class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                    type='file' required>
                            </div>
                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Book
                                    (PDF)</label>
                                <input name="bookPdf"
                                    class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                    type='file' required>
                            </div>
                        </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label
                                class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Description</label>
                            <textarea name="description"
                                class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white'
                                required></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button
                                class="appearance-none bg-gray-200 text-gray-900 px-2 py-1 shadow-sm border border-gray-400 rounded-md mr-3"
                                type="submit">save changes</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
