<x-layout>
  <section>
    <div class="mx-auto max-w-7xl p-4">
      <h1 class="rounded-xl bg-white px-6 py-4 text-xl font-bold text-gray-700">TIM 404 - ASN Laravel</h1>
      <br>
      <div class="shadow-xs relative overflow-x-auto rounded-xl border border-neutral-200 bg-neutral-50">
        <table class="w-full text-left text-sm rtl:text-right">
          <thead class="rounded-xl border-b border-neutral-200 bg-neutral-100 text-sm">
            <tr>
              <th class="px-6 py-3 font-semibold">Nama</th>
              <th class="px-6 py-3 font-semibold">NIM</th>
              <th class="px-6 py-3 font-semibold">Role</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($tim as $anggota)
              <tr class="border-b border-neutral-200 bg-neutral-50">
                <td class="px-6 py-4 font-semibold">
                  {{ $anggota['nama'] }}
                </td>
                <td class="px-6 py-4 font-medium">
                  {{ $anggota['nim'] }}
                </td>
                <td class="px-6 py-4 font-medium">
                  {{ ucfirst($anggota['role']) }}
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <br>
      {{-- Testing & Belajar Disini --}}
      <div class="shadow-xs rounded-xl border border-neutral-200 bg-neutral-50 p-4">
        <h2 class="font-semibold">Playground</h2>
        <br>
        <div>
          <p>First commit test: auto-deploy GitHub CI/CD ke Railway berhasil dan live.</p>
        </div>
      </div>
    </div>
  </section>
</x-layout>
