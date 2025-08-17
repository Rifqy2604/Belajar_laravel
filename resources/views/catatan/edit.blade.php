@extends('layout')

@section('konten')
    <div class="container mx-auto">
        <h4 class="text-xl font-bold text-gray-900 dark:text-black mb-4 text-center">
            List Catatan
        </h4>

        <form action="{{ route('catatan.update', $catatan->id) }}" method="post" class="max-w-sm mx-auto">
            @csrf
            <div class="mb-2">
                <label for="date" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Hari /
                    Tanggal</label>
                <input type="date" name="hari_tanggal" value="{{ $catatan->hari_tanggal }}"
                    class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Hari / Tanggal" required />
            </div>
            <div class="mb-2">
                <label for="text" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">waktu</label>
                <input type="text" name="waktu" value="{{ $catatan->waktu }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700  dark:border-gray-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Waktu" required />
                {{-- <div class="mb-2">
                <label for="time" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Waktu</label>
                <input type="time" name="waktu" value="{{ now()->timezone('Asia/Jakarta')->format('H:i') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
            </div> --}}
                <div class="mb-2">
                    <label for="text"
                        class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Materi</label>
                    <input type="text" name="materi" value="{{ $catatan->materi }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700  dark:border-gray-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Materi" required />
                </div>
                <div class="mb-2">
                    <label for="text"
                        class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Ringkasan</label>
                    <textarea type="text" name="ringkasan" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700  dark:border-gray-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Tulis Ringkasan Jika ada">{{ $catatan->ringkasan }}</textarea>
                </div>
                <div class="mb-2">
                    <label for="text"
                        class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Kesulitan</label>
                    <textarea type="text" name="kesulitan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700  dark:border-gray-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Tulis Kesulitan Jika ada">{{ $catatan->kesulitan }}</textarea>
                </div>
                <div class="mb-2">
                    <label for="url" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Link
                        Referensi</label>
                    <input type="url" name="link_referensi" value="{{ $catatan->link_referensi }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700  dark:border-gray-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Link Referensi" required />
                </div>
                <div class="mb-5">
                    <label for="text" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Rencana
                        Selanjutnya</label>
                    <input type="text" name="rencana_selanjutnya" value="{{ $catatan->rencana_selanjutnya }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700  dark:border-gray-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Rencana Selanjutntya" required />
                </div>

                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>
@endsection
