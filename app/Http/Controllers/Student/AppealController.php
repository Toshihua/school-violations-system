<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppealRequest;
use App\Models\Appeal;
use App\Models\ViolationRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AppealController extends Controller
{
    public function store(AppealRequest $request)
    {
        $violation = ViolationRecord::findOrFail($request->violation_record_id);

        if (!$violation->canBeAppealed()) {
            return back()->withErrors([
                'appeal' => 'This violation can no longer be Appealed',
            ]);
        }

        $appeal = Appeal::create([
            'appeal_content' => $request->appeal_content,
            'violation_record_id' => $request->violation_record_id
        ]);

        Log::info('Appeal submitted by student', [
            'student_id' => Auth::id(),
            'violation_record_id' => $violation->id,
            'appeal_id' => $appeal->id,
        ]);

        session()->flash('response', 'Appeal submitted successfully.');
        return redirect()->back();
    }
}
