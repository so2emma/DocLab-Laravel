<x-auth-doctor-layout>
    <x-slot:title>
        Create Appointment
    </x-slot:title>

    
    <section class="container mt-3 pt-3 mb-5 pb-5">
        <div class="container justify-content-center">
            <h3 class="text-center text-uppercase mb-5">
                Book Appointment
            </h3>
            <div class="row justify-content-center">
                <form class="card col-12 col-md-9 col-lg-9 py-3 px-3" method="POST" action="{{ route('doctor.appointment.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="patient" class="form-label">Enter patient ID:</label>
                        <input type="text" class="form-control" name="patient" id="patient" required value="{{ old('patient') }}" placeholder="Enter patient ID">
                        <x-input-error :messages="$errors->get('patient_id')" />
                    </div>

                    <div class="mb-3">
                        <label for="test_id" class="form-label">Select Test</label>
                        <select name="test_id" class="form-select" id="test_id" required>
                            @foreach($laboratory->tests as $test)
                                <option value="{{ $test->id }}" {{ old('test_id') == $test->id ? 'selected' : '' }}>
                                    {{ $test->name }}
                                </option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('test_id')" />
                    </div>

                    <div class="mb-3">
                        <label for="appointment_date" class="form-label">Appointment Date</label>
                        <input type="date" name="appointment_date" class="form-control" id="appointment_date" required value="{{ old('appointment_date') }}">
                        <x-input-error :messages="$errors->get('appointment_date')" />
                    </div>

                    <div class="mb-3">
                        <label for="appointment_time" class="form-label">Appointment Time</label>
                        <input type="time" name="appointment_time" class="form-control" id="appointment_time" required value="{{ old('appointment_time') }}">
                        <x-input-error :messages="$errors->get('appointment_time')" />
                    </div>

                    {{-- <div class="mb-3">
                        <label for="status" class="form-label">Appointment Status</label>
                        <select name="status" class="form-select" id="status" required>
                            <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="confirmed" {{ old('status') == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                            <option value="cancelled" {{ old('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                            <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                        </select>
                        <x-input-error :messages="$errors->get('status')" />
                    </div> --}}

                    <button type="submit" class="btn btn-primary">Book Now</button>
                </form>
            </div>
        </div>
    </section>
</x-auth-doctor-layout>
