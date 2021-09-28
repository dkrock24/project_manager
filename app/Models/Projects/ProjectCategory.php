<?php

namespace App\Models\Projects;

use App\Models\Categories\Category;
use App\Models\Projects\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectCategory extends Model
{
    use HasFactory;

    /**
     * The products that belong to the shop.
     */
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    /**
     * The products that belong to the shop.
     */
    public function Categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function ProjectCategories()
    {
        return $this->belongsToMany(ProjectCategory::class, 'project_category');
    }
}
