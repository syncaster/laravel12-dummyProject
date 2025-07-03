<x-layout>

    <x-slot:judul>{{ $title }}</x-slot:judul>

    <h3>Ini adalah halaman About</h3>
    <p>Nama developer: {{ $nama }}</p>
    <p>NIDN: {{ $nidn }}</p>
    <p>Matakuliah: {{ $matakuliah }}</p>
    <p>Framwork: {{ $framework }}</p>

    <img src="/img/laravel-logo.png" alt="Laravel" style="width: 400px; height: 200px;">
</x-layout>
