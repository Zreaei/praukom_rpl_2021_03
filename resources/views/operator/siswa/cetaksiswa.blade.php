@extends('layouts.main')
@section('container')

<div class="grid place-items-center h-screen">
                <div class="py-20 px-20 w-11/12 max-w-2xl bg-[#2D5EBB]">

                        <div class="flex justify-between mt-2">
                            <div class="form-control w-full max-w-sm mr-2">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">NAMA LENGKAP :</span></label>
                                <div class="w-full max-w-sm bg-white border-8 border-white rounded-lg">{{ $cetak[0]->nama_siswa }}</div>
                            </div>
                            <div class="form-control w-full max-w-sm">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">KELAS :</span></label>
                                <div class="w-full max-w-sm bg-white border-8 border-white rounded-lg">{{ $cetak[0]->tingkatan }} {{ $cetak[0]->program_keahlian }} {{ $cetak[0]->nama_kelas }} ({{ $cetak[0]->tahun_angkatan }})</div>
                            </div>
                        </div>

                        <div class="flex justify-between mt-2">
                            <div class="form-control w-full max-w-sm mr-2">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">USERNAME :</span></label>
                                <div class="w-full max-w-sm bg-white border-8 border-white rounded-lg">{{ $cetak[0]->username }}</div>
                            </div>
                            <div class="form-control w-full max-w-sm">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">PASSWORD :</span></label>
                                <!-- <div class="w-full max-w-sm bg-white border-8 border-white rounded-lg">{{ $cetak[0]->password }}</div> -->
                                <div class="w-full max-w-sm bg-white border-8 border-white rounded-lg">#password</div>
                            </div>
                        </div>

                        <div class="flex justify-between mt-2">
                            <div class="form-control w-full max-w-sm mr-2">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">TEMPAT LAHIR :</span></label>
                                <div class="w-full max-w-sm bg-white border-8 border-white rounded-lg">{{ $cetak[0]->tempat_lahir }}</div>
                            </div>
                            <div class="form-control w-full max-w-sm">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">TANGGAL LAHIR :</span></label>
                                <div class="w-full max-w-sm bg-white border-8 border-white rounded-lg">{{ $cetak[0]->tgl_lahir }}</div>
                            </div>
                        </div>

                        <div class="flex justify-between mt-2">
                            <div class="form-control w-full max-w-sm mr-2">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">EMAIL :</span></label>
                                <div class="w-full max-w-sm bg-white border-8 border-white rounded-lg">{{ $cetak[0]->email }}</div>
                            </div>
                            <div class="form-control w-full max-w-sm">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">NOMOR TELEPON :</span></label>
                                <div class="w-full max-w-sm bg-white border-8 border-white rounded-lg">{{ $cetak[0]->telp_siswa }}</div>
                            </div>
                        </div>

                        <div class="flex justify-between mt-2">
                            <div class="form-control w-full max-w">
                            <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">FOTO :</span></label>
                                <img src="{{ asset('storage/' . $cetak[0]->foto_user) }}" class="h-full w-full">
                            </div>
                        </div>

                </div>
                </div>

                <script>
                    window.print();
                </script>

@endsection