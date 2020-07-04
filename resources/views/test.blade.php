<!DOCTYPE html>
<html lang="en">
    {{-- @include('registration.style') --}}
<head>
<title>DittoType Transcription Audio Upload</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="assets\img\favicon.png">


<link rel="stylesheet" type="text/css" href="vendor\bootstrap\css\bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts\font-awesome-4.7.0\css\font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="vendor\animate\animate.css">

<link rel="stylesheet" type="text/css" href="vendor\css-hamburgers\hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor\select2\select2.min.css">

<link rel="stylesheet" type="text/css" href="css\util.css">
<link rel="stylesheet" type="text/css" href="css\main.css">

</head>
<body>
<div class="bg-contact2" style="background-image: url('images/bg-01.jpg')" >
<div class="container-contact2">


        <div class="wrap-contact2">
                <span class="contact2-form-title">
                        <div class="account-logo">
                                <a href=""><img src="assets\img\logo2.png" alt="Dreamguy's Technologies"></a>
                            </div><br>
                        DittoType Transcription Audio Upload
                </span>
                Please use this form to send us your audio and specify how your work should be done. Thank you.
                <h5></h5><br>

                <div class="row">

                        <div class="col-sm-12">
                            <div>
                                @if(count($errors))
                                    <div class="alert bg-danger">
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
                            </div>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>



        </div>
{{-- Form --}}

<form class=" validate-form" method="POST" action="{{route('clients.register')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="wrap-contact2">
            <div class="wrap-input2 validate-input" data-validate="Name is required">
                    <input class="input2" type="email" name="email" required>
                    <span class="focus-input2" data-placeholder="Email Address"></span>
            </div>
        </div>
        <div class="wrap-contact2">
                <div class="wrap-input2 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input2" type="text" name="name" required>
                        <span class="focus-input2" data-placeholder="Your Name"></span>
                </div>
            </div>
            <div class="wrap-contact2">
                    <div class="wrap-input2 validate-input" data-validate="Company/Organisation is required">
                            <input class="input2" type="text" name="company" required>
                            <span class="focus-input2" data-placeholder="Your Company/Organisation"></span>
                    </div>
            </div>

            <div class="wrap-contact2">
                    <div class="wrap-input2 validate-input" data-validate="Contact is required">
                            <input class="input2" type="text" name="contact" required>
                            <span class="focus-input2" data-placeholder="Your Contact"></span>
                    </div>
            </div>

            <div class="wrap-contact2">
                    <div class="wrap-input2 validate-input" data-validate="Preferred Title of Script  is required">
                            <input class="input2" type="text" name="prefered_title" required>
                            <span class="focus-input2" data-placeholder="Preferred Title of Script *"></span>
                    </div>
            </div>

            <div class="wrap-contact2" style="display: block;">
                    Preferred Transcription Type *                   <br><br>
                          <div style="font-size:15px" >

                            <label >
                                <input type="radio" id="inp" name="transc" value="Ditto Copy">&nbsp; Ditto Copy (Strict Verbatim Transcription)
                                 <span class="checkmark"></span>
                            </label>
                          </div>
                                                  <br>

                        <div style="font-size:15px" >
                        <label >
                                <input type="radio" id="inp" name="transc"value="Smart Copy">&nbsp; Smart Copy (Intelligent Verbatim Transcription)
                                       <span class="checkmark"></span>
                            </label>
                          </div>
                        <br>

                        <div style="font-size:15px" >
                        <label ><input type="radio" id="inp" name="transc" value="Clean Copy">&nbsp; Clean Copy (Edited Transcription)
                                <span class="checkmark"></span>
                            </label>
                          </div><br>

                        <div style="font-size:15px" >
                            <label >
                                <input type="radio" id="inp" name="transc" value="Other">&nbsp; Others
                                 <span class="checkmark"></span>
                            </label>
                          </div>
                          {{--  --}}
                          {{-- <div class="wrap-input2 validate-input" data-validate="Preferred Title of Script  is required">
                                <input class="input2" type="text" name="title" required>
                                <span class="focus-input2" data-placeholder="Preferred Title of Script *"></span>
                        </div> --}}

                          <br>

                        </div>

                        <div class="wrap-contact2" style="display: block;">
                                Turnaround Time *                   <br><br>
                                      <div style="font-size:15px" >
                                        <label >
                                            <input type="radio" id="inp" name="time" value="24 hours">&nbsp; 24 hours
                                             <span class="checkmark"></span>
                                        </label>
                                      </div><br>

                                    <div style="font-size:15px" >
                                    <label >
                                            <input type="radio" id="inp" name="time" value="12 hours">&nbsp; 12 hours
                                            <span class="checkmark"></span>
                                        </label>
                                      </div><br>

                                    <div style="font-size:15px" >
                                    <label ><input type="radio" id="inp" name="time" value="9 hours">&nbsp; 9 hours
                                            <span class="checkmark"></span>
                                        </label>
                                      </div><br>

                                    <div style="font-size:15px" >
                                            <label ><input type="radio" id="inp" name="time" value="6 hours">&nbsp; 6 hours
                                                    <span class="checkmark"></span>
                                                </label>
                                    </div><br>

                                    <div style="font-size:15px" >
                                                    <label ><input type="radio" id="inp" name="time" value="3 hours">&nbsp; 3 hours
                                                            <span class="checkmark"></span>
                                                        </label>
                                    </div><br>

                                    <div style="font-size:15px" >
                                    <label >
                                            <input type="radio" id="inp" name="time" value="Other">&nbsp; Others
                                             <span class="checkmark"></span>
                                        </label>
                                      </div>
                                    <br>

                                    </div>


            <div class="wrap-contact2">
                    <div class="wrap-input2 validate-input" data-validate="required">
                            <input class="input2" type="text" name="further_instruction" required>
                            <span class="focus-input2" data-placeholder="Any Further Instructions"></span>
                    </div>
                </div>

            <div class="wrap-contact2">

                            <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="audio_file" required>
                                    <label class="custom-file-label" for="customFile">Upload Audio Here *</label>
                                  </div>




                </div>

                <div class="wrap-contact2">
                    <div class="form-check">
                            {{-- <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                            <label class="form-check-label" for="autoSizingCheck2">
                                    Send me a copy of my responses.
                            </label><br><br> --}}
                            <div class="row">
                                <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                
                            </div>
                     </div>

                 </div>

            {{-- <div class="wrap-contact2">
            <form class="contact2-form validate-form">

            <div class="wrap-input2 validate-input" data-validate="Name is required">
            <input class="input2" type="text" name="name">
            <span class="focus-input2" data-placeholder="NAME"></span>
            </div>
            <div class="wrap-input2 validate-input" data-validate="Valid email is required: ex@abc.xyz">
            <input class="input2" type="text" name="email">
            <span class="focus-input2" data-placeholder="EMAIL"></span>
            </div>
            <div class="wrap-input2 validate-input" data-validate="Message is required">
            <textarea class="input2" name="message"></textarea>
            <span class="focus-input2" data-placeholder="MESSAGE"></span>
            </div>
            <div class="container-contact2-form-btn">
            <div class="wrap-contact2-form-btn">
            <div class="contact2-form-bgbtn"></div>
            <button class="contact2-form-btn">
            Send Your Message
            </button>
            </div>
            </div>
            </form>

            </div> --}}

</form>
{{-- end Form --}}

</div>




</div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<script src="vendor\jquery\jquery-3.2.1.min.js" type="7fdeb272070679655a7c100e-text/javascript"></script>

<script src="vendor\bootstrap\js\popper.js" type="7fdeb272070679655a7c100e-text/javascript"></script>
<script src="vendor\bootstrap\js\bootstrap.min.js" type="7fdeb272070679655a7c100e-text/javascript"></script>

<script src="vendor\select2\select2.min.js" type="7fdeb272070679655a7c100e-text/javascript"></script>

<script src="js\main.js" type="7fdeb272070679655a7c100e-text/javascript"></script>

<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="7fdeb272070679655a7c100e-text/javascript"></script>
<script type="7fdeb272070679655a7c100e-text/javascript">
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="7fdeb272070679655a7c100e-|49" defer=""></script></body>
</html>
