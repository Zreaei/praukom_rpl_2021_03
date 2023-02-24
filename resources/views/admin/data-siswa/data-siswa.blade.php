@extends('layouts.main')
@section('container')

<div class="fixed w-20 mt-5 overflow-y-auto bg-gray-50 rounded-r-lg bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
    <a href="{{ route('home') }}" class="flex p-2 text-xl font-bold text-[#ffffff] rounded-r-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z" clip-rule="evenodd" /></svg>
    </a>
</div>

<div class="w-5/6 rounded mt-10 border-slate-500 mx-auto">
    <div class="overflow-x-auto">
        <table class="table w-full">
        <!-- head -->
        <thead>
            <tr>
                <th class="text-center bg-blue-700 text-white">NIS</th>
                <th class="text-center bg-blue-700 text-white">Kode User</th>
                <th class="text-center bg-blue-700 text-white">Kelas</th>
                <th class="text-center bg-blue-700 text-white">Jurusan</th>
                <th class="text-center bg-blue-700 text-white">Nama Siswa</th>
                <th class="text-center bg-blue-700 text-white">Tempat Lahir</th>
                <th class="text-center bg-blue-700 text-white">Tanggal Lahir</th>
                <th class="text-center bg-blue-700 text-white">No Telepon</th>
                <th class="text-center bg-blue-700 text-white">Opsi</th>
            </tr>
        </thead>
        @foreach ($dataSiswa as $item)
        <tbody>
            <!-- row 1 -->
            <tr>
                <td class="text-center bg-white"><h1>{{ $item->nis }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->user }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->nama_kelas }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->program_keahlian }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->nama_siswa }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->tempat_lahir }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->tgl_lahir }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->telp_siswa }}</h1></td>
                <td class="text-center bg-white">
                    <label for="modal-edit{{ $item->nis }}" class="btn btn-warning hover:text-opacity-50 justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </label>
                    <label for="modal-hapus{{ $item->nis }}" class="btn btn-error hover:text-opacity-50 justify-center">
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
        <label for="modal-tambah" class="btn btn-success hover:text-opacity-50">Tambah Siswa</label>

        {{-- Modal --}}
        <input type="checkbox" id="modal-tambah" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box relative bg-[#2D5EBB]">
                <label for="modal-tambah" class="btn btn-ghost btn-xl btn-circle text-[#ffffff] bg-[#2D5EBB] hover:bg-[#ffffff] hover:text-[#2D5EBB] absolute right-2 top-2">✕</label>
                <h3 class="text-lg font-bold text-white">Tambah Siswa</h3>
                <p class="py-4">
                    <form method="POST" action="data-siswa/simpan">
                        @csrf
                        <div class="">
                            <div class="form-control mx-auto">
                                <div class="mx-auto">
                                    <label class="input-group">
                                        <span class="pr-8">NIS</span>
                                        <input type="text" name="nis" placeholder="NIS" class="input input-bordered" />
                                    </label>
                                    <label class="input-group">
                                        <span class="pr-8">User</span>
                                        <select class="select select-bordered" name="user">
                                            <option value="default">Pilih User</option>
                                            @foreach ($user as $item)
                                                <option value="{{ $item->id_user }}">{{ $item->username }}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                    <label class="input-group">
                                        <span class="pr-8">Kelas</span>
                                        <select class="select select-bordered" name="kelas">
                                            <option value="default">Pilih Kelas</option>
                                            @foreach ($kelas as $item)
                                                <option value="{{ $item->id_kelas }}">{{ $item->tingkatan }} {{ $item->program_keahlian }} {{ $item->nama_kelas }} - Angkatan Tahun : ({{ $item->tahun_angkatan }})</option>
                                            @endforeach
                                        </select>  
                                    </label>
                                    <label class="input-group">
                                        <span class="pr-8">Nama Siswa</span>
                                        <input type="text" name="nama_siswa" placeholder="Nama Siswa" class="input input-bordered" />
                                    </label>
                                    <label class="input-group">
                                        <span class="pr-8">Tempat Lahir</span>
                                        <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="input input-bordered" />
                                    </label>
                                    <label class="input-group">
                                        <span class="pr-8">Tanggal Lahir</span>
                                        <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" class="input input-bordered" />
                                    </label>
                                    <label class="input-group">
                                        <span class="pr-8">Telepon</span>
                                        <input type="text" name="telp_siswa" placeholder="No Telepon" class="input input-bordered" />
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
    <div class="text-center">
        @foreach ($dataSiswa as $edit)
        <input type="checkbox" id="modal-edit{{ $edit->nis }}" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box relative bg-[#2D5EBB]">
                <label for="modal-edit{{ $edit->nis }}" class="btn btn-ghost btn-xl btn-circle text-[#ffffff] bg-[#2D5EBB] hover:bg-[#ffffff] hover:text-[#2D5EBB] absolute right-2 top-2">✕</label>
                <h3 class="text-lg font-bold text-center text-white">Edit User</h3>
                <p class="py-4">
                    <form method="POST" action="simpanedit">
                        @csrf
                        <div class="form-control">
                            <div class="mx-auto">
                                <label class="input-group">
                                    <span class="pr-8">User</span>
                                    <select class="select select-bordered" name="user">
                                        <option value="default">Pilih User</option>
                                        @foreach ($user as $item)
                                            <option value="{{ $item->id_user }}">{{ $item->username }}</option>
                                        @endforeach
                                    </select>
                                </label>
                                <label class="input-group">
                                    <span class="pr-8">Kelas</span>
                                    <select class="select select-bordered" name="kelas">
                                        <option value="default">Pilih Kelas</option>
                                        @foreach ($kelas as $item)
                                            <option value="{{ $item->id_kelas }}">{{ $item->tingkatan }} {{ $item->nama_kelas }}</option>
                                        @endforeach
                                    </select>  
                                </label>
                                <label class="input-group">
                                    <span class="pr-8">Nama Siswa</span>
                                    <input type="text" name="nama_siswa" placeholder="Nama Siswa" value="{{ $edit->nama_siswa }}" class="input input-bordered" />
                                </label>
                                <label class="input-group">
                                    <span class="pr-8">Tempat Lahir</span>
                                    <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" value="{{ $edit->tempat_lahir }}" class="input input-bordered" />
                                </label>
                                <label class="input-group">
                                    <span class="pr-8">Tanggal Lahir</span>
                                    <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" value="{{ $edit->tgl_lahir }}" class="input input-bordered" />
                                </label>
                                <label class="input-group">
                                    <span class="pr-8">Telepon</span>
                                    <input type="text" name="telp_siswa" placeholder="No Telepon" value="{{ $edit->telp_siswa }}" class="input input-bordered" />
                                </label>
                                <label class="input-group">
                                    <input type="hidden" name="nis" placeholder="NIS" value="{{ $edit->nis }}" class="input input-bordered" />
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
</div>

@endsection