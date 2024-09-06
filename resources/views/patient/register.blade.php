<x-patient-layout>
    <x-slot:title>
        Register Page
    </x-slot:title>

    <section class="container mt-3 pt-3 mb-5 pb-5">
        <div class="container justify-content-center">
            <h3 class="text-center text-uppercase mb-5">
                Patient Registration
            </h3>
            <div class="row justify-content-center">
                <form class="card col-12 col-md-7 col-lg-6 py-3 px-3" method="POST"
                    action="{{ route('patient.register') }}">

                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Patient name</label>
                        <input type="text" name="name" class="form-control" id="name" required
                            value={{ old('name') }}>
                        <x-input-error :messages="$errors->get('name')" />
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" required
                            value={{ old('email') }}>
                        <x-input-error :messages="$errors->get('email')" />
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" name="phone" class="form-control" id="phone" required
                            value={{ old('phone') }}>
                        <x-input-error :messages="$errors->get('phone')" />
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Contact address</label>
                        <textarea name="address" class="form-control" id="address" required>
                            value={{ old('address') }}
                        </textarea>
                        <x-input-error :messages="$errors->get('address')" />
                    </div>

                    <div class="mb-3">
                        <label for="date_of_birth" class="form-label">Date of Birth</label>
                        <input type="date" name="date_of_birth" class="form-control" id="date_of_birth"
                            value="{{ old('date_of_birth') }}">
                        <x-input-error :messages="$errors->get('date_of_birth')" />
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select name="gender" class="form-control" id="gender">
                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                            <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                        </select>
                        <x-input-error :messages="$errors->get('gender')" />
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                        <x-input-error :messages="$errors->get('password')" />
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control"
                            id="password_confirmation">
                        <x-input-error :messages="$errors->get('password_confirmation')" />
                    </div>

                    <div>

                    </div>
                    <p>

                    </p>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
</x-patient-layout>
