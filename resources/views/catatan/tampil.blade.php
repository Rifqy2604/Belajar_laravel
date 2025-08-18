@extends('layout')

@section('konten')
    <div class="container mx-auto p-6">
        <h4 class="text-xl font-bold text-gray-900 dark:text-black mb-4 text-center">
            List Siswa
        </h4>
        <div>
            <a href="{{ route('catatan.tambah') }}">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2
        dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah
                    Catatan</button></a>

        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Hari / Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Waktu
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Materi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ringkasan
                        </th>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kesulitan
                        </th>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Link Referensi
                        </th>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Rencana Selanjutnya
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Aksi
                        </th>
                    </tr>
                </thead>

                @foreach ($catatan as $no => $data)
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            {{-- <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $no + 1 }}
                            </th> --}}
                            <td class="px-6 py-4">
                                {{ $data->hari_tanggal }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->waktu }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->materi }}
                            </td>
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->ringkasan }}
                            </td>
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->kesulitan }}
                            </td>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ $data->link_referensi }}" target="_blank" class="text-blue-600 hover:underline">
                                    {{ $data->link_referensi }}
                                </a>
                            </td>

                            <td class="px-6 py-4">
                                {{ $data->rencana_selanjutnya }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <a href="{{ route('catatan.edit', $data->id) }}">
                                        <button type="button"
                                            class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full 
                                            text-sm px-2 py-1.5 text-center dark:focus:ring-yellow-300">Edit</button>
                                    </a>

                                    <form action="{{ route('catatan.delete', $data->id) }}" method="post">
                                        @csrf
                                        <button type="submit"
                                            class="text-white bg-red-400 hover:bg-red-500 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full 
                                            text-sm px-2 py-1.5 text-center dark:focus:ring-red-300">Dele</button>
                                    </form>
                                </div>
                            </td>



                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
