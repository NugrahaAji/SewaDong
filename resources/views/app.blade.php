<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinjemDong</title>

    <!-- Tailwind -->
    @vite('resources/css/app.css')

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

</head>
<body>
    <nav class="h-20 w-full bg-amber-100" >
        <div class="flex flex-row px-40 font-Montserrat">
            <h1 clasS="text-[32px] pt-[6px] pb-[10px] font-Montserrat font-bold">PinjemDong</h1>
            <div class="py-6 align-middle item font-semibold">
                <li class="flex gap-[36px] pt-[6px] pb-[10px] text-[16px]">
                    <ul class="w-24 text-center"><a href="">Beranda</a></ul>
                    <ul class="w-24 text-center"><a href="">Kategori</a></ul>
                    <ul class="w-24 text-center"><a href="">Daftar</a></ul>
                    <ul class="rounded-full bg-[#F9DAA1] w-28 h-8 text-center items-center cursor-pointer"><button href="">Masuk</button></ul>
                </li>
            </div>
        </div>
    </nav>
</body>
</html>