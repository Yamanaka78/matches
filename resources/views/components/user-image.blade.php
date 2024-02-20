<div x-data="imagePreview()">
    <div class="mr-3">
    <img src="{{ isset(Auth::user()->image) ? asset('storage/' . Auth::user()->image) : asset('images/no-image.png') }}"
    alt="" id="preview" class="w-16 h-16 rounded-full object-cover border-none bg-gray-200">
    </div>
    <div class="flex items-center">
        <button
                x-on:click="document.getElementById('image').click()"
                type="button"
                class="inline-flex items-center uppercase rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            SELECT A NEW PHOTO
        </button>
        <input @change="showPreview(event)" type="file" id="image" name="image" class="hidden">
        <script>
            function imagePreview(){
                return {
                    showPreview: (event) => {
                        if (event.target.files.length > 0){
                            var src = URL.createObjectURL(event.target.files[0]);
                            document.getElementById('preview').src = src;
                            }
                    }
                }
            }
        </script>
    </div>
</div>
