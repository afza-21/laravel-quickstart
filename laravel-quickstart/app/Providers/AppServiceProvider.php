<?php

namespace App\Providers;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('label', function ($amount) {
            return "block text-slate-600 mb-1 text-xs font-light dark:text-white capitalize tracking-wide";
        });

        Blade::directive('table', function () {
            return "min-w-full divide-y divide-slate-200 dark:divide-gray-700 rounded-xl";
        });
        Blade::directive('thead', function () {
            return " dark:bg-gray-700 rounded";
        });
        Blade::directive('tbody', function () {
            return "divide-slate-200 dark:divide-gray-700 divide-y bg-nwhite";
        });
        Blade::directive('trow', function () {
            return "dark:border-gray-700 hover:bg-white pt-1.5 pb-3 hover:bg-gray-200";
        });
        Blade::directive('dashboardth', function () {
            return " px-3 py-3 text-sm";
        });
        Blade::directive('dashboardtd', function () {
            return "  px-3 py-3 text-sm text-center";
        });
        Blade::directive('viewlabel', function ($amount) {
            return "block text-slate-500 mb-1 text-xs font-light dark:text-white capitalize tracking-wide";
        });
        Blade::directive('filterInput', function ($amount) {
            return "h-10 px-3 bg-transparent border border-icon text-sm focus:z-10 rounded-lg mb-2 mt-2
            focus:border-text focus:ring-text disabled:opacity-50 disabled:pointer-events-none
             dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600";
        });
        Blade::directive('search', function ($amount) {
            return "h-10 px-3 ps-9 w-64 bg-muted border border-icon text-sm rounded-full focus:z-10
            focus:border-text focus:ring-text disabled:opacity-50 disabled:pointer-events-none
             dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600";
        });
        Blade::directive('select', function ($amount) {
            return "h-10 px-3 ps-4 w-48 bg-transparent border border-icon text-sm focus:z-10 
            focus:border-text focus:ring-text disabled:opacity-50 disabled:pointer-events-none
             dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600";
        });
        Blade::directive('input', function ($amount) {
            return "h-10 px-3 bg-transparent border border-icon text-sm focus:z-10 rounded-md mb-2 bg-white
            focus:border-text focus:ring-text disabled:opacity-50 disabled:pointer-events-none
             dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600";
        });
        Blade::directive('textarea', function () {
            return "bg-transparent border border-icon rounded-lg ps-4 focus:z-10
            focus:border-text focus:ring-text disabled:opacity-50 disabled:pointer-events-none";
        });
        Blade::directive('modalButton', function () {
            return "rounded-lg bg-primary capitalize text-white text-md mt-4 h-10 hover:bg-primary";
        });
        Blade::directive('tableTop', function ($amount) {
            return "mt-5 h-auto   overflow-hidden rounded-lg shadow-lg ";
        });
        Blade::directive('checkbox', function ($amount) {
            return "w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ";
        });

        Blade::directive('inputTextArea', function ($amount) {
            return "w-full px-3 bg-transparent  text-black border border-icon text-sm focus:z-10 rounded-lg
            focus:border-text focus:ring-text disabled:opacity-50 disabled:pointer-events-none";
        });
    }
}
