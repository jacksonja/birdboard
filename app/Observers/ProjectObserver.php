<?php

namespace App\Observers;

use App\Models\Activity;
use App\Models\Project;

class ProjectObserver
{
    public function created(Project $project)
    {
        $this->recordActivity($project, 'created');
    }

    public function updated(Project $project)
    {
        $this->recordActivity($project, 'updated');
    }

    protected function recordActivity($project, $type)
    {
        Activity::create([
            'project_id' => $project->id,
            'description' => $type,
        ]);
    }
}
