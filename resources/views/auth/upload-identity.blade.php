@extends('layout.structure')

@section('content')
<body>
    <section class="h-[100vh]">
        @include('include.navbar-unreg')
        <div class="-z-10 absolute h-[100vh] top-0">
            <img src="{{ url('image/login-bg.svg') }}" alt="">
        </div>
        <div class="z-1 relative bg-white w-[1357px] h-screen ml-auto rounded-l-[50px] shadow-[0px_0px_100px_0px_rgba(0,0,0,0.25)]">
            <div class="absolute mt-[160px] w-full max-w-[1027px]">
                <h1 class="font-Host text-4xl font-extrabold ml-[160px]">
                    Upload identitasmu<span class="text-[#DA0700]">*</span>
                </h1>
                
                <form method="POST" action="{{ route('identity.store') }}" enctype="multipart/form-data" class="w-full max-w-[1027px] mt-[20px] ml-[160px] flex-row">
                    @csrf
                    
                    <label for="identity" id="dropzone" class="flex flex-col items-center justify-center w-full h-[560px] border border-[#989898] rounded-lg cursor-pointer text-black transition-colors duration-200 overflow-hidden font-Host">
                        <div id="dropzone-default" class="flex flex-col items-center justify-center pt-5 pb-6 pointer-events-none">
                            <img src="{{ url('icon/upload.svg') }}" alt="" class="h-40 stroke-[0.3]">
                            <p class="mb-2 text-[20px] text-center"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-[16px] text-gray-500 text-center">SVG, PNG, JPG or GIF (max. 5Mb)</p>
                        </div>
                        <div id="dropzone-preview" class="hidden flex-col items-center justify-center text-center p-4 space-y-2">
                            <p class="text-2xl font-semibold">Files uploaded:</p>
                            <div id="preview-files" class="text-[20px] text-gray-700 space-y-1"></div>
                        </div>
                        
                        <input id="identity" name="identity" type="file" class="hidden" accept=".svg,.png,.jpg,.jpeg,.gif" required />
                    </label>
                    
                    <div id="file-preview" class="mt-4 text-[16px] text-gray-700 space-y-1"></div>

                    <button type="submit" class="mt-6 bg-[#DA0700] w-[160px] h-[46px] rounded-full text-white font-bold text-lg font-Host">
                        Kirim
                    </button>
                </form>
            </div>
        </div>
        
        <script>
            const dropzone = document.getElementById('dropzone');
            const fileInput = document.getElementById('identity');
            const previewBox = document.getElementById('dropzone-preview');
            const defaultBox = document.getElementById('dropzone-default');
            const previewFiles = document.getElementById('preview-files');
            
            function showFilesInsideDropzone(files) {
                // Hide default content
                defaultBox.classList.add('hidden');
                previewBox.classList.remove('hidden');
                
                // Show file names
                previewFiles.innerHTML = '';
                Array.from(files).forEach(file => {
                    const p = document.createElement('p');
                    p.textContent = `📄 ${file.name} (${(file.size / 1024).toFixed(2)} KB)`;
                    previewFiles.appendChild(p);
                });
            }
            
            dropzone.addEventListener('dragover', (e) => {
                e.preventDefault();
                dropzone.classList.add('border-2', 'border-blue-500');
            });
            
            dropzone.addEventListener('dragleave', () => {
                dropzone.classList.remove('border-2', 'border-blue-500');
            });
            
            dropzone.addEventListener('drop', (e) => {
                e.preventDefault();
                dropzone.classList.remove('border-2', 'border-blue-500');
                if (e.dataTransfer.files.length > 0) {
                    fileInput.files = e.dataTransfer.files;
                    showFilesInsideDropzone(fileInput.files);
                }
            });
            
            fileInput.addEventListener('change', () => {
                if (fileInput.files.length > 0) {
                    showFilesInsideDropzone(fileInput.files);
                }
            });
        </script>
    </section>
</body>
@endsection