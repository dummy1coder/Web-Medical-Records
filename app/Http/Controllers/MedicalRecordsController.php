<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecord;
use App\Http\Requests\StoreMedicalRecordRequest;
use App\Http\Requests\UpdateMedicalRecordRequest;
use App\Models\MedicalRecords;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class MedicalRecordsController extends Controller
{
    /**
     * Instantiate a new MedicalRecordController instance.
     */
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:create-medicalrecord|edit-medicalrecord|delete-medicalrecord', ['only' => ['index','show']]);
       $this->middleware('permission:create-medicalrecord', ['only' => ['create','store']]);
       $this->middleware('permission:edit-medicalrecord', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-medicalrecord', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('medicalrecords.index', [
            'medicalrecords' => MedicalRecords::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('medicalrecords.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMedicalRecordRequest $request): RedirectResponse
    {
        MedicalRecords::create($request->all());
        return redirect()->route('medicalrecords.index')
                ->withSuccess('New medicalrecord is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(MedicalRecords $medicalrecord): View
    {
        return view('medicalrecords.show', [
            'medicalrecord' => $medicalrecord
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MedicalRecords $medicalrecord): View
    {
        return view('medicalrecords.edit', [
            'medicalrecord' => $medicalrecord
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMedicalRecordRequest $request, MedicalRecords $medicalrecord): RedirectResponse
    {
        $medicalrecord->update($request->all());
        return redirect()->back()
                ->withSuccess('Medicalrecord is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MedicalRecords $medicalrecord): RedirectResponse
    {
        $medicalrecord->delete();
        return redirect()->route('medicalrecords.index')
                ->withSuccess('Medicalrecord is deleted successfully.');
    }
}