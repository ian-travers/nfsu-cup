<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'language'], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/tourneys', function () {
        return view('tourneys');
    })->name('tourneys');

    Route::get('/stats', function () {
        return view('stats');
    })->name('stats');

    Route::group([
        'prefix' => 'server',
        'as' => 'server'
    ], function () {
        Route::get('/monitor', function () {
            return view('server.monitor');
        })->name('.monitor');
        Route::get('/best-performers', function () {
            return view('server.best-performers');
        })->name('.best-performers');
        Route::get('/rating', function () {
            return view('server.rating');
        })->name('.rating');
    });

    Route::group([
        'prefix' => 'user',
        'as' => 'user'
    ], function () {
        Route::get('/settings', function () {
            return view('user.settings');
        })->name('.settings');
        Route::get('/logout', function () {
            return view('user.logout');
        })->name('.logout');
    });

    Route::group([
        'prefix' => 'about',
        'as' => 'about',
    ], function () {
        Route::get('/nfsu-cup', function () {
            return view('about.nfsu-cup');
        })->name('.nfsu-cup');
        Route::get('/tourneys', function () {
            return view('about.tourneys');
        })->name('.tourneys');
        Route::get('/game-server', function () {
            return view('about.game-server');
        })->name('.game-server');
    });

    Route::group([
        'prefix' => 'help',
        'as' => 'help',
    ], function () {
        Route::get('/gameplay', function () {
            return view('help.gameplay');
        })->name('.gameplay');
        Route::get('/faq', function () {
            return view('help.faq');
        })->name('.faq');
    });

    Route::group([
        'prefix' => 'downloads',
        'as' => 'downloads',
    ], function () {
        Route::get('/nfs-underground', function () {
            return view('downloads.nfs-underground');
        })->name('.nfs-underground');
        Route::get('/nfsu-client', function () {
            return view('downloads.nfsu-client');
        })->name('.nfsu-client');
        Route::get('/nfsu-save', function () {
            return view('downloads.nfsu-save');
        })->name('.nfsu-save');
        Route::get('/nfsu-save-patcher', function () {
            return view('downloads.nfsu-save-patcher');
        })->name('.nfsu-save-patcher');
    });

    Route::group([
        'prefix' => 'society',
        'as' => 'society',
    ], function () {
        Route::get('/news', function () {
            return view('society.news');
        })->name('.news');
        Route::get('/blog', function () {
            return view('society.blog');
        })->name('.blog');
        Route::get('/contact', function () {
            return view('society.contact');
        })->name('.contact');
        Route::get('/donate', function () {
            return view('society.donate');
        })->name('.donate');
    });
});
