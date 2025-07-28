<?php

namespace App\Http\Controllers;

use App\models\Course;
use App\Models\Content;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
   
    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'category' => 'required|string',
            'modules.*.title' => 'required|string',
            'modules.*.contents.*.types' => 'required|string|in:text,video,image,link',
            'modules.*.contents.*.value' => 'required|string',
        ]);

        DB::beginTransaction();
        try {
            $courseData = $request->only(['title', 'description', 'category']);
            $course = Course::create($courseData);

            foreach ($request->input('modules', []) as $moduleData) {
                $module = $course->modules()->create([
                    'title' => $moduleData['title'],
                ]);

                foreach ($moduleData['contents'] as $contentData) {
                    $module->contents()->create([
                        'type' => $contentData['type'],
                        'value' => $contentData['value'],
                    ]);
                }
            }

            DB::commit();
            return back()->with('Course created Successfully!');
            } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error','Failed to create course: ' . $e->getMessage());
        }
        
    }

    
}

