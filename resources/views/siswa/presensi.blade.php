@extends('layouts.main')
@section('container')


<div class="flex bg-gray-100">
    <aside class="w-64" aria-label="Sidebar">
    <div class="px-3 py-4 overflow-y-auto rounded bg-gray-50 h-screen bg-gradient-to-b from-blue-700 to-stone-900">
        <ul class="space-y-2">
            <h3 class="text-base font-bold text-orange-400 text-2xl pl-7 mb-10">ONE<span class="block">PRAKTIK.in</span></h3>
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
    <div class="container">

        <div class="p-7 w-full justify-center items-center ">
            <!-- <div class="bg-gradient-to-r from-blue-700 to-stone-900 h-52 rounded-lg "> -->
            <div class="grid gird-cols-2">
                <h3 class="text-2xl font-bold text-blue-700">DATA PRESENSI</h3>
                <div class="flex justify-end">
                    <!-- The button to open modal -->
                    <a href="{{ route('siswa.tambahpresensi') }}" class="btn btn-primary bg-blue-700 text-white hover:bg-blue-900 font-bold rounded-full"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" /></svg></a>
                </div>
            </div>
            <!-- Table pengajuan -->
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden rounded-lg">
                        
                            <table class="min-w-full text-center rounded-box">
                            <thead class="border-b">
                                <tr class="bg-blue-700">
                                    <th scope="col" class="text-sm font-medium text-white px-2 py-4">
                                        No
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        ID Presensi
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Status
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Keterangan
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Tanggal
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Foto
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no = 1;
                            ?>
                                @foreach ($presensi as $item)
                                    <tr class="border-b bg-white boder-gray-900">
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $no++ }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $item->id_agenda }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $item->status_agenda }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $item->keterangan_agenda }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $item->tgl_agenda }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <img src="{{ asset('storage/img/' . $item->foto) }}" id="gambar" alt="Foto Agenda" style="width:100px">
                                        </td>
                                        <!-- icon Aksi -->
                                        <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                                            <div class="flex justify-center">
                                                <div class="px-4 py-4">
                                                    <a href="/siswa/editpresensi/{{$item->id_agenda}}" class="text-indigo-600 hover:text-indigo-900">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                    </a>
                                                </div>
                                                <div class="px-4 py-4">
                                                    <a href="#" class="text-gray-600 hover:text-gray-900">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                    </a>
                                                </div>
                                                <div class="px-4 py-4">
                                                    <a href="/siswa/hapus/{{$item->id_agenda}}"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600 hover:text-red-800"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            
            </div>
        </div>
    </div>
  

<!-- Put this part before </body> tag
<input type="checkbox" id="tambah-pengajuan" class="modal-toggle" />
<div class="modal">
  <div class="modal-box w-11/12 max-w-5xl bg-gradient-to-b from-blue-700 to-stone-900">
    <h3 class="flex justify-center font-bold text-lg text-white mb-5">Form Pengajuan</h3>
    <div class="">
        <div class="mb-3 xl:w-96 ">
            <div class="grid grid-cols-2 gap-x-96">
                <div class="form-group w-96">
                    <label for="nama" class="form-label inline-block font-semibold text-white">Nama Siswa</label>
                    <input
                    type="text"
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
                    id="nama"
                    placeholder="Nama Siswa"
                    />
                </div>
                <div class="form-group w-96 pl-10">
                    <label for="tngktkelas" class="form-label inline-block font-semibold text-white">Tingkatan Kelas</label>
                    <select class="select form-control block xl:w-96" id="tngktkelas">
                        <option disabled selected>Tingkatan Kelas</option>
                        <option>X</option>
                        <option>XI</option>
                        <option>XII</option>
                    </select>
                </div>
            </div>
            
            <div class="grid grid-cols-2 gap-x-96">
                <div class="form-group w-96">
                    <label for="nis" class="form-label inline-block font-semibold text-white">NIS</label>
                    <input
                    type="number"
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
                    id="nis"
                    placeholder="NIS"
                    />
                </div>
                
                <div class="form-group w-96 pl-10">
                    <label for="namakelas" class="form-label inline-block font-semibold text-white">Nama Kelas</label>
                    <select class="select form-control block xl:w-96" id="namakelas">
                        <option disabled selected>Nama Kelas</option>
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                    </select>
                </div>   
            </div>
            <div class="grid grid-cols-2 gap-x-96">
                <div class="form-group w-96">
                    <label for="bidangkeahlian" class="form-label inline-block mt-2 font-semibold text-white">Bidang Keahlian</label>
                    <select class="select form-control block xl:w-96" id="bidangkeahlian">
                        <option disabled selected>Bidang Keahlian</option>
                        <option>Rekayasa Perangkat Lunak</option>
                        <option>Akuntasi</option>
                        <option>Multimedia</option>
                        <option>Teknik Komputer dan Jaringan</option>
                        <option>Teknik Kendaraan Ringan</option>
                        <option>Teknik Pengelasan</option>
                        <option>Teknik Pemesinan</option>
                    </select>
                </div>
                <div class="form-group w-96 pl-10">
                    <label for="tmptlahir" class="form-label inline-block mt-2 font-semibold text-white">Tempat Lahir</label>
                    <input
                    type="text"
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
                    id="tmptlahir"
                    placeholder="Tempat Lahir"
                    />
                </div>
            </div>

            <div class="grid grid-cols-2 gap-x-96">
                <div class="form-group w-96">
                    <label for="tlpsiswa" class="form-label inline-block mt-2 font-semibold text-white">No.Tlp</label>
                    <input
                    type="tel"
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
                    id="tlpsiswa"
                    placeholder="No.Telp Siswa"
                    />
                </div>

                <div class="form-group w-96 pl-10">
                    <label for="tgllahir" class="form-label inline-block mt-2 font-semibold text-white">Tanggal Lahir</label>
                    <input
                    type="date"
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
                    id="tgllahir"
                    placeholder="Tanggal Lahir"
                    />
                </div>
            </div>
            
            
            <div class="grid grid-cols-2 gap-x-96">
                <div class="form-group w-96">
                    <label for="namaiduka" class="form-label inline-block font-semibold text-white">Nama Perusahaan</label>
                    <input
                    type="text"
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
                    id="namaiduka"
                    placeholder="Nama Perusahaan"
                    />
                </div>
                <div class="form-group w-96 pl-10">
                    <label for="programkeahlian" class="form-label inline-block mt-2 font-semibold text-white">Program Keahlian</label>
                    <select class="select form-control block xl:w-96" id="programkeahlian">
                            <option disabled selected>Program Keahlian</option>
                            <option>Rekayasa Perangkat Lunak</option>
                            <option>Akuntasi</option>
                            <option>Multimedia</option>
                            <option>Teknik Komputer dan Jaringan</option>
                            <option>Teknik Kendaraan Ringan</option>
                            <option>Teknik Pengelasan</option>
                            <option>Teknik Pemesinan</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-x-96">
                <div class="form-group w-96">
                    <label for="alamatiduka" class="form-label inline-block mt-2 font-semibold text-white">Alamat Perusahaan</label>
                    <input
                    type="text"
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
                    id="alamatiduka"
                    placeholder="Alamat Perusahaan"
                    />
                </div>
                <div class="form-group w-96 pl-10">
                    <label for="thnangkatan" class="form-label inline-block mt-2 font-semibold text-white">Tahun Angkatan</label>
                    <select class="select form-control block xl:w-96" id="thnangkatan">
                            <option disabled selected>Tahun Angkatan</option>
                            <option>2021/2022</option>
                            <option>2022/2023</option>
                            <option>2023/2024</option>
                            <option>2024/2025</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-x-96">
                <div class="form-group w-96">
                    <label for="pmpniduka" class="form-label inline-block mt-2 font-semibold text-white">Pimpinan Perusahaan</label>
                        <input
                        type="text"
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
                        id="pmpniduka"
                        placeholder="Pimpinan Perusahaan"
                        />
                </div>
                <div class="form-group w-96 pl-10">
                    <label for="tlpiduka" class="form-label inline-block mt-2 font-semibold text-white">No.Tlp Perusahaan</label>
                    <input
                    type="tel"
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
                    id="tlpiduka"
                    placeholder="No.Telp Perusahaan"
                    />
                </div>
            </div>
           
        </div>
    </div>
    <div class="modal-action">
      <label for="tambah-pengajuan" class="btn">Close</label>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</div> -->
@endsection