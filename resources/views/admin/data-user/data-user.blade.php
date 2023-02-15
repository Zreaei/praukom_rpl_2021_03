@extends('layouts.main')
@section('container')

<div class="fixed w-20 mt-5 overflow-y-auto bg-gray-50 rounded-r-lg bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
    <a href="{{ route('home') }}" class="flex p-2 text-xl font-bold text-[#ffffff] rounded-r-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z" clip-rule="evenodd" /></svg>
    </a>
</div>

<div class="w-2/3 rounded mt-10 border-slate-500 mx-auto">
    <div class="overflow-x-auto">
        <table class="table w-full">
        <!-- head -->
        <thead>
            <tr>
                <th class="text-center bg-blue-700 text-white">id_user</th>
                <th class="text-center bg-blue-700 text-white">Username</th>
                <th class="text-center bg-blue-700 text-white">Email</th>
                <th class="text-center bg-blue-700 text-white">Level</th>
                <th class="text-center bg-blue-700 text-white">Opsi</th>
            </tr>
        </thead>
        @foreach ($dataUser as $item)
        <tbody>
            <!-- row 1 -->
            <tr>
                <td class="text-center bg-white"><h1>{{ $item->id_user }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->username }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->email }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->nama_level }}</h1></td>
                <td class="text-center bg-white">
                    <a href="data-user/edit/{{ $item->id_user }}"><button class="btn btn-warning">Edit</button></a>
                    <a href="data-user/hapus/{{ $item->id_user }}"><button class="btn btn-error">Hapus</button></a>
                </td>
            </tr>
        </tbody>
        @endforeach
        </table>
    </div>
    <div class="m-3 text-center">
        {{-- Modal Button --}}
        <label for="my-modal-4" class="btn">open modal</label>

        {{-- Modal --}}
        <input type="checkbox" id="my-modal-4" class="modal-toggle" />
        <label for="my-modal-4" class="modal cursor-pointer">
            <label class="modal-box relative" for="">
                <h3 class="text-lg font-bold">Tambah User</h3>
                <p class="py-4">
                    <form method="POST" action="simpan">
                        @csrf
                        <div class="">
                            <div class="form-control mx-auto">
                                <div class="mx-auto">
                                    <label class="input-group m-5">
                                        <span class="pr-3.5 bg-white">Username</span>
                                        <input type="text" name="username" placeholder="username" class="input input-bordered" required />
                                    </label>
                                    <label class="input-group m-5">
                                        <span class="pr-5 bg-white">Password</span>
                                        <input type="password" name="password" placeholder="password" class="input input-bordered" required />
                                    </label>
                                    <label class="input-group m-5">
                                        <span class="pr-12 bg-white">Email</span>
                                        <input type="email" name="email" placeholder="email" class="input input-bordered" required />
                                    </label>
                                    <div class="form-control m-5">
                                        <label class="input-group pl-3">
                                            <span class="pr-12 bg-white">Level</span>
                                            <select class="select select-bordered" name="level">
                                                <option value="default">Choose Level</option>
                                                @foreach ($level as $item)
                                                    <option value="{{ $item->id_level }}">{{ $item->nama_level }}</option>
                                                @endforeach
                                            </select>
                                        </label>
                                    </div>
                                    <div class="pt-3 pb-3 grid justify-items-center">
                                        <button type="submit" value="simpan" class="btn btn-success">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </p>
            </label>
        </label>
    </div>
</div>


@endsection