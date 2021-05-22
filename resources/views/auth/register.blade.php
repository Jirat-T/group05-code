@extends('layouts.main')

@section('content')
  <div class="inner-page-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-area">
                    <h1>Register</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a> /</li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="login-registration-page-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="login-registration-field">
                <h2 class="cart-area-title">Register</h2>
                <form method="POST" action="{{ route('register') }}">
                  @csrf
                    <label>Full Name <span style="color: #FF0000; margin-left: 0px;">*</span></label>
                    <input type="text" placeholder="Full Name" name="fullname"/>
                    <label>Phone <span style="color: #FF0000">*</span></label>
                    <input type="text" placeholder="Phone" name="phone"/>
                    <label>Email address <span style="color: #FF0000; margin-left: 0px;">*</span></label>
                    <input type="email" placeholder="E-mail" name="email"/>
                    <label>Password <span style="color: #FF0000; margin-left: 0px;">*</span></label>
                    <input type="password" placeholder="Password" name="password"/>
                    <label>Re Password <span style="color: #FF0000; margin-left: 0px;">*</span></label>
                    <input type="password" placeholder="Password" name="password_confirmation"/>
                    <button class="btn-send-message disabled" type="submit">Register</button>
                </form>
            </div>
            </div>

        </div>
    </div>
</div>
@endsection
