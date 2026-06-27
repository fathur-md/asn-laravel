# AGENTS.md

## Tech Stack

- **Backend:** PHP 8.4 + Laravel 13
- **Frontend:** Tailwind CSS 4, Alpine.js 3.15, Vite 8, Blade
- **Database:** PostgreSQL (local/dev), SQLite :memory: (testing)
- **Dev tools:** Pest 4 (testing), Laravel Pint (linting), Laravel Pail (logs), Concurrently

## Architecture

- Standard Laravel MVC — no Service/Repository/DTO layers
- All business logic lives in Controllers and Models
- Blade `x-` components for reusable UI (layout, navbar, footer, button)
- Custom config files (`config/brand.php`, `config/navigation.php`) for app-specific data
- Route Model Binding for `Campaign`
- No API routes, policies, gates, or form request classes

## Naming Conventions

| Layer            | Convention                                | Example                                    |
| ---------------- | ----------------------------------------- | ------------------------------------------ |
| Controllers      | PascalCase + `Controller` suffix          | `CampaignController`                       |
| Models           | PascalCase singular                       | `Campaign`, `Donation`                     |
| Migrations       | snake_case descriptive prefixed with date | `2026_06_24_060803_create_campaigns_table` |
| Routes           | kebab-case path + dot notation name       | `campaigns.show`, `campaigns.donate`       |
| Views            | kebab-case dir/file with `.blade.php`     | `campaigns/show.blade.php`                 |
| Blade components | kebab-case with `x-` prefix               | `x-navbar`, `x-footer`                     |
| DB tables        | snake_case plural                         | `campaigns`, `donations`                   |
| Columns          | snake_case                                | `target_amount`, `donor_count`             |
| FK columns       | snake_case `_id` suffix                   | `user_id`, `campaign_id`                   |
| PHP variables    | camelCase                                 | `$createdCampaigns`                        |
| Methods          | camelCase                                 | `getExcerptAttribute`                      |
| Route names      | snake_case with dots                      | `campaigns.index`, `dashboard.admin`       |

## Coding Style Rules

- **4-space indent** in PHP, **2-space indent** in Blade views (.editorconfig enforced)
- **No docblocks** on custom code (leave framework-generated ones as-is)
- **No inline comments** in business logic (brief comments in migrations OK)
- **Return type hints** on all methods
- **No docblock `@param`/`@return`** unless the method signature isn't self-documenting (e.g., `__toString()`)
- **PHP 8.4+** features encouraged (`str()->...`, typed properties, named arguments)
- Use `str()->...` helper instead of `Str::` facade for string operations
- Order in model: `$fillable` → `$casts` (or `casts()`) → relationships → accessors → `newFactory()`
- Use `abort_if()` / `abort_unless()` for inline authorization — no Policy/Gate classes
- Use `$request->validate([...])` inline — no Form Request classes
- Use `compact()` or named arguments for passing variables to views
- Fluent chaining for queries: `Model::with('x')->where(...)->latest()->get()`
- Blade: use `@auth`/`@endauth` and `@guest` for conditional rendering (no manual `auth()->check()`)
- Use `route('name')` for all URL generation — no hardcoded paths

## Existing Patterns

### Controllers

- Extend abstract `Controller` (which is empty)
- Inline `$request->validate([...])` at top of store/update methods
- Ownership checks: `abort_if($campaign->user_id !== Auth::id(), 403)`
- Flash messages: `->with('success', '...')` or `->withErrors([...])`
- File uploads: `$request->file('cover_image')->store('campaigns', 'public')`
- Delete old files before replacing: `Storage::disk('public')->delete($path)`
- Redirect back: `back()->with(...)` or redirect to named route

### Models

- `use HasFactory` trait (or `/** @use HasFactory<FactoryClass> */` in User model)
- `$fillable` array for mass assignment — never `$guarded`
- `$casts` array (or `protected function casts(): array`) for type casting
- Relationships: typed return with `: BelongsTo` / `: HasMany`
- Accessors: `getXxxAttribute(): type` convention
- `newFactory()` defined only when factory differs from default convention

### Routes

- Manual route registration (not `Route::resource()`)
- Explicit middleware groups: `Route::middleware('auth')->group(function () { ... })`
- Route Model Binding with `->whereNumber()` constraint
- Named routes on every endpoint

### Views / Blade

- `<x-layout>` wrapper component with `{{ $slot }}`
- `$title` and `$description` variables passed to layout
- `@vite(['resources/css/app.css', 'resources/js/app.js'])` for asset loading
- `@error` / `$errors->any()` for validation errors
- `@csrf` and `@method('DELETE'/'PUT')` on forms
- `$loop->iteration` or `@forelse` / `@empty` for iteration
- `number_format()` with Indonesian locale format (`0, ',', '.'`)
- `Storage::url()` for public file URLs in images
- `ucfirst()` for status/category display
- Buttons/links with `rounded-full` + emerald/cyan color scheme
- Gradient headings using `bg-linear-to-r from-cyan-500 to-purple-700 bg-clip-text text-transparent`
- Card pattern: `rounded-3xl border border-zinc-200 bg-white p-6 shadow-sm`

### Database / Migrations

- Anonymous class migrations: `return new class extends Migration { ... };`
- `$table->id()` for PK
- `$table->foreignId('x_id')->constrained()->cascadeOnDelete()`
- Money: `decimal(14, 2)` with `'decimal:2'` cast
- Status: `enum('draft','active','completed','cancelled')` or `string()->default('value')`
- Booleans: `boolean()->default(false)` with `'boolean'` cast
- Timestamps: `$table->timestamps()`
- Nullable: `->nullable()` for optional columns
- Always add sensible defaults

## Testing Approach

- **Framework:** Pest 4 with `pestphp/pest-plugin-laravel`
- **Tests extend:** `Tests\TestCase`
- **Database:** `use RefreshDatabase` trait + SQLite in-memory
- **Factory usage:** `User::factory()->create()`, `User::factory()->create(['role' => 'admin'])`
- **Act as user:** `$this->actingAs($user)->get(route('...'))`
- **Common assertions:** `assertOk()`, `assertRedirect()`, `assertSee()`, `assertForbidden()`
- **Pattern:** Arrange → Act → Assert (one test, one logical assertion)
- **File location:** `tests/Feature/{FeatureName}Test.php` for feature tests
- **Test method naming:** `test_descriptive_snake_case(): void`
- **Type hint variables:** `/** @var User $user */` before factory creation

## Dependencies

- `blade-ui-kit/blade-heroicons` — Heroicons as Blade components (`<x-heroicon-o-bars-2 />`)
- `laravel/vite-plugin` + `@tailwindcss/vite` — asset pipeline
- `concurrently` — dev server orchestration

## Commands

```bash
composer run dev        # Start dev servers (php artisan serve, queue, logs, vite)
composer run dev-host   # Same but accessible on network (0.0.0.0)
composer run test       # Run tests (config:clear + artisan test)
composer run setup      # Fresh project setup (install + migrate + build)
npm run build           # Vite production build
npm run dev             # Vite dev server
```
