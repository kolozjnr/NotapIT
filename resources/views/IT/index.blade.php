<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Users') }}
        </h2>
    </x-slot>

    <section class="ManageUsers">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                  <div class="card-group">
                    <table class="table table-bordered">
                      <tr>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Status</th>
                          <th width="280px">Action</th>
                      </tr>
                      @if($users->isEmpty())
                        <h4 class="text-muted text-center">{{ __('No Users') }}</h4>
                      @endif
                      @foreach ($users as $user)
                      <tr>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->tel }}</td>
                          <td>{{ $user->status }}</td>
                          <td>
                              <form action="{{ route('manage.destroy',$user->id) }}" method="POST" class="">
                  
                                  
                    
                                  <a class="btn btn-primary" href="{{ route('manage.edit',$user->id) }}">Update</a>
                  
                                  @csrf
                                  @method('DELETE')
                      
                                  <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                          </td>
                      </tr>
                      @endforeach
                    </table>
                  </div>
                </div>
            </div>
    </section>
</x-app-layout>
