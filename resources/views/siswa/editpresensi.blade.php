@extends('layouts.main')
@section('container')
<div class="flex bg-gray-100">
    <aside class="w-64" aria-label="Sidebar">
    <div class="px-3 py-4 overflow-y-auto rounded bg-gray-50 h-screen bg-gradient-to-b from-blue-700 to-stone-900">
        <ul class="space-y-2">
            <h3 class="font-bold text-orange-400 text-2xl pl-7 mb-10">ONE<span class="block">PRAKTIK.in</span></h3>
            <li>
                <a href="{{ route('siswa.pengajuan') }}" class="flex items-center p-2 text-xl font-bold text-white rounded-lg hover:bg-blue-600 ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625z" /><path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" /></svg>
                <span class="ml-3">Pengajuan</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-xl font-bold text-white rounded-lg hover:bg-blue-600 mt-8">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M7.5 5.25a3 3 0 013-3h3a3 3 0 013 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0112 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 017.5 5.455V5.25zm7.5 0v.09a49.488 49.488 0 00-6 0v-.09a1.5 1.5 0 011.5-1.5h3a1.5 1.5 0 011.5 1.5zm-3 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" /><path d="M3 18.4v-2.796a4.3 4.3 0 00.713.31A26.226 26.226 0 0012 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 01-6.477-.427C4.047 21.128 3 19.852 3 18.4z" /></svg>
                <span class="ml-3">Prakerin</span>
                </a>
            </li>
            <li>
                <a href="{{ route('siswa.presensi') }}" class="flex items-center p-2 text-xl font-bold text-white rounded-lg hover:bg-blue-600 mt-8 ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z" clip-rule="evenodd" /><path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zm9.586 4.594a.75.75 0 00-1.172-.938l-2.476 3.096-.908-.907a.75.75 0 00-1.06 1.06l1.5 1.5a.75.75 0 001.116-.062l3-3.75z" clip-rule="evenodd" /></svg>
                <span class="ml-3">Presensi</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-xl font-bold text-white rounded-lg hover:bg-blue-600 mt-8 ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.54 15h6.42l.5 1.5H8.29l.5-1.5zm8.085-8.995a.75.75 0 10-.75-1.299 12.81 12.81 0 00-3.558 3.05L11.03 8.47a.75.75 0 00-1.06 0l-3 3a.75.75 0 101.06 1.06l2.47-2.47 1.617 1.618a.75.75 0 001.146-.102 11.312 11.312 0 013.612-3.321z" clip-rule="evenodd" /></svg>
                <span class="ml-3">Kegiatan</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-xl font-bold text-white rounded-lg hover:bg-blue-600 mt-8 ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg>
                <span class="ml-3">Verifikasi</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 ml-7 text-xl font-bold text-white rounded-lg hover:bg-gradient-to-b from-orange-500 to-red-500 absolute insert-x-1 bottom-0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" /></svg>
                <span class="ml-3 ">Logout</span>
                </a>
            </li>
           
        </ul>
    </div>
    </aside>
    <div class="container ">
        <div class="px-7 w-full justify-center items-center">
            <!-- <div class="bg-gradient-to-r from-blue-700 to-stone-900 h-52 rounded-lg "> -->
            <div class="grid gap-4 gird-cols-2">
                <h3 class="text-2xl font-bold text-blue-700 ">FORM EDIT DATA PRESENSI</h3>
            </div>
            <div class="card ">
                <div class="card-body bg-gradient-to-b from-blue-700 to-stone-900 rounded-lg">
                    <form action="/siswa/editsimpan/{{$presensi->id_agenda}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="">
                        <label for="idagenda" class="form-label inline-block font-semibold text-white">ID Presensi</label>
                        <input
                        type="text"
                        name="id_agenda"
                        value="{{ $presensi->id_agenda }}"
                        class="
                            form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                        "
                        id="idagenda"
                        placeholder="ID Presensi"
                        />
                        </div>
                        <div class="">
                        <label for="statusabsen" class="form-label inline-block font-semibold text-white">Status</label>
                        <select name="status_agenda" value="{{ $presensi->status_agenda  }}" class="form-select w-full px-3 py-1.5 rounded 
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none ">
                            <option class="form-control col-8" value="Sakit" {{ $presensi->status_agenda == 'Sakit' ? 'selected' : ''}} >Sakit</option>
                            <option class="form-control col-8" value="Izin" {{ $presensi->status_agenda == 'Izin' ? 'selected' : ''}}>Izin</option>
                            <option class="form-control col-8" value="Hadir" {{ $presensi->status_agenda == 'Hadir' ? 'selected' : ''}}>Hadir</option>
                        </select>
                        </div>
                        <div class="">
                        <label for="ketagenda" class="form-label inline-block font-semibold text-white">Keterangan</label>
                        <input
                        type="text"
                        name="keterangan_agenda"
                        value="{{ $presensi->keterangan_agenda }}"
                        class="
                            form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                        "
                        id="ketagenda"
                        placeholder="Keterangan Presensi"
                        />
                        </div>
                        <div class="">
                        <label for="tglagenda" class="form-label inline-block font-semibold text-white">Tanggal</label>
                        <input
                        type="date"
                        name="tgl_agenda"
                        value="{{ $presensi->tgl_agenda }}"
                        class="
                            form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                        "
                        id="tglagenda"
                        />
                        </div>
                        <div class="">
                        <label for="foto" class="form-label inline-block font-semibold text-white">Foto</label>
                        <input
                        type="file"
                        name="foto"
                        class="
                            form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                        "
                        id="foto"
                        src="{{ asset('img') . $presensi->foto }}"
                        />
                        </div>
                        <div class="flex justify-end">
                            <a href="{{ route('siswa.presensi') }}" class="btn btn-danger px-10 mr-3 bg-gradient-to-b from-blue-700 to-sky-500">Kembali</a>
                            <button type="submit" class="btn btn-primary px-10 bg-gradient-to-b from-orange-500 to-red-500">
                                Simpan
                            </button>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
</div>
@endsection