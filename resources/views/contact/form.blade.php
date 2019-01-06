@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-xs-12">
      <!-- Form -->
      <form id="contactForm" class="contact-form" data-toggle="validator">
        <h2 class="contact-title">
          @lang('Send Message Us')
        </h2>
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                  <div class="help-block with-errors"></div>
                </div>                    
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">                      
                  <input type="email" class="form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group"> 
                  <input type="text" class="form-control" id="msg_subject" name="subject" placeholder="Subject" required data-error="Please enter your subject">
                  <div class="help-block with-errors"></div>
                </div>
              </div> 
            </div>
          </div>    
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group"> 
                  <textarea class="form-control" placeholder="Massage" rows="7" data-error="Write your message" required></textarea>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" id="submit" class="btn btn-common">Submit Now</button>
            <div id="msgSubmit" class="h3 text-center hidden"></div> 
            <div class="clearfix"></div>   
          </div>
        </div> 
      </form>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-12">
      <div class="information mb-4">
        <h3>Address</h3>
        <div class="contact-datails">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc metus lectus, viverra vehicula porta id, posuere at massa. Nam sollicitudin porta nunc.</p>
        </div>
      </div>
      <div class="information">
        <h3>Contact Info</h3>
        <div class="contact-datails">
          <ul class="list-unstyled info">
            <li><span>Address : </span><p> 9870 St Vincent Place, Glasgow, DC 45 Fr 45</p></li>
            <li><span>Email : </span><p><a href="#">support@mail.com</a></p></li>
            <li><span>Phone : </span><p>555 444 66647 & 555 444 66647</p></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection