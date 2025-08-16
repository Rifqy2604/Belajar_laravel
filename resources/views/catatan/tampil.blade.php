@extends('layout')

@section('konten')
    <div class="container mx-auto p-6">
        <h4 class="text-xl font-bold text-gray-900 dark:text-black mb-4 text-center">
            List Siswa
        </h4>
        <div>
            <a href="{{ route('siswa.tambah') }}">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2
        dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah
                    Siswa</button></a>

        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            NIS
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alamat
                        </th>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No Hp
                        </th>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Kelamin
                        </th>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Hobi
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Aksi
                        </th>
                    </tr>
                </thead>

                @foreach ($siswa as $no => $data)
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $no + 1 }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $data->nis }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->alamat }}
                            </td>
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->no_hp }}
                            </td>
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->jenis_kelamin }}
                            </td>
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->hobi }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <a href="{{ route('siswa.edit', $data->id) }}">
                                        <button type="button"
                                            class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full 
                                            text-sm px-2 py-1.5 text-center dark:focus:ring-yellow-300">Edit</button>
                                    </a>
                            
                                    <form action="{{ route('siswa.delete', $data->id) }}" method="post">
                                        @csrf
                                        <button type="submit"
                                            class="text-white bg-red-400 hover:bg-red-500 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full 
                                            text-sm px-2 py-1.5 text-center dark:focus:ring-red-300">Delete</button>
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
