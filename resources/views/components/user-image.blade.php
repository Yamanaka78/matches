<div x-data="imagePreview()">
    <input @change="showPreview(event)" type="file" id="image" name="image">
    <img src="{{ isset(Auth::user()->image) ? asset('storage/' . Auth::user()->image) : asset('images/no-image.png') }}" alt="" id="preview">

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
