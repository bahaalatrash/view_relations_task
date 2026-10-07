<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMedicalFileRequest;
use App\Http\Requests\UpdateMedicalFileRequest;
use App\Models\MedicalFile;
use App\Models\Student;
use Illuminate\Http\Request;

class MedicalFilesController extends Controller
{

    public function show(int $student_id)
    {
        $student =Student::find($student_id);
        return $student->medicalFile;
        // MedicalFile::query()->where()->get();
    }
    public function store(StoreMedicalFileRequest $request)
    {

        MedicalFile::query()->create($request->validated());
    }
    public function update(int $id, UpdateMedicalFileRequest $request)
    {

        MedicalFile::query()->where('id', $id)->update(
            $request->validated()
        );
    }
}
