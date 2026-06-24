<x-layout>
  <section class="bg-linear-to-b from-transparent via-white to-transparent pb-16 pt-32">
    <div class="mx-auto max-w-6xl px-4">
      <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
          <p class="text-sm uppercase tracking-[0.22em] text-emerald-600">Campaign</p>
          <h1
            class="bg-linear-to-r mt-3 from-cyan-500 to-purple-700 bg-clip-text text-4xl font-semibold text-transparent">
            Semua campaign aktif</h1>
        </div>
        <a href="{{ route('campaigns.create') }}"
          class="inline-flex items-center justify-center rounded-full bg-emerald-600 px-6 py-3 text-sm font-semibold text-white hover:bg-emerald-700">Tambah
          Campaign</a>
      </div>

      <div class="mt-10 grid gap-6 lg:grid-cols-2">
        @foreach ($campaigns as $campaign)
          <article class="rounded-3xl border border-zinc-200 bg-white p-6 shadow-sm">
            <div class="flex items-start justify-between gap-4">
              <span
                class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-emerald-700">{{ $campaign->category }}</span>
              <span class="text-sm text-slate-500">{{ $campaign->user->name ?? 'DonasiKita' }}</span>
            </div>
            <h2 class="mt-4 text-2xl font-semibold text-slate-900">{{ $campaign->title }}</h2>
            <p class="mt-3 text-slate-600">{{ $campaign->excerpt }}</p>
            <div class="mt-6 space-y-3 text-sm text-slate-500">
              <div class="flex items-center justify-between">
                <span>Status</span>
                <span class="font-semibold text-slate-900">{{ ucfirst($campaign->status) }}</span>
              </div>
              <div class="flex items-center justify-between">
                <span>Target</span>
                <span class="font-semibold text-slate-900">Rp
                  {{ number_format($campaign->target_amount, 0, ',', '.') }}</span>
              </div>
              <div class="flex items-center justify-between">
                <span>Donasi terkumpul</span>
                <span class="font-semibold text-slate-900">Rp
                  {{ number_format($campaign->donations_sum_amount ?? 0, 0, ',', '.') }}</span>
              </div>
            </div>

            <div class="mt-5 h-3 overflow-hidden rounded-full bg-zinc-200">
              <div class="h-full rounded-full bg-emerald-500" style="width: {{ $campaign->progressPercent }}%"></div>
            </div>
            <div class="mt-6 flex flex-wrap gap-3">
              <a href="{{ route('campaigns.show', $campaign) }}"
                class="rounded-full border border-emerald-600 px-5 py-2 text-sm font-semibold text-emerald-700 hover:bg-emerald-50">Lihat
                Detail</a>
              @auth
                <a href="{{ route('campaigns.edit', $campaign) }}"
                  class="rounded-full border border-cyan-600 px-5 py-2 text-sm font-semibold text-cyan-700 hover:bg-cyan-50">Edit</a>
                <form action="{{ route('campaigns.destroy', $campaign) }}" method="POST"
                  onsubmit="return confirm('Hapus campaign ini?')" class="inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit"
                    class="rounded-full border border-red-600 px-5 py-2 text-sm font-semibold text-red-700 hover:bg-red-50">Hapus</button>
                </form>
              @endauth
              <span
                class="rounded-full bg-zinc-100 px-4 py-2 text-sm text-slate-600">{{ $campaign->donations_count ?? 0 }}
                donor</span>
            </div>
          </article>
        @endforeach
      </div>
    </div>
  </section>
</x-layout>
