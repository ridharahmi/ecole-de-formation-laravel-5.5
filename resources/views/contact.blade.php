@extends('layouts.app')

@section('content')
<section class="contact section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-lg-6">
                @include('message')
	            <form class="form-horizontal" method="POST" action="{{ url('contact') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Name</label>
                            <div class="col-md-10">
                                <input  type="text" class="form-control" name="name"  required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Email</label>
                            <div class="col-md-10">
                                <input  type="email" class="form-control" name="email"  required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Subject</label>
                            <div class="col-md-10">
                                <input  type="text" class="form-control" name="subject"  required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Message</label>
                            <div class="col-md-10">
                                <textarea rows="6"  class="form-control" name="message"  required="required"></textarea>  
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                 <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-envelope-o"> Contact Us</i>
                                </button>
                            </div>
                        </div>
                    </form>
			</div>
			<div class="col-xs-12 col-lg-6">
				<div class="maps" id="googleMap" ></div>
			</div>
		</div>
	</div>
	
</section>
@endsection
