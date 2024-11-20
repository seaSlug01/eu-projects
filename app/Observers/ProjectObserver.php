<?php

namespace App\Observers;

use App\Models\Post;
use App\Models\User;
use Barryvdh\Debugbar\Facades\Debugbar;
use Filament\Notifications\Notification;
use App\Notifications\ProjectNotification;
use Filament\Notifications\Actions\Action;

class ProjectObserver
{

    /**
     * Handle the Post "created" event.
     */

    static function getAdmins() {
        $authorId = auth()->user()->id;
        
        return User::where('isAdmin', true)
        ->where('id', '!=', $authorId)
        ->get();
    }

    public function created(Post $project): void
    {
        // A notification will be sent to admins that a new project has been created
        // Get them Users with isAdmin = true and notify them
        // if the coordinator is one of them admins, ** no need to send, exclude him **
        
        $admins = $this::getAdmins();

        foreach ($admins as $admin) {
            Notification::make()
                ->title("Νέο Πρόγραμμα: $project->title")
                ->body("Συντονιστής:  $project->coordinator")
                ->icon('heroicon-o-pencil-square')
                ->success()
                ->actions([
                    Action::make('view')
                        ->button()
                        ->url("/admin/posts/$project->id/edit", shouldOpenInNewTab: true),
                ])
                ->sendToDatabase($admin, isEventDispatched: true);
        }
        
        
    }

    /**
     * Handle the Post "updated" event.
     */
    public function updated(Post $project): void
    {
        $admins = $this::getAdmins();

        foreach ($admins as $admin) {
            Notification::make()
                ->title("To έργο < $project->name > ενημερώθηκε.")
                ->info()
                ->sendToDatabase($admin);
        }

    }

    /**
     * Handle the Post "deleted" event.
     */
    public function deleted(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     */
    public function restored(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     */
    public function forceDeleted(Post $post): void
    {
        //
    }
}
