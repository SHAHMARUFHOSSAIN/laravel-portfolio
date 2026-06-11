<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => Color::Blue,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->renderHook('panels::styles.start', fn() => $this->getVibeStyles());
    }
    
    protected function getVibeStyles(): string
    {
        return <<<'HTML'
<style>
.filament-sidebar { background: rgba(5, 15, 25, 0.98) !important; border-right: 1px solid rgba(56, 189, 248, 0.15) !important; }
.filament-main-content { position: relative; z-index: 2; background: rgba(5, 15, 25, 0.95) !important; }
input[type="text"], input[type="email"], input[type="password"], input[type="number"], input[type="url"], input[type="tel"], input[type="search"], textarea, select { background-color: rgba(10, 30, 50, 0.9) !important; background-image: none !important; border: 2px solid #38bdf8 !important; border-radius: 10px !important; color: #ffffff !important; padding: 14px 16px !important; font-size: 15px !important; -webkit-text-fill-color: #ffffff !important; caret-color: #38bdf8 !important; transition: all 0.3s ease !important; opacity: 1 !important; }
input:hover, textarea:hover, select:hover { border-color: #0ea5e9 !important; }
input:focus, textarea:focus, select:focus { border-color: #38bdf8 !important; box-shadow: 0 0 0 4px rgba(56, 189, 248, 0.3), 0 0 30px rgba(56, 189, 248, 0.15) !important; outline: none !important; opacity: 1 !important; }
input::placeholder, textarea::placeholder { color: rgba(255, 255, 255, 0.4) !important; opacity: 1 !important; }
label, .fi-field-label, .fi-section-header-label, .fi-label { color: #38bdf8 !important; font-weight: 600 !important; font-size: 14px !important; opacity: 1 !important; }
.fi-btn { background: linear-gradient(135deg, #38bdf8 0%, #0ea5e9 100%) !important; color: #000000 !important; font-weight: 600 !important; border-radius: 10px !important; }
.fi-btn:hover { box-shadow: 0 0 20px rgba(56, 189, 248, 0.4) !important; }
.fi-tabs-tab { color: rgba(255, 255, 255, 0.7) !important; }
.fi-tabs-tab:hover { color: #38bdf8 !important; }
.fi-tabs-tab.active { color: #38bdf8 !important; background: rgba(56, 189, 248, 0.1) !important; }
.fi-badge { background: rgba(56, 189, 248, 0.2) !important; color: #38bdf8 !important; border-radius: 20px !important; }
.fi-nav-item { color: rgba(255, 255, 255, 0.8) !important; }
.fi-nav-item:hover { color: #38bdf8 !important; background: rgba(56, 189, 248, 0.1) !important; }
.fi-nav-item.active { color: #38bdf8 !important; background: rgba(56, 189, 248, 0.15) !important; }
.fi-table th { color: #38bdf8 !important; background: rgba(5, 20, 35, 0.95) !important; }
.fi-table td { color: rgba(255, 255, 255, 0.9) !important; border-color: rgba(56, 189, 248, 0.2) !important; }
.fi-table tr:hover td { background: rgba(56, 189, 248, 0.05) !important; }
.fi-card { background: rgba(10, 30, 50, 0.8) !important; border: 1px solid rgba(56, 189, 248, 0.2) !important; border-radius: 16px !important; }
.fi-section { background: rgba(10, 30, 50, 0.6) !important; border-radius: 16px !important; padding: 20px !important; }
span, div, p, small { opacity: 1 !important; }
::-webkit-scrollbar { width: 8px; }
::-webkit-scrollbar-track { background: rgba(56, 189, 248, 0.05); }
::-webkit-scrollbar-thumb { background: rgba(56, 189, 248, 0.3); border-radius: 4px; }
::-webkit-scrollbar-thumb:hover { background: rgba(56, 189, 248, 0.5); }
</style>
HTML;
    }
}