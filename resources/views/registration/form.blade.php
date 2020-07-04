<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>YMC PORTAL</title>
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
    <div style=" color:#155724;background-color:#d4edda;border-color:#c3e6cb;padding:20px;margin:20px" >
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
</div></div></div>
  <!-- end alert-->
    <input type="text" name="email" placeholder="Your email *" required/>
    <input type="text" name="name" placeholder="Your name *" required/>
    <h3 class="fs-subtitle" style="float:left;margin-bottom:10px">Date of birth *</h3>
    <input type="date" class="form-control" placeholder="Date of Birth" name="date_of_birth"
    value="{{old('date_of_birth')}}" required>
    <h3 class="fs-subtitle" style="float:left;margin-bottom:10px">Gender *</h3><br><br><br>
    <div style=" text-align:left;">
    <div style="font-size:13px;" >
        <label >
            <input style="width:0%;" type="radio" id="inp" name="gender" value="Male"> &nbsp;&nbsp;&nbsp;Male

        </label><span class="checkmark" ></span>
    </div> <br>
     <div style="font-size:13px" >
    <label >
            <input style="width:0%;"type="radio" id="inp" name="gender"value="Female">&nbsp;&nbsp;&nbsp; Female

        </label> <span class="checkmark"></span>
      </div>
    </div>
    <input type="text" name="contact" placeholder="Your contact *"required />
    <input type="text" name="occupation" placeholder="Your occupation *"required />
    <input type="text" name="hometown" placeholder="Your hometown *"required />
    <input type="text" name="address" placeholder="Residencial Address *"required />
    <input type="text" name="emergency_contact" placeholder="Emergency contact *" required/>
    <input type="text" name="relationship" placeholder="Relatioship with emergency contact *" required/>
    <input type="text" name="skill" placeholder="Special Skills *" required/>


    <input type="button" name="next" class="next action-button" value="Next" />
    <div class="col-sm-3">
        <a href="{{route('login')}}" >Admin portal</a>
          </div>
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Transcription Details</h2>
    <h3 class="fs-subtitle">Step 1</h3>



    <div style=" text-align:left;">
    <br> <h3 style="font-weight: bolder;font-size: 15px; color: #666;margin-bottom: 0px;">Branch * </h3>
                      <br>
                          <div style="font-size:13px;" >
                            <label >
                                <input style="width:0%;" type="radio" id="inp" name="branch" value="Accra Central YMCA">&nbsp;&nbsp;&nbsp; Accra Central YMCA

                            </label><span class="checkmark" ></span>
                        </div><br>

                        <div style="font-size:13px" >
                        <label >
                                <input style="width:0%;"type="radio" id="inp" name="branch"value="Amasaman YMCA">&nbsp;&nbsp;&nbsp; Amasaman YMCA

                            </label><span class="checkmark"></span>
                          </div>
                        <br>

                        <div style="font-size:13px" >
                        <label ><input style="width:0%;"type="radio" id="inp" name="branch" value="Kpone Bawaleshie YMCA">&nbsp;&nbsp;&nbsp; Kpone Bawaleshie YMCA

                            </label><span class="checkmark"></span>
                          </div><br>

                          <div style="font-size:13px;" >
                            <label >
                                <input style="width:0%;" type="radio" id="inp" name="branch" value="Madina YMCA">&nbsp;&nbsp;&nbsp; Madina YMCA

                            </label><span class="checkmark" ></span>
                        </div><br>

                        <div style="font-size:13px" >
                        <label >
                                <input style="width:0%;"type="radio" id="inp" name="branch"value="Mamprobi YMCA">&nbsp;&nbsp;&nbsp; Mamprobi YMCA

                            </label><span class="checkmark"></span>
                          </div>
                        <br>

                        <div style="font-size:13px" >
                        <label ><input style="width:0%;"type="radio" id="inp" name="branch" value="Prampram YMCA">&nbsp;&nbsp;&nbsp; Prampram YMCA

                            </label><span class="checkmark"></span>
                          </div><br>

                          <div style="font-size:13px;" >
                            <label >
                                <input style="width:0%;" type="radio" id="inp" name="branch" value="Sakaman YMCA">&nbsp;&nbsp;&nbsp; Sakaman YMCA

                            </label><span class="checkmark" ></span>
                        </div><br>

                        <div style="font-size:13px" >
                        <label >
                                <input style="width:0%;"type="radio" id="inp" name="branch"value="Tema YMCA">&nbsp;&nbsp;&nbsp; Tema YMCA

                            </label><span class="checkmark"></span>
                          </div>
                        <br>

                        <div style="font-size:13px" >
                        <label ><input style="width:0%;"type="radio" id="inp" name="branch" value="Tema Harbour City YMCA">&nbsp;&nbsp;&nbsp; Tema Harbour City YMCA

                            </label> <span class="checkmark"></span>
                          </div>

    </div><br>
    <div style=" text-align:left;">
        <br> <h3 style="font-weight: bolder;font-size: 15px; color: #666;margin-bottom: 0px;">Membership Type * </h3>
                          <br>
                          <div style="font-size:13px" >
                            <label >
                                <input style="width:0%;"type="radio" id="inp" name="membership" value="Life Membership">&nbsp;&nbsp;&nbsp; Life Membership

                            </label><span class="checkmark"></span>
                          </div><br>

                        <div style="font-size:13px" >
                        <label >
                                <input style="width:0%;"type="radio" id="inp" name="membership" value="Full Membership">&nbsp;&nbsp;&nbsp; Full Membership

                            </label><span class="checkmark"></span>
                          </div><br>

                        <div style="font-size:13px" >
                        <label ><input style="width:0%;"type="radio" id="inp" name="membership" value="Associate Membership">&nbsp;&nbsp;&nbsp; Associate Membership

                            </label><span class="checkmark"></span>
                          </div><br>

                        <div style="font-size:13px" >
                                <label ><input style="width:0%;"type="radio" id="inp" name="membership" value="Junior/Hi-Y Membership">&nbsp;&nbsp;&nbsp; Junior/Hi-Y Membership

                                    </label><span class="checkmark"></span>
                        </div>

        </div><br>

        <div style=" text-align:left;">
            <br> <h3 style="font-weight: bolder;font-size: 15px; color: #666;margin-bottom: 0px;">Have you ever attended a YMCA Programme? * </h3>
                              <br>
                              <div style="font-size:13px" >
                                <label >
                                    <input style="width:0%;"type="radio" id="inp" name="ever_attended" value="YES">&nbsp;&nbsp;&nbsp; YES

                                </label><span class="checkmark"></span>
                              </div><br>

                            <div style="font-size:13px" >
                            <label >
                                    <input style="width:0%;"type="radio" id="inp" name="ever_attended" value="NO" >&nbsp;&nbsp;&nbsp; NO

                                </label><span class="checkmark"></span>
                              </div>
        </div><br>


    <input type="text" name="why_member" placeholder="Why do you want to be a YMCA Member? * " required/>
    <input type="text" name="how_ymca" placeholder="How did you get to know about the YMCA? *" required/>

    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Transcription Details</h2>
    <h3 class="fs-subtitle">Step 2</h3>

    <h3 class="fs-subtitle" style="float:left;margin-bottom:10px;text-align:left;font-size:15px"><br>
        <b>Please upload a passport size photo that shall be used to create your YMCA Membership card. Please be minded to pick a decent one that reflects the values of the YMCA. Thank you!</b></h3>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile" name="passport_picture" required>

      </div>


      <div style=" text-align:left;">
        <br> <h3 style="font-size: 15px; color: #666;margin-bottom: 0px;">I hereby agree to the agree to the code of conduct governing the membership of the association and pledge my Time, Talent, and Treasure, to the mission of the Ghana YMCA. *</h3>
                          <br>
                          <div style="font-size:13px" >
                            <label >
                                <input style="width:0%;"type="radio" id="inp" checked name="agreement" value="YES">&nbsp;&nbsp;&nbsp; YES

                            </label><span class="checkmark"></span>
                          </div><br>

                        <div style="font-size:13px" >
                        <label >
                                <input style="width:0%;"type="radio" id="inp" name="agreement" value="NO">&nbsp;&nbsp;&nbsp; NO

                            </label><span class="checkmark"></span>
                          </div>
    </div><br>




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
