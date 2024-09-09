<x-auth-doctor-layout>
    <x-slot:title>
        Show Patient
    </x-slot:title>

    <div class="container mt-4 ps-0 ps-md-5 mb-5">
        <h1 class="fw-light text-secondary">
            <span class="fw-medium text-dark">{{ $patient->name }}</span>
        </h1>


        <div class="container-fluid mt-3" >
            <p class="fw-bold border-bottom border-secondary pb-3">PROFILE DETAILS</p>

            <div class="row justify-content-evenly gap-3">
                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">GENDER</p>
                    <p class="fw-bold ">{{ $patient->gender }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">DOB</p>
                    <p class="fw-bold ">{{ $patient->date_of_birth }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">MARITAL STATUS</p>
                    <p class="fw-bold ">{{ $patient->marital_status }}</p>
                </div>

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
            </div>
        </div>

        <div class="container-fluid mt-3" >
            <p class="fw-bold border-bottom border-secondary pb-3">MEDICAL INFORMATION</p>

            <div class="row justify-content-evenly gap-3">
                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">BLOOD TYPE</p>
                    <p class="fw-bold ">{{ $patient->blood_type }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">ALLERGIES</p>
                    <p class="fw-bold ">{{ $patient->allergies }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">CHRONIC_CONDITIONS</p>
                    <p class="fw-bold ">{{ $patient->chronic_conditions }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">CURRENT MEDICATIONS</p>
                    <p class="fw-bold ">{{ $patient->current_medications }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">PREVIOUS SURGIES</p>
                    <p class="fw-bold ">{{ $patient->previous_surgeries }}</p>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-3" >
            <p class="fw-bold border-bottom border-secondary pb-3">MORE INFORMATION</p>

            <div class="row justify-content-evenly gap-3">
                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">FAMILY MEDICAL HISTORY</p>
                    <p class="fw-bold ">{{ $patient->family_medical_history }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">EMERGENCY CONTACT NAME</p>
                    <p class="fw-bold ">{{ $patient->emergency_contact_name }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">EMERGENCY CONTACT NAME</p>
                    <p class="fw-bold ">{{ $patient->emergency_contact_relationship }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">EMERGENCY CONTACT PHONE NO.</p>
                    <p class="fw-bold ">{{ $patient->emergency_contact_phone_number }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">PREVIOUS SURGIES</p>
                    <p class="fw-bold ">{{ $patient->previous_surgeries }}</p>
                </div>
            </div>
        </div>
    </div>
</x-auth-doctor-layout>
