@extends('layouts.main')
@section('container')

<div class="fixed w-20 mt-10 overflow-y-auto bg-gray-50 rounded-r-lg bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
    <a href="{{ route('admin.home') }}" class="flex p-2 text-xl font-bold text-[#ffffff] rounded-r-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z" clip-rule="evenodd" /></svg>
    </a>
</div>

<div class="px-28 py-7 w-full justify-center items-center">
    <div class="flex justify-between">
        <h3 class="text-2xl font-bold text-[#2D5EBB] mx-auto">DATA ANGKATAN</h3>
    </div>
<div>

<div class="w-1/2 rounded mt-5 border-slate-500 mx-auto">
    <div class="overflow-x-auto">
        <table class="table w-full">
        <!-- head -->
        <thead>
            <tr>
                <th class="text-center bg-blue-700 text-white">id_angkatan</th>
                <th class="text-center bg-blue-700 text-white">Tahun Angkatan</th>
                <th class="text-center bg-blue-700 text-white">Opsi</th>
            </tr>
        </thead>
        @foreach ($dataAngkatan as $item)
        <tbody>
            <!-- row 1 -->
            <tr>
                <td class="text-center bg-white"><h1>{{ $item->id_angkatan }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->tahun_angkatan }}</h1></td>
                <td class="text-center bg-white">
                    <label for="modal-edit{{ $item->id_angkatan }}" class="btn btn-circle btn-outline btn-xl btn-warning hover:text-opacity-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </label>
                    <label for="modal-hapus{{ $item->id_angkatan }}" class="btn btn-circle btn-outline btn-xl btn-error hover:text-opacity-50 justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </label>
                </td>
            </tr>
        </tbody>
        @endforeach
        </table>
    </div>
    <div class="m-3 text-center">
        {{-- Modal Button --}}
        <label for="modal-tambah" class="btn btn-success hover:text-opacity-50">Tambah Angkatan</label>

        {{-- Modal Tambah --}}
        <input type="checkbox" id="modal-tambah" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box relative bg-[#2D5EBB]">
                <label for="modal-tambah" class="btn btn-ghost btn-xl btn-circle text-[#ffffff] bg-[#2D5EBB] hover:bg-[#ffffff] hover:text-[#2D5EBB] absolute right-2 top-2">✕</label>
                <h3 class="text-lg font-bold text-white">Tambah Angkatan</h3>
                <p class="py-4">
                    <form method="POST" action="data-angkatan/simpan">
                        @csrf
                        <div class="">
                            <div class="form-control">
                                <div class="mx-auto">
                                    <label class="input-group">
                                        <span class="pr-8">Tahun Angkatan</span>
                                        <input type="text" name="tahun_angkatan" placeholder="Tahun Angkatan" class="input input-bordered" />
                                    </label>
                                    <div class="pt-3 pb-3 grid justify-items-center">
                                        <button type="submit" value="simpan" class="btn btn-success">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </p>
            </div>
        </div>
    </div>

    {{-- Modal Edit --}}
    <div class="m-3 text-center">
        @foreach ($dataAngkatan as $edit)
            <input type="checkbox" id="modal-edit{{ $edit->id_angkatan }}" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box relative bg-[#2D5EBB]">
                    <label for="modal-edit{{ $edit->id_angkatan }}" class="btn btn-ghost btn-xl btn-circle text-[#ffffff] bg-[#2D5EBB] hover:bg-[#ffffff] hover:text-[#2D5EBB] absolute right-2 top-2">✕</label>
                    <h3 class="text-lg font-bold text-white">Edit Angkatan</h3>
                    <p class="py-4">
                        <form method="POST" action="data-angkatan/simpanedit">
                            @csrf
                            <div class="form-control">
                                <div class="mx-auto">
                                    <label class="input-group">
                                        <span class="pr-8 bg-white">Tahun Angkatan</span>
                                        <input type="text" name="tahun_angkatan" placeholder="Tahun Angkatan" value="{{ $edit->tahun_angkatan }}" class="input input-bordered" />
                                    </label>
                                    <label class="input-group hidden">
                                        <span class="pr-8 bg-white">id_angkatan</span>
                                        <input type="text" name="id_angkatan" placeholder="id_angkatan" value="{{ $edit->id_angkatan }}" class="input input-bordered" />
                                    </label>
                                    <div class="pt-3 pb-3 grid justify-items-center">
                                        <button type="submit" value="simpan" class="btn btn-success">Simpan</button></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </p>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Modal Hapus --}}
    <div>
        @foreach($dataAngkatan as $hapus)
            <input type="checkbox" id="modal-hapus{{ $hapus->id_angkatan }}" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box w-11/12 max-w-2xl bg-white">
                    <svg fill="none" class="text-[#E63946] w-1/4 mx-auto" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z">
                        </path>
                    </svg>
                    <div class="text-center">
                        <h3 class="font-bold text-2xl">Anda yakin ingin menghapus ?</h3>
                    </div>
                    <div class="flex justify-center pt-4 gap-x-20 gap-y-3">
                        <label for="modal-hapus{{ $hapus->id_angkatan }}" class="btn btn-ghost btn-base bg-[#2D5EBB] w-36 text-white text-base hover:bg-[#2D5EBB] hover:bg-opacity-70">Cancel</label>
                        <label class="btn btn-ghost btn-base bg-[#E63946] w-36 text-white text-base hover:bg-[#E63946] hover:bg-opacity-70">
                            <a href="data-angkatan/hapus/{{ $hapus->id_angkatan }}">
                                Delete
                            </a>
                        </label>
                    </div>
                </div>
            </div> 
        @endforeach
    </div>
</div>

@endsection