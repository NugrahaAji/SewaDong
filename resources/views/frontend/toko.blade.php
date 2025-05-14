@extends('layout.structure')
<section>
    @include('include.navbar-toko')    
    @include('include.sidebar')
    
    <div class="w-[calc(100vw-500px)] h-[calc(100vh-176px)] fixed right-20 top-[128px] overflow-y-scroll scrollbar-hide">
        <div class="grid grid-cols-3 gap-5 mb-6">
            <div class="h-80 overflow-y-hidden border-gray-200 rounded-lg border bg-white">
                <div class="mx-10 my-7 font-Host grow">
                    <h1 class="text-[25px] font-semibold text-[#da0700]">Stok item</h1>
                    <div class="overflow-y-scroll h-[224px] scrollbar-hide">
                        <table class="table-fixed w-full">
                            <colgroup>
                                <col class="w-1/5" />
                                <col class="w-3/5" />
                                <col class="w-1/5" />
                            </colgroup>
                            <thead>
                                <tr class="h-8">
                                    <th class="text-start">ID</th>
                                    <th class="text-start" class="w-52">Nama Item</th>
                                    <th class="text-center">Stok</th>
                                </tr>
                            </thead>
                            <tbody>
                            @for($i = 0; $i < 10; $i++)
                                <tr class="h-8">
                                    <td>001</td>
                                    <td>Printer Epson L200</td>
                                    <td class="text-center">3</td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="h-80 overflow-y-hidden border-gray-200 rounded-lg border bg-white">
                <div class="mx-10 my-7 font-Host grow">
                    <h1 class="text-[25px] font-semibold text-[#da0700]">Penerimaan item</h1>
                    <h1 class="text-[202px] font-semibold text-[#da0700] text-center">0</h1>
                </div>
            </div>
            <div class="h-80 overflow-y-hidden border-gray-200 rounded-lg border bg-white">
                <div class="mx-10 my-7 font-Host grow">
                    <h1 class="text-[25px] font-semibold text-[#da0700]">Pengembalian item</h1>
                    <h1 class="text-[202px] font-semibold text-[#da0700] text-center">0</h1>
                </div>
            </div>
            </div>
            <div class="grid grid-cols-5 gap-5">
                <div class="h-[468px] overflow-y-hidden border-gray-200 col-span-3 rounded-lg border bg-white">
                    <div class="mx-10 my-7 font-Host grow">
                        <h1 class="text-[25px] font-semibold text-[#da0700]">Ulasan</h1>
                        <div class="overflow-y-scroll h-[370px] scrollbar-hide">
                            <table class="table-fixed w-full">
                                <colgroup>
                                    <col class="w-1/5" />
                                    <col class="w-/5" />
                                    <col class="w-3/5" />
                                </colgroup>
                                <thead>
                                    <tr class="h-8">
                                        <th class="text-start">Nama Penyewa</th>
                                        <th class="text-start">Rating</th>
                                        <th class="text-start">Ulasan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @for($i = 0; $i < 15; $i++)
                                    <tr class="h-8">
                                        <td class="align-top">Nugraha Aji</td>
                                        <td class="align-top">4/5</td>
                                        <td class="text-start">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat praesentium officia numquam hic tempora, quisquam ea blanditiis tenetur iste, doloribus est molestias optio a exercitationem dicta quibusdam incidunt adipisci alias!</td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="h-[468px] overflow-y-hidden border-gray-200 col-span-2 rounded-lg border bg-white">
                    <div class="mx-10 my-7 font-Host grow">
                        <h1 class="text-[25px] font-semibold text-[#da0700]">Item</h1>
                        <div class="overflow-y-scroll h-[352px] scrollbar-hide">
                            <table class="table-fixed w-full">
                                <colgroup>
                                    <col class="w-1/6" />
                                    <col class="w-2/6" />
                                    <col class="w-2/6" />
                                    <col class="w-1/6" />
                                </colgroup>
                                <thead>
                                    <tr class="h-8">
                                        <th class="text-start">ID</th>
                                        <th class="text-start">Nama Item</th>
                                        <th class="text-start">Kategori Item</th>
                                        <th class="text-start">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @for($i = 0; $i < 15; $i++)
                                    <tr class="h-8">
                                        <td>001</td>
                                        <td>Printer Epson L200</td>
                                        <td class="">Alat kantor</td>
                                        <td class="">menunggu</td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>