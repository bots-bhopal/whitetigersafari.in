<?php

namespace App\Providers;

use App\Repository\Event\EventInterface;
use App\Repository\Event\EventRepository;
use App\Repository\Gallery\GalleryInterface;
use App\Repository\Gallery\GalleryRepository;
use App\Repository\News\NewsInterface;
use App\Repository\News\NewsRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(NewsInterface::class, NewsRepository::class);
        $this->app->bind(EventInterface::class, EventRepository::class);
        $this->app->bind(TenderInterface::class, TenderRepository::class);
        $this->app->bind(DocumentInterface::class, DocumentRepository::class);
        $this->app->bind(GalleryInterface::class, GalleryRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
