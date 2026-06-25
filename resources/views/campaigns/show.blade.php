<x-layout>
  <section class="bg-white py-16 pt-32">
    <div class="mx-auto max-w-6xl px-4">
      <div class="grid gap-10 lg:grid-cols-[1.5fr_1fr]">
        <div class="space-y-6">
          <img class="rounded-4xl h-80 w-full object-cover" src="{{ Storage::url($campaign->cover_image) }}"
            alt="{{ $campaign->title }}">
          <div class="flex flex-wrap items-center gap-3">
            <span
              class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-emerald-700">{{ $campaign->category }}</span>
            <span class="text-sm text-slate-500">Deadline:
              {{ $campaign->deadline_at?->format('d M Y') ?? 'Tidak ada' }}</span>
            @auth
              @if ($campaign->user_id === auth()->id())
                <a href="{{ route('campaigns.edit', $campaign) }}"
                  class="rounded-full border border-cyan-600 px-4 py-1 text-xs font-semibold text-cyan-700 hover:bg-cyan-50">
                  Edit
                </a>

                <form action="{{ route('campaigns.destroy', $campaign) }}" method="POST"
                  onsubmit="return confirm('Yakin ingin menghapus campaign ini?')">

                  @csrf
                  @method('DELETE')

                  <button type="submit"
                    class="rounded-full border border-red-600 px-4 py-1 text-xs font-semibold text-red-700 hover:bg-red-50">
                    Hapus
                  </button>
                </form>
              @endif
            @endauth
          </div>
          <h1 class="text-4xl font-semibold text-slate-900">{{ $campaign->title }}</h1>
          <p class="leading-8 text-slate-600">{{ $campaign->description }}</p>

          <div class="rounded-3xl border border-zinc-200 bg-zinc-50 p-6">
            <div class="flex items-center justify-between text-sm text-slate-600">
              <span>Dana terkumpul</span>
              <span class="font-semibold text-slate-900">Rp
                {{ number_format($campaign->current_amount, 0, ',', '.') }}</span>
            </div>
            <div class="mt-4 h-4 overflow-hidden rounded-full bg-zinc-200">
              <div class="h-full rounded-full bg-emerald-500" style="width: {{ $campaign->progressPercent }}%"></div>
            </div>
            <div class="mt-4 flex items-center justify-between text-sm text-slate-600">
              <span>Target</span>
              <span class="font-semibold text-slate-900">Rp
                {{ number_format($campaign->target_amount, 0, ',', '.') }}</span>
            </div>
            <div class="mt-3 text-sm text-slate-500">Progress {{ $campaign->progressPercent }}%</div>
          </div>

          <div class="grid gap-4 md:grid-cols-2">
            <div class="rounded-3xl border border-zinc-200 bg-white p-6">
              <p class="text-sm uppercase tracking-[0.2em] text-slate-500">Komentar</p>
              <div class="mt-4 space-y-4">
                @foreach ($campaign->comments as $comment)
                  <div class="rounded-2xl bg-zinc-50 p-4">
                    <p class="font-semibold text-slate-900">{{ $comment->user?->name ?? 'Pengguna' }}</p>
                    <p class="mt-2 text-sm text-slate-600">{{ $comment->content }}</p>
                    <p class="mt-2 text-xs text-slate-500">{{ $comment->created_at->format('d M Y') }}</p>
                  </div>
                @endforeach
              </div>
            </div>
            <div class="rounded-3xl border border-zinc-200 bg-white p-6">
              <p class="text-sm uppercase tracking-[0.2em] text-slate-500">Riwayat donasi</p>
              <div class="mt-4 space-y-4">
                @forelse ($campaign->donations as $donation)
                  <div class="rounded-2xl bg-zinc-50 p-4">
                    <div class="flex items-center justify-between text-sm text-slate-900">
                      <span>{{ $donation->is_anonymous ? 'Anonim' : $donation->user->name ?? 'Pengguna' }}</span>
                      <span class="font-semibold">Rp {{ number_format($donation->amount, 0, ',', '.') }}</span>
                    </div>
                    <p class="mt-2 text-sm text-slate-600">{{ $donation->donor_message }}</p>
                    <p class="mt-2 text-xs text-slate-500">{{ $donation->created_at->format('d M Y') }}</p>
                  </div>
                @empty
                  <p class="text-sm text-slate-500">
                    Belum ada donasi.
                  </p>
                @endforelse
              </div>
            </div>
          </div>
        </div>

        <aside class="space-y-6">
          <div class="rounded-4xl border border-zinc-200 bg-white p-8 shadow-sm">
            <h2 class="text-xl font-semibold text-slate-900">Form Donasi</h2>
            <p class="mt-3 text-sm text-slate-600">Isi nominal donasi dan dukungan Anda. Opsi anonim tersedia.</p>
            @if ($errors->any())
              <div class="mb-4 rounded-2xl bg-red-100 p-4 text-red-700">
                <ul class="list-inside list-disc">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form action="{{ route('campaigns.donate', $campaign) }}" method="POST" class="mt-6 space-y-4">
              @csrf
              <label class="block text-sm font-medium text-slate-700">Nominal Donasi</label>
              <input type="number" name="amount" min="1000" required placeholder="Rp 100.000"
                class="w-full rounded-2xl border border-zinc-200 bg-zinc-50 p-3 text-slate-900" />
              <label class="block text-sm font-medium text-slate-700">Pesan untuk campaign</label>
              <textarea name="donor_message" rows="4"
                class="w-full rounded-2xl border border-zinc-200 bg-zinc-50 p-3 text-slate-900"
                placeholder="Dukungan dan doa untuk campaign."></textarea>
              <label class="flex items-center gap-3 text-sm text-slate-700">
                <input type="checkbox" name="is_anonymous" value="1"
                  class="h-4 w-4 rounded border-zinc-300 text-emerald-600 focus:ring-emerald-500" />
                Donasi anonim
              </label>
              <button type="submit"
                class="w-full rounded-full bg-emerald-600 px-6 py-3 text-sm font-semibold text-white hover:bg-emerald-700">Donasi
                Sekarang</button>
            </form>
          </div>
          <div class="rounded-4xl border border-zinc-200 bg-white p-6 shadow-sm">
            <p class="text-sm font-semibold text-slate-900">Informasi Campaign</p>
            <div class="mt-4 space-y-3 text-sm text-slate-600">
              <div class="flex justify-between"><span>Organiser</span><span
                  class="font-semibold text-slate-900">{{ $campaign->user->name ?? 'DonasiKita' }}</span></div>
              <div class="flex justify-between"><span>Target</span><span class="font-semibold text-slate-900">Rp
                  {{ number_format($campaign->target_amount, 0, ',', '.') }}</span></div>
              <div class="flex justify-between"><span>Status</span><span
                  class="font-semibold text-slate-900">{{ ucfirst($campaign->status) }}</span></div>
            </div>
          </div>
          @auth
            <div class="rounded-4xl border border-zinc-200 bg-white p-6 shadow-sm">
              <p class="text-sm font-semibold text-slate-900">Tambah Komentar</p>
              <form action="{{ route('campaigns.comment', $campaign) }}" method="POST" class="mt-4 space-y-4">
                @csrf
                <textarea name="content" rows="4" class="w-full rounded-2xl border border-zinc-200 bg-zinc-50 p-3 text-slate-900"
                  placeholder="Dukung campaign ini dengan kata-kata." required></textarea>
                <button type="submit"
                  class="w-full rounded-full bg-cyan-600 px-6 py-3 text-sm font-semibold text-white hover:bg-cyan-700">Kirim
                  Komentar</button>
              </form>
            </div>
          @else
            <div class="rounded-4xl border border-zinc-200 bg-white p-6 text-center shadow-sm">
              <p class="text-sm text-slate-600">Login untuk menulis komentar dan melihat riwayat donasi Anda.</p>
              <a href="{{ route('login') }}"
                class="mt-4 inline-flex rounded-full bg-emerald-600 px-6 py-3 text-sm font-semibold text-white hover:bg-emerald-700">Login
                sekarang</a>
            </div>
          @endauth
        </aside>
      </div>
    </div>
  </section>
</x-layout>
