@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Add New Medicalrecord
                </div>
                <div class="float-end">
                    <a href="{{ route('medicalrecords.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('medicalrecords.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="diagnosis" class="col-md-4 col-form-label text-md-end text-start">Diagnosis</label>
                        <div class="col-md-6">
                          <textarea class="form-control @error('diagnosis') is-invalid @enderror" id="diagnosis" name="diagnosis">{{ old('diagnosis') }}</textarea>
                            @if ($errors->has('diagnosis'))
                                <span class="text-danger">{{ $errors->first('diagnosis') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="medicine" class="col-md-4 col-form-label text-md-end text-start">Medicine</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('medicine') is-invalid @enderror" id="medicine" name="medicine">{{ old('medicine') }}</textarea>
                            @if ($errors->has('medicine'))
                                <span class="text-danger">{{ $errors->first('medicine') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tests" class="col-md-4 col-form-label text-md-end text-start">Tests</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('dtests') is-invalid @enderror" id="tests" name="tests">{{ old('tests') }}</textarea>
                            @if ($errors->has('tests'))
                                <span class="text-danger">{{ $errors->first('tests') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="allergies" class="col-md-4 col-form-label text-md-end text-start">Allergies</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('allergies') is-invalid @enderror" id="allergies" name="allergies">{{ old('allergies') }}</textarea>
                            @if ($errors->has('allergies'))
                                <span class="text-danger">{{ $errors->first('allergies') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="immunizations" class="col-md-4 col-form-label text-md-end text-start">Immunizations</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('immunizations') is-invalid @enderror" id="immunizations" name="immunizations">{{ old('immunizations') }}</textarea>
                            @if ($errors->has('immunizations'))
                                <span class="text-danger">{{ $errors->first('immunizations') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="treatmentplan" class="col-md-4 col-form-label text-md-end text-start">Treatmentplan</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('treatmentplan') is-invalid @enderror" id="treatmentplan" name="treatmentplan">{{ old('treatmentplan') }}</textarea>
                            @if ($errors->has('treatmentplan'))
                                <span class="text-danger">{{ $errors->first('treatmentplan') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add Medicalrecord">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection