@extends('layouts.base')

@section('breadcrumbs')
  <section class="bg-primary">
    <div class="container">
      <h3 class="text-white font-weight-300 m-b-0">Modification du compte</h3>
    </div>
  </section>

<section class="breadcrumbs">
<div class="container">
  <ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li><a href="/">User</a></li>
    <li class="active">edit</li>
  </ol>
</div>
</section>
@endsection

@section('content') 
<section>
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="p-r-30">
<h5>Default Forms</h5>
<p class="m-b-40">Individual form controls automatically receive some global styling. All textual input, textarea, and select elements with <code>.form-control</code>.</p>
<form>
<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
<small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
</div>
<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>
<div class="form-group">
<label for="exampleSelect1">Example select</label>
<select class="form-control" id="exampleSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
</div>
<div class="form-group">
<label for="exampleSelect2">Example multiple select</label>
<select multiple class="form-control" id="exampleSelect2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
</div>
<div class="form-group">
<label for="exampleTextarea">Example textarea</label>
<textarea class="form-control" id="exampleTextarea" rows="6"></textarea>
</div>
<div class="form-group">
<label for="exampleInputFile">File input</label>
<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
<small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
</div>
<div class="form-group form-check">
<label class="form-check-label">
                <input type="checkbox" class="form-check-input">
                Check me out
              </label>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
<div class="col-lg-6">
<h5>Horizontal Forms</h5>
<p class="m-b-45">Use Gameforest's predefined grid classes to align labels and groups of form controls in a horizontal layout by adding <code>.form-horizontal</code> to the form</p>
<form>
<div class="form-group row">
<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
<div class="col-sm-10">
<input type="email" class="form-control" id="inputEmail3" aria-describedby="emailHelp" placeholder="Enter email">
<small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
</div>
</div>
<div class="form-group row">
<label for="exampleInputPassword2" class="col-sm-2 col-form-label">Password</label>
<div class="col-sm-10">
<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
</div>
</div>
<div class="form-group row">
<label for="exampleSelect3" class="col-sm-2 col-form-label">Select</label>
<div class="col-sm-10">
<select class="form-control" id="exampleSelect3">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
</div>
</div>
<div class="form-group row">
<label for="exampleSelect4" class="col-sm-2 col-form-label">Multi Select</label>
<div class="col-sm-10">
<select multiple class="form-control" id="exampleSelect4">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
</div>
</div>
<div class="form-group row">
<label for="exampleTextarea2" class="col-sm-2 col-form-label">Textarea</label>
<div class="col-sm-10">
<textarea class="form-control" id="exampleTextarea2" rows="6"></textarea>
</div>
</div>
<div class="form-group row">
<label for="exampleInputFile2" class="col-sm-2 control-label">File input</label>
<div class="col-sm-10">
<input type="file" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp">
<small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input.</small>
</div>
</div>
<div class="form-group row">
<label for="exampleInputFile2" class="col-sm-2 control-label">Radios</label>
<div class="col-sm-10">
<div class="form-check form-check-inline">
<label class="form-check-label">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                </label>
</div>
<div class="form-check form-check-inline">
<label class="form-check-label">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                </label>
</div>
<div class="form-check form-check-inline disabled">
<label class="form-check-label">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled> 3
                </label>
</div>
</div>
</div>
<div class="form-group row">
<label for="exampleInputFile2" class="col-sm-2 control-label">Checkbox</label>
<div class="col-sm-10">
<div class="form-check">
<label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  Check me out
                </label>
</div>
</div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

<div class="row m-t-80">
<div class="col-lg-6">
<div class="p-r-30">
<h5>Textual Inputs</h5>
<p class="m-b-40">Most common form control, text-based input fields. Includes support for all HTML5 types.</p>
<form>
<div class="form-group row">
<label for="example-text-input" class="col-sm-2 col-form-label">Text</label>
<div class="col-sm-10">
<input class="form-control" type="text" value="yakuzi" id="example-text-input">
</div>
</div>
<div class="form-group row">
<label for="example-search-input" class="col-sm-2 col-form-label">Search</label>
<div class="col-sm-10">
<input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
</div>
</div>
<div class="form-group row">
<label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
<div class="col-sm-10">
<input class="form-control" type="email" value="yakuthemes@example.com" id="example-email-input">
</div>
</div>
<div class="form-group row">
<label for="example-url-input" class="col-sm-2 col-form-label">URL</label>
<div class="col-sm-10">
<input class="form-control" type="url" value="https://yakuthemes.com" id="example-url-input">
</div>
</div>
<div class="form-group row">
<label for="example-tel-input" class="col-sm-2 col-form-label">Telephone</label>
<div class="col-sm-10">
<input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
</div>
</div>
<div class="form-group row">
<label for="example-password-input" class="col-sm-2 col-form-label">Password</label>
<div class="col-sm-10">
<input class="form-control" type="password" value="yakuzitheking" id="example-password-input">
</div>
</div>
<div class="form-group row">
<label for="example-number-input" class="col-sm-2 col-form-label">Number</label>
<div class="col-sm-10">
<input class="form-control" type="number" value="42" id="example-number-input">
</div>
</div>
<div class="form-group row">
<label for="example-datetime-local-input" class="col-sm-2 col-form-label">Datetime</label>
<div class="col-sm-10">
<input class="form-control" type="datetime-local" value="2017-08-19T13:45:00" id="example-datetime-local-input">
</div>
</div>
<div class="form-group row">
<label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
<div class="col-sm-10">
<input class="form-control" type="date" value="2017-08-19" id="example-date-input">
</div>
</div>
<div class="form-group row">
<label for="example-month-input" class="col-sm-2 col-form-label">Month</label>
<div class="col-sm-10">
<input class="form-control" type="month" value="2017-08" id="example-month-input">
</div>
</div>
<div class="form-group row">
<label for="example-week-input" class="col-sm-2 col-form-label">Week</label>
<div class="col-sm-10">
<input class="form-control" type="week" value="2017-W33" id="example-week-input">
</div>
</div>
<div class="form-group row">
<label for="example-time-input" class="col-sm-2 col-form-label">Time</label>
<div class="col-sm-10">
<input class="form-control" type="time" value="13:45:00" id="example-time-input">
</div>
</div>
</form>
</div>
</div>
<div class="col-lg-6">
<h5>Form Layouts</h5>
<p class="m-b-35">Gameforest includes validation styles for error, warning, and success states on form controls.</p>
<form>
<div class="form-group">
<label for="formGroupExampleInput">Example label</label>
<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
</div>
<div class="form-group">
<label for="formGroupExampleInput2">Form Secondary</label>
<input type="text" class="form-control form-control-secondary" id="formGroupExampleInput2" placeholder="Another input">
</div>
</form>
<fieldset>
<legend>Inline Forms</legend>
<form class="form-inline">
<div class="form-group m-r-5">
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-user"></i></div>
<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
</div>
</div>
<div class="form-group">
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-lock"></i></div>
<input type="password" class="form-control" id="inlineFormInputGroup" placeholder="Password"> </div>
</div>
<button type="submit" class="btn btn-primary m-l-10">Submit</button>
</form>
</fieldset>
<form class="m-t-20">
<fieldset disabled>
<div class="form-group">
<label for="disabledTextInput">Disabled input</label>
<input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
</div>
<div class="form-group">
<label for="disabledSelect">Disabled select menu</label>
<select id="disabledSelect" class="form-control">
                <option>Disabled select</option>
              </select>
</div>
</fieldset>
</form>
<div class="form-group">
<label for="disabledSelect">Readonly input</label>
<input class="form-control" type="text" placeholder="https://yakuthemes.com" readonly>
</div>
<div class="form-group has-success">
<label class="control-label" for="inputSuccess1">Input with success</label>
<input type="text" class="form-control" id="inputSuccess1">
<small class="form-text">Example help text that remains unchanged.</small>
</div>
<div class="form-group has-warning">
<label class="control-label" for="inputWarning1">Input with warning</label>
<input type="text" class="form-control" id="inputWarning1">
<small class="form-text">Example help text that remains unchanged.</small>
</div>
<div class="form-group has-danger">
<label class="control-label" for="inputDanger1">Input with danger</label>
<input type="text" class="form-control" id="inputDanger1">
<small class="form-text">Example help text that remains unchanged.</small>
</div>
</div>
</div>

<div class="row m-t-40">
<div class="col-lg-6">
<div class="p-r-30">
<h5>Input Groups</h5>
<p class="m-b-30">Extend form controls by adding text or buttons before, after, or on both sides of any text-based.</p>
<div class="form-group">
<label for="exampleInputUsername1">Username</label>
<div class="input-group">
<span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
<input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" aria-describedby="basic-addon1">
</div>
<small id="emailHelp" class="form-text">Enter your username wich will be display on frontpage.</small>
</div>
<div class="form-group">
<div class="input-group">
<span class="input-group-addon" id="basic-addon3">https://yakuthemes.com/</span>
<input type="text" class="form-control" id="basic-url" placeholder="nickname" aria-describedby="basic-addon3">
</div>
</div>
<div class="form-group">
<div class="input-group">
<input type="text" class="form-control" placeholder="Subdomain" aria-describedby="basic-addon2">
<span class="input-group-addon" id="basic-addon2">.yakuthemes.com</span>
</div>
</div>
<div class="form-group">
<div class="input-group">
<span class="input-group-addon">$</span>
<input type="number" class="form-control" placeholder="Donate">
<span class="input-group-addon"><i class="fa fa-paypal"></i></span>
</div>
</div>
<div class="form-group">
<div class="input-group">
<input type="text" class="form-control" placeholder="Search for games...">
<span class="input-group-btn">
                <button class="btn btn-secondary btn-icon" type="button"><i class="fa fa-search"></i></button>
              </span>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<h5>Input Icons</h5>
<p class="m-b-50">Gameforest includes validation styles for error, warning.</p>
<div class="form-group">
<label class="control-label" for="inputiconleft">Input icon left</label>
<div class="input-icon-left">
<i class="fa fa-user"></i>
<input type="email" class="form-control" id="inputiconleft" placeholder="Username">
<small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
</div>
</div>
<div class="form-group">
<label class="control-label" for="inputiconright">Input icon right</label>
<div class="input-icon-right">
<i class="fa fa-search"></i>
<input type="text" class="form-control" id="inputiconright" placeholder="Search for game...">
</div>
</div>
</div>
</div>

<h5 class="m-t-60">Control sizing</h5>
<p class="m-b-25">Set heights using classes like <code>.form-control-lg</code>, and set widths using grid column classes like .col-lg-*</p>
<div class="row">
<div class="col-lg-4">
<input class="form-control" type="text" placeholder="Default input">
</div>
<div class="col-lg-4">
<input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
</div>
<div class="col-lg-4">
<input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
</div>
</div>

<h5 class="m-t-60">Column sizing</h5>
<p class="m-b-25">Wrap inputs in grid columns, or any custom parent element, to easily enforce desired widths.</p>
<div class="row">
<div class="col-lg-2">
<input type="text" class="form-control" placeholder=".col-lg-2">
</div>
<div class="col-lg-3">
<input type="text" class="form-control" placeholder=".col-lg-3">
</div>
<div class="col-lg-5">
<input type="text" class="form-control" placeholder=".col-lg-5">
</div>
<div class="col-lg-2">
<input type="text" class="form-control" placeholder=".col-lg-2">
</div>
</div>
</div>
</section>

@endsection  

@section('scripts')

@endsection