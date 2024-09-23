<x-auth-patient-layout>
    <x-slot:title>
        Dashboard
    </x-slot:title>

    <div class="container mt-4 ps-0 ps-md-5 mb-5">
        <h1 class="fw-light text-secondary">
            WELCOME <span class="fw-medium text-dark">{{ $patient->name }} !</span>
        </h1>

        <div class="container-fluid mt-3">
            <p class="fw-bold border-bottom border-secondary pb-3">PROFILE DETAILS</p>

            <div class="row justify-content-evenly gap-3">

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">EMAIL</p>
                    <p class="fw-bold ">{{ $patient->email }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">PHONE NO.</p>
                    <p class="fw-bold ">{{ $patient->phone }}</p>
                </div>


                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">ADDRESS</p>
                    <p class="fw-bold ">{{ $patient->address }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">DOB</p>
                    <p class="fw-bold ">{{ $patient->date_of_birth }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">Gender</p>
                    <p class="fw-bold ">{{ $patient->gender }}</p>
                </div>

            </div>
        </div>

        <div class="container-fluid mt-3">
            <p class="fw-bold border-bottom border-secondary pb-3">HEALTH DETAILS</p>

            <div class="row justify-content-evenly gap-3">

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">Blood type</p>
                    <p class="fw-bold ">{{ $patient->blood_type }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">Allergies</p>
                    <p class="fw-bold ">{{ $patient->allergies }}</p>
                </div>


                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">Chronic Conditions</p>
                    <p class="fw-bold ">{{ $patient->chronic_conditions }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">Current Medications</p>
                    <p class="fw-bold ">{{ $patient->current_medications }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">Previous Surgeries</p>
                    <p class="fw-bold ">{{ $patient->previous_surgeries }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">Family Medical History</p>
                    <p class="fw-bold ">{{ $patient->family_medical_history }}</p>
                </div>

            </div>
        </div>

        <div class="container-fluid mt-3">
            <p class="fw-bold border-bottom border-secondary pb-3">MORE DETAILS</p>

            <div class="row justify-content-evenly gap-3">

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">Emergency Contact name</p>
                    <p class="fw-bold ">{{ $patient->emergency_contact_name }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">Emergency Contact Phone</p>
                    <p class="fw-bold ">{{ $patient->emergency_contact_phone_number }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">Preferred Language</p>
                    <p class="fw-bold ">{{ $patient->preferred_language }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">Insurance details</p>
                    <p class="fw-bold ">{{ $patient->insurance_details }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">Marital Status</p>
                    <p class="fw-bold ">{{ $patient->marital_status }}</p>
                </div>
            </div>
        </div>
    </div>
</x-auth-patient-layout>
