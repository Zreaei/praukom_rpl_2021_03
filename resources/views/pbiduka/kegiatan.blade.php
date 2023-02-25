@extends('layouts.main')
@section('container')


<div class="">
    <div class="fixed w-20 mt-5 overflow-y-auto bg-gray-50 rounded-r-lg bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
        <a href="{{ route('pbiduka.prakerin') }}" class="flex p-2 text-xl font-bold text-[#ffffff] rounded-r-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z" clip-rule="evenodd" /></svg>
            
        </a>
    </div>
    <div class="flex justify-center">

        <div class="px-28 py-7 w-full justify-center items-center ">
            <div class="flex justify-between">
                <div>
                    <h3 class="text-2xl font-bold text-[#2D5EBB]">DATA KEGIATAN SISWA</h3>
                </div>
            </div>
            <!-- Table kegiatan -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
                <table class="w-full text-sm text-left text-[#ffffff]">
                    <!-- head -->
                    <thead class="text-xs text-center uppercase bg-[#2D5EBB]">
                        <tr>
                            <th scope="col" class="px-7 py-4 ">
                                No
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                Foto
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                Keterangan
                            </th> 
                            <th scope="col" class="px-7 py-4 ">
                                tgl_kegiatan
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                jam_masuk
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                jam_keluar
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    ?>
                        @forelse ($datakegiatan as $item)
                        <tr class="bg-[#ffffff] text-[#000000]">
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $no++ }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                <label for="image{{ $item->id_kegiatan }}" type="button" class="text-[#ffffff] bg-[#09C4FF] hover:bg-opacity-50 focus:outline-none focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5">
                                    <span>Lihat</span>         
                                </label>
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->keterangan_kegiatan }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->tgl_kegiatan}}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->jam_masuk}}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->jam_keluar}}
                            </td>
                            @empty
                        <tr class="bg-[#ffffff] text-[#000000]">
                            <td colspan="9">
                                <div class="text-sm text-item font-semibold px-7 py-4 text-center w-full">
                                    <div class="flex justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-14 h-14 opacity-50"><path fill-rule="evenodd" d="M5.478 5.559A1.5 1.5 0 016.912 4.5H9A.75.75 0 009 3H6.912a3 3 0 00-2.868 2.118l-2.411 7.838a3 3 0 00-.133.882V18a3 3 0 003 3h15a3 3 0 003-3v-4.162c0-.299-.045-.596-.133-.882l-2.412-7.838A3 3 0 0017.088 3H15a.75.75 0 000 1.5h2.088a1.5 1.5 0 011.434 1.059l2.213 7.191H17.89a3 3 0 00-2.684 1.658l-.256.513a1.5 1.5 0 01-1.342.829h-3.218a1.5 1.5 0 01-1.342-.83l-.256-.512a3 3 0 00-2.684-1.658H3.265l2.213-7.191z" clip-rule="evenodd" /><path fill-rule="evenodd" d="M12 2.25a.75.75 0 01.75.75v6.44l1.72-1.72a.75.75 0 111.06 1.06l-3 3a.75.75 0 01-1.06 0l-3-3a.75.75 0 011.06-1.06l1.72 1.72V3a.75.75 0 01.75-.75z" clip-rule="evenodd" /></svg>
                                    </div>
                                    <p class="font-semibold text-2xl opacity-50">Data Kosong</p>
                                </div>
                            </td>
                        </tr>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

            <!-- IMG -->

            @foreach ($datakegiatan as $image)
            <input type="checkbox" id="image{{$image->id_kegiatan}}" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box w-full max-w-2xl bg-[#2D5EBB]">
                    <label for="image{{$image->id_kegiatan}}" class="btn btn-ghost btn-sm btn-circle text-[#ffffff] bg-[#2D5EBB] hover:bg-[#ffffff] hover:text-[#2D5EBB] absolute right-2 top-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg></label>
                        <div class="flex justify-between">
                            <div class="form-control w-full max-w-2xl p-3">
                                <img src="{{ asset('storage/' . $image->foto_kegiatan) }}" class="rounded-lg">
                            </div>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script>
    function previewImage() {
            const image = document.querySelector('#foto_kegiatan');
            const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

    </script>
@endsection