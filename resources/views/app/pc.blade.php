<x-guest-layout>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <section class="py-0" id="header">
        <div class="bg-holder">
        </div>
        <!--/.bg-holder-->
        
        <div class="container">
          <div class="row align-items-center min-vh-75">
          <h1 class="display-5 text-center lh-sm text-uppercase  mb-0 text-light">PC TIPS</h1>
            <div class="col-md-10 col-lg-10 text-md-start text-center">
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Free up RAM by closing other open programs.
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body"> <p>Every piece of software uses Random Access Memory (RAM). The more software that's running on your computer, the more RAM it uses. This can be especially problematic if you're using older machines that don't have a lot of RAM. So if a software program refuses to load or is running slowly, the first thing to do is to close all other open applications.</p> <p>If you want to find out which open applications might be hogging your RAM, both Windows and Macintosh operating systems (OS) have tools that display this information:</p>
                    <p> <strong>In Windows</strong> hit Ctrl+Alt+Delete, then choose the Start Task Manager option. From the window that appears, click the Processes tab, then click the Memory menu item. This sorts all open processes based on the amount of RAM they're using. You can shut down a runaway process by clicking the End Process button. Before you do that, you may want to do a bit of research on the process to ensure that you don't accidentally stop a critical process or program.</p></div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    No Internet Connection
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body"><p>Restarting computer can often fix many issues you are encountering. When your computer suddenly has no Internet connection, you can click Start -> Power -> Restart to reboot your computer.</p></div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    CLOSE BACKGROUND TASKS
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body"><p>If your computer is lagging, close any programs that you aren’t using. You can also force-quit active programs if they’re frozen. You’ll need to use Task Manager on a Windows PC </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pt-4"><a class="btn btn-sm btn-outline-primary me-3" href="{{route('printer')}}">PRINTER TIPS</a></div>
            </div>
          </div>
        </div>
      </section>
</x-guest-layout>


