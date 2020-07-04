<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>YMC Registration</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- multistep form -->
<form id="msform" method="POST" action="{{route('clients.register')}}" enctype="multipart/form-data">
    {{csrf_field()}}
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Personal Details</li>
    <li>Transcription Details</li>
    <li>Transcription Details</li>
  </ul>

  <!-- fieldsets -->
  <fieldset>

    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">Step 1</h3>
    <!-- alert-->
  <div class="row">

    <div class="col-sm-12">
<div>
    @if(count($errors))
        <div  style="color:#721c24;background-color:#f8d7da;border-color:#f5c6cb;padding:20px;margin:20px">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
</div></div></div>
  <!-- end alert-->
    <input type="text" name="email" placeholder="Your email" required/>
    <input type="text" name="name" placeholder="Your name" required/>
    <input type="text" name="company" placeholder="Your company/ organisation"required />
    <input type="text" name="contact" placeholder="Your contact"required />
    <input type="text" name="prefered_title" placeholder="Preferred Title of Script *" required/>

    <input type="button" name="next" class="next action-button" value="Next" />
    <div class="col-sm-3">
        <a href="{{route('login')}}" >Admin portal</a>
          </div>
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Transcription Details</h2>
    <h3 class="fs-subtitle">Step 1</h3>



    <div style=" text-align:left;">
    <br> <h3 style="font-weight: bolder;font-size: 15px; color: #666;margin-bottom: 0px;">Preferred Transcription Type * </h3>
                      <br>
                          <div style="font-size:13px;" >

                            <label >
                                <input style="width:0%;" type="radio" id="inp" name="transc" value="Ditto Copy">&nbsp; Ditto Copy (Strict Verbatim Transcription)
                                 <span class="checkmark" ></span>
                            </label>
                        </div>
                                                  <br>

                        <div style="font-size:13px" >
                        <label >
                                <input style="width:0%;"type="radio" id="inp" name="transc"value="Smart Copy">&nbsp; Smart Copy (Intelligent Verbatim Transcription)
                                       <span class="checkmark"></span>
                            </label>
                          </div>
                        <br>

                        <div style="font-size:13px" >
                        <label ><input style="width:0%;"type="radio" id="inp" name="transc" value="Clean Copy">&nbsp; Clean Copy (Edited Transcription)
                                <span class="checkmark"></span>
                            </label>
                          </div><br>

                        <div style="font-size:13px" >
                            <label >
                                <input style="width:0%;"type="radio" id="inp" name="transc" value="Other">&nbsp; Others
                                 <span class="checkmark"></span>
                            </label>
                          </div>
    </div>
    <div style=" text-align:left;">
        <br> <h3 style="font-weight: bolder;font-size: 15px; color: #666;margin-bottom: 0px;">Turnaround Time * </h3>
                          <br>
                          <div style="font-size:13px" >
                            <label >
                                <input style="width:0%;"type="radio" id="inp" name="time" value="24 hours">&nbsp; 24 hours
                                 <span class="checkmark"></span>
                            </label>
                          </div><br>

                        <div style="font-size:13px" >
                        <label >
                                <input style="width:0%;"type="radio" id="inp" name="time" value="12 hours">&nbsp; 12 hours
                                <span class="checkmark"></span>
                            </label>
                          </div><br>

                        <div style="font-size:13px" >
                        <label ><input style="width:0%;"type="radio" id="inp" name="time" value="9 hours">&nbsp; 9 hours
                                <span class="checkmark"></span>
                            </label>
                          </div><br>

                        <div style="font-size:13px" >
                                <label ><input style="width:0%;"type="radio" id="inp" name="time" value="6 hours">&nbsp; 6 hours
                                        <span class="checkmark"></span>
                                    </label>
                        </div><br>

                        <div style="font-size:13px" >
                                        <label ><input style="width:0%;"type="radio" id="inp" name="time" value="3 hours">&nbsp; 3 hours
                                                <span class="checkmark"></span>
                                            </label>
                        </div><br>

                        <div style="font-size:13px" >
                        <label >
                                <input style="width:0%;"type="radio" id="inp" name="time" value="Other">&nbsp; Others
                                 <span class="checkmark"></span>
                            </label>
                          </div>
        </div>

    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Transcription Details</h2>
    <h3 class="fs-subtitle">Step 2</h3>
    <input type="text" name="prefered_title" placeholder="Preferred Title of Script *" required/>
    <input type="text" name="further_instruction" placeholder="Any Further Instructions *" required/>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile" name="audio_file" required>
        <label class="custom-file-label" for="customFile">Upload Audio Here *</label>
      </div>

    <input type="button" name="previous" class="previous action-button" value="Previous" />
    {{-- <input type="submit" name="submit" class="submit action-button" value="Submit" /> --}}
    <button type="submit"  style="width: 100px;background:#27AE60;font-weight: bold;color:white; border: 0 none;
    border-radius: 1px;cursor: pointer;padding: 10px 5px;margin: 10px 5px;text-align: center;" >Submit</button>

  </fieldset>
</form>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script><script  src="./script.js"></script>

{{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}
</body>
</html>
