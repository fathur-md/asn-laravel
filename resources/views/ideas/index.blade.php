<x-layout>
  <section class="mx-auto max-w-7xl p-5">
    <div class="shadow-xs max-w-md rounded-xl border border-neutral-200 bg-neutral-50 p-4">
      <h1 class="text-xl font-semibold">Daftar Ide Proyek</h1>
      <br>
      <form action="{{ route('ideas.store') }}" method="POST" class="flex flex-col gap-4">
        @csrf
        <input class="rounded-md border border-neutral-200 p-2" type="text" name="title"
          placeholder="Masukkkan ide project">
        <textarea class="rounded-md border border-neutral-200 p-2" name="description" placeholder="Deskripsi project"></textarea>

        <button type="submit"
          class="rounded-md border border-neutral-200 bg-neutral-50 p-2 text-sm font-medium">Simpan</button>
      </form>
    </div>
    <br>
    <div class="flex flex-wrap gap-4">
      @foreach ($ideas as $idea)
        <div class="shadow-xs flex min-w-60 flex-col gap-2 rounded-xl border border-neutral-200 bg-white p-4">
          <h2 class="font-medium">{{ $idea->title }}</h2>
          <p class="text-sm">{{ $idea->description }}</p>
          <br>
          <form action="{{ route('ideas.destroy', $idea->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <button class="w-full rounded-xl bg-red-100 p-2 text-sm text-red-500" type="submit">Hapus</button>
          </form>
        </div>
      @endforeach
    </div>
  </section>
</x-layout>
