<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Users') }}
        </h2>
    </x-slot>
    <section class="MarketPlace">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                  <div class="card-group">
                    <form action="{{ route('manage.update',$user->id) }}" method="POST"> 
                        @csrf
                        @method('PUT')
                        <div class="input-group mt-5 mb-3">
                            <span class="input-group-text" id="basic-addon1">Name</span>
                            <input type="text" class="form-control" value="{{$user->name}}" name="name" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Email</span>
                            <input type="text" class="form-control" name="email" value="{{$user->email}}" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            </div>

                            <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Phone</span>
                            <input type="text" class="form-control" name="tel" value="{{$user->tel}}" id="basic-url" aria-describedby="basic-addon3">
                            </div>

                            <div class="input-group mb-3">
                            <span class="input-group-text">Status</span>
                            <input type="text" class="form-control" name="status" value="{{$user->status}}" aria-label="Status">
                            </div>

                            <div class="col-6">
                            <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
            </div>
    </section>
</x-app-layout>
