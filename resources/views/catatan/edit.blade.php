@extends('layout')

@section('konten')

<div class="container mx-auto">
    <h4 class="text-xl font-bold text-gray-900 dark:text-black mb-4 text-center">
        List Siswa
    </h4>

<form  action="{{ route('siswa.update', $siswa->id)}}" method="post" class="max-w-sm mx-auto">
  @csrf
    <div class="mb-2">
      <label for="text" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">NIS</label>
      <input type="text" name="nis" value="{{ $siswa->nis }}" class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nis" required />
    </div>
    <div class="mb-2">
      <label for="text" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Nama</label>
      <input type="text" name="nama" value="{{ $siswa->nama }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700  dark:border-gray-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required />
    </div>
    <div class="mb-2">
      <label for="text" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Alamat</label>
      <input type="text" name="alamat" value="{{ $siswa->alamat }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700  dark:border-gray-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Alamat" required />
    </div>
    <div class="mb-2">
      <label for="text" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">No HP</label>
      <input type="text" name="no_hp" value="{{ $siswa->no_hp }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700  dark:border-gray-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="No HP" required />
    </div>
    <div class="mb-2">
      <label for="text" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Jenis Kelamin</label>
      <input type="text" name="jenis_kelamin" value="{{ $siswa->jenis_kelamin }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700  dark:border-gray-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jenis Kelamin" required />
    </div>
    <div class="mb-5">
      <label for="text" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Hobi</label>
      <input type="text" name="hobi" value="{{ $siswa->hobi }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700  dark:border-gray-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Hobi" required />
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button>
  </form>
</div>
  
@endsection