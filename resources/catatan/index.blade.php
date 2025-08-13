@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Daftar Catatan Hasil Belajar</h1>
        <a href="{{ route('catatan-hasil-belajar.create') }}" 
           class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">
            + Tambah Catatan
        </a>
    </div>

    @if($catatan->isEmpty())
        <p class="text-gray-500">Belum ada catatan. Yuk tambah dulu!</p>
    @else
        <div class="overflow-x-auto bg-white rounded shadow">
            <table class="min-w-full border-collapse">
                <thead>
                    <tr class="bg-gray-100 border-b">
                        <th class="p-3 text-left">Tanggal</th>
                        <th class="p-3 text-left">Waktu</th>
                        <th class="p-3 text-left">Materi</th>
                        <th class="p-3 text-left">Kesulitan</th>
                        <th class="p-3 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($catatan as $item)
                        <tr class="border-b">
                            <td class="p-3">{{ $item->hari_tanggal }}</td>
                            <td class="p-3">{{ $item->waktu }}</td>
                            <td class="p-3">{{ $item->materi }}</td>
                            <td class="p-3">{{ $item->kesulitan }}</td>
                            <td class="p-3 flex gap-2">
                                <a href="{{ route('catatan-hasil-belajar.edit', $item->id) }}" 
                                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">
                                    Edit
                                </a>
                                <form action="{{ route('catatan-hasil-belajar.destroy', $item->id) }}" 
                                      method="POST" 
                                      onsubmit="return confirm('Yakin mau hapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

</div>
@endsection
