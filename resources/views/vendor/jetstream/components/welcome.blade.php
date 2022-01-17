<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <img src="{{asset('assets/img/gallery/notap.png')}}" class="dashheader" />
    </div>

    <div class="mt-8 text-2xl" style="color:#000; font-weight:">
        Feel free to request an <strong>IT</strong> person to fix your Printer or PC!
    </div>

    <div class="mt-6 text-dark-500">
        <form method="POST" action="{{route('reqHelp')}}" class="row g-3">
            @csrf
            <div class="col-md-6">
                <label for="inputState" class="form-label" style="color:#000; font-weight:900"><strong>Select a Fault</strong></label>
                <select id="inputState" class="form-select" required>
                <!--option selected disabled class="select">Select Fault like</option--->
                <option class="select" value="Network Issues">Network Related Issues</option>
                <option class="select" value="Printer Issues">Printer Related Issues</option>
                <option class="select" value="Other">Other</option>
                </select>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
    </div>
</div>
