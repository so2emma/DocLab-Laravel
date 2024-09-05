<x-doctor-layout>
    <x-slot:title>
        Register Page
    </x-slot:title>

    <section class="container mt-3 pt-3 mb-5 pb-5">
        <div class="container justify-content-center">
            <h3 class="text-center text-uppercase mb-5">
                Doctor Registration
            </h3>
            <div class="row justify-content-center">
                <form class="card col-12 col-md-7 col-lg-6 py-3 px-3" method="POST" action="{{ route("doctor.register") }}">

                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" id="name" required value={{old('name')}} >
                        <x-input-error :messages="$errors->get('name')" />
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" required value={{old('email')}}>
                        <x-input-error :messages="$errors->get('email')" />
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" name="phone" class="form-control" id="phone" required value={{old('phone')}}>
                        <x-input-error :messages="$errors->get('phone')" />
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                        <x-input-error :messages="$errors->get('password')" />
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
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
</x-doctor-layout>
