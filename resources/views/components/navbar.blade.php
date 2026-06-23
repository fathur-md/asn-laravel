@php
  $menus = config('navigation');
@endphp
<header class="fixed top-2 z-50 w-full px-4" x-data="{ open: false }">
  <nav class="shadow-xs mx-auto max-w-5xl rounded-full border border-zinc-200/60 bg-white/40 pl-4 backdrop-blur-xl">
    <div class="flex items-center justify-between">
      {{-- LOGO --}}
      <a href="/" class="overflow-hidden py-2 font-semibold">
        <strong class="text-cyan-400">404 <span class="font-medium text-zinc-700">DevTeam.</span></strong>
      </a>
      {{-- Desktop menu --}}
      <div class="hidden items-center gap-1 self-stretch p-1 text-sm font-medium md:flex">
        @foreach ($menus as $menu)
          @php
            $route = $menu['route'] ?? 'home';
            $isActive = request()->routeIs($route);
          @endphp
          <a href="{{ route($route) }}"
            class="{{ $isActive ? 'shadow-sm bg-white/80 text-zinc-900 border border-zinc-200/60' : 'opacity-80 hover:opacity-100 hover:bg-zinc-500/10' }} flex items-center self-stretch rounded-full px-4 transition-all duration-200 ease-in-out active:scale-95">
            {{ $menu['label'] }}
          </a>
        @endforeach
      </div>

      <button class="pr-4 text-xl md:hidden" @click="open = !open">
        <x-heroicon-o-bars-2 class="size-6" />
      </button>
    </div>
  </nav>
  {{-- Mobile menu --}}
  <div class="fixed inset-0 -z-10" @click="open = false" x-transition x-show="open"></div>
  <div x-show="open" x-transition
    class="fixed inset-x-4 top-14 z-20 flex flex-col rounded-2xl border border-zinc-200/60 bg-white/50 p-2 font-medium backdrop-blur-xl md:hidden">
    @foreach ($menus as $menu)
      @php
        $isActive = request()->routeIs($menu['route'] ?? 'home');
      @endphp
      <a href="{{ route($menu['route'] ?? 'home') }}"
        class="{{ $isActive ? 'text-zinc-800 font-semibold' : 'text-zinc-500' }} p-4 text-lg">
        {{ $menu['label'] }}
      </a>
    @endforeach
  </div>
</header>
