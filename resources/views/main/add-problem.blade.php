<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Fault') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="" class="row g-3">
                    <input type="hidden" name="user" value="Auth->user()->email">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Fault</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
