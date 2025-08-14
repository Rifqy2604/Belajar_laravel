@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-xl font-bold mb-4">Tambah Catatan</h1>

    <form action="{{ route('catatan-hasil-belajar.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block font-medium">Tanggal</label>
            <input type="date" name="hari_tanggal" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block font-medium"></label>
            <input type="time" name="waktu" class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block font-medium">Materi</label>
            <input type="text" name="materi" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block font-medium">Ringkasan</label>
            <textarea name="ringkasan" class="w-full border rounded px-3 py-2"></textarea>
        </div>

        <div>
            <label class="block font-medium">Kesulitan</label>
            <input type="text" name="kesulitan" class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block font-medium">Link Referensi</label>
            <input type="url" name="link_referensi" class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block font-medium">Rencana Selanjutnya</label>
            <textarea name="rencana_selanjutnya" class="w-full border rounded px-3 py-2"></textarea>
        </div>

        <div class="flex justify-end space-x-2">
            <a href="{{ route('catatan-hasil-belajar.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded">Batal</a>
            <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Simpan</button>
        </div>
    </form>
</div>
@endsection
