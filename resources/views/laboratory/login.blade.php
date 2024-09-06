<x-laboratory-layout>
    <x-slot:title>
        Login Page
    </x-slot:title>

    <section class="container mt-0 mt-md-5">
        <div class="container justify-content-center">
            <h3 class="text-center text-uppercase pb-4">
                Laboratory Login
            </h3>
            <div class="row justify-content-center">
                <form class="card col-12 col-md-7 col-lg-6 py-3 px-3" action={{ route("laboratory.login") }} method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" required value={{old('email')}}>
                        <x-input-error :messages="$errors->get('email')" />
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                        <x-input-error :messages="$errors->get('password')" />
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
</x-laboratory-layout>
