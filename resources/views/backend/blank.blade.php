@extends('backend.templete.templete')
@section("content")
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pagetitle">
          <i class="icon ion-ios-home-outline"></i>
          <div>
            <h4>Dashboard</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
          </div>
        </div>

        <div class="br-pagebody">
          <div class="row row-sm">
          </div><!-- row -->

          <div class="row row-sm mg-t-20">
          </div><!-- row -->

        </div><!-- br-pagebody -->
        @include('backend.includes.footer')
        <!-- ########## END: MAIN PANEL ########## -->
      </div><!-- br-mainpanel -->
@endsection
