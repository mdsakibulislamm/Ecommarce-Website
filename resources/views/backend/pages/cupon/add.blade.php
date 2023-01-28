@extends('backend.templete.templete')
@section("content")
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
                <div class="br-pagetitle">
                <i class="icon ion-ios-home-outline"></i>
                <div>
                    <h4>Cupon</h4>
                    <p class="mg-b-0">A complete cupon data file, where you can easily get your desire data</p>
                </div>
                </div>
            <div class="row my-5">
                <div class="col-md-3 ml-5 ">
                    <div class="msg">

                    </div>
                    <div class="form-group">
                        <label for="">Cupon Code</label>
                        <input type="text" class="form-control cupon_code" placeholder="Type cupon code here" id="cupon_code">
                        <span  class="text-danger">
                            @error('.cupon_code')
                            {{ $message }}

                            @enderror
                        </span>
                    </div>
                    <div class="form-group " >
                        <label for="">Cupon discount</label>
                        <input type="number" class="form-control discount" placeholder="Enter cupon discount here" id="discount">
                        <span  class="text-danger">
                            @error('.discount')
                            {{ $message }}

                            @enderror
                        </span>
                    </div>
                    <div class="form-group " >
                        <label for="">Cupon discount amount</label>
                        <input type="number" class="form-control discount_amount " placeholder="Enter cupon discount amount here" id="discount_amount">
                        <span  class="text-danger">
                            @error('.discount_amount')
                            {{ $message }}

                            @enderror
                        </span>
                    </div>
                    <div class="form-group " >
                        <label for="">Start Date</label>
                        <input type="date" class="form-control start_at" placeholder="Start Date" id="start_at">
                        <span  class="text-danger">
                            @error('.start_at')
                            {{ $message }}

                            @enderror
                        </span>
                    </div>
                    <div class="form-group " >
                        <label for="">End Date</label>
                        <input type="date" class="form-control end_at" placeholder="Start Date" id="end_at">
                        <span  class="text-danger">
                            @error('.end_at')
                            {{ $message }}

                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="">Cupon Status</label>
                        <select id="status" class="status form-control">
                            <option value="0">-----Select Status-----</option>
                            <option value="1" @if(old('status'==1))selected @endif>Active</option>
                            <option value="2" @if(old('status'==2))selected @endif>Inactive</option>
                        </select>
                        <span class="text-danger">
                            @error('.status')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group " >
                        <label for="">Product Id</label>
                        <input type="number" class="form-control cupon_code product_id" placeholder="Product ID" id="product_id">
                        <span  class="text-danger">
                            @error('.product_id')
                            {{ $message }}

                            @enderror
                        </span>
                    </div>
                    <button name="save" class="mt-3 btn btn-success form-control addcupon">Add Cupon</button>
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Cupon Code</th>
                                <th>Discount</th>
                                <th>Discount Amount</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <th>Product Id</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="alldata">

                        </tbody>
                    </table>
                </div>
            </div>
            {{-- Modal delete start--}}
<!-- Modal -->
<div class="modal fade delete" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are sure want to delete?
        </div>
        <div class="modal-footer">
          <button type="button" class="btnDelete btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </div>
  {{-- Modal delete end--}}
  {{-- Modal update start --}}
  <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Cupon</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="">Cupon Code</label>
                    <input type="text" class="form-control cupon_code" placeholder="Type cupon code here" id="ucupon_code">

                </div>
                <div class="form-group " >
                    <label for="">Cupon discount</label>
                    <input type="number" class="form-control discount" placeholder="Enter cupon discount here" id="udiscount">

                </div>
                <div class="form-group " >
                    <label for="">Cupon discount amount</label>
                    <input type="number" class="form-control discount_amount " placeholder="Enter cupon discount amount here" id="udiscount_amount">
                </div>
                <div class="form-group " >
                    <label for="">Start Date</label>
                    <input type="date" class="form-control start_at" placeholder="Start Date" id="ustart_at">

                </div>
                <div class="form-group " >
                    <label for="">End Date</label>
                    <input type="date" class="form-control end_at" placeholder="Start Date" id="uend_at">
                </div>
                <div class="form-group">
                    <label for="">Cupon Status</label>
                    <select id="ustatus" class="status form-control">
                        <option value="0">-----Select Status-----</option>
                        <option value="1" @if(old('ustatus'==1))selected @endif>Active</option>
                        <option value="2" @if(old('ustatus'==2))selected @endif>Inactive</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="update btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>


  {{-- Modal update end --}}

        @include('backend.includes.footer')
        <!-- ########## END: MAIN PANEL ########## -->
    </div><!-- br-mainpanel -->

      <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>



@endsection
