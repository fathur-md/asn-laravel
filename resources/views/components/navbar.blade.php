@php
  $menus = config('navigation');
@endphp
<header class="fixed top-2 z-50 w-full px-4">
  <nav class="mx-auto max-w-5xl rounded-full bg-zinc-800/50 pl-4 backdrop-blur-xl">
    <div class="flex items-center justify-between">
      {{-- LOGO --}}
      <a href="/" class="overflow-hidden rounded-md py-2 font-semibold">
        <strong class="text-cyan-400">404 <span class="font-medium text-white">DevTeam.</span></strong>
      </a>
      {{-- NAVIGATION --}}
      <div class="flex items-center gap-1 self-stretch p-1 text-sm font-medium">
        @foreach ($menus as $menu)
          @php
            $route = $menu['route'] ?? 'home';
            $isActive = request()->routeIs($route);
          @endphp
          <a href="{{ route($menu['route'] ?? 'home') }}"
            class="{{ $isActive ? 'text-zinc-800 bg-zinc-50' : 'text-white/90 hover:text-white hover:bg-white/10' }} flex items-center self-stretch rounded-full px-4 transition-all duration-300 ease-in-out active:scale-95">
            {{ $menu['label'] }}
          </a>
        @endforeach
      </div>
    </div>
  </nav>
</header>
