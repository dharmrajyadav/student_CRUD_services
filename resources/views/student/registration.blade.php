@extends('layouts.master')
@section('title','Student Registration')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    
    <!-- Main css -->
   <style>
   


/* @extend display-flex; */
display-flex {
  display: flex;
  display: -webkit-flex; }

/* @extend list-type-ulli; */
list-type-ulli, ul {
  list-style-type: none;
  margin: 0;
  padding: 0; }

  
a:focus, a:active {
  text-decoration: none;
  outline: none;
  transition: all 300ms ease 0s;
  -moz-transition: all 300ms ease 0s;
  -webkit-transition: all 300ms ease 0s;
  -o-transition: all 300ms ease 0s;
  -ms-transition: all 300ms ease 0s; }

input, select, textarea {
  outline: none;
  appearance: unset !important;
  -moz-appearance: unset !important;
  -webkit-appearance: unset !important;
  -o-appearance: unset !important;
  -ms-appearance: unset !important; }

input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {
  appearance: none !important;
  -moz-appearance: none !important;
  -webkit-appearance: none !important;
  -o-appearance: none !important;
  -ms-appearance: none !important;
  margin: 0; }

input:focus, select:focus, textarea:focus {
  outline: none;
  box-shadow: none !important;
  -moz-box-shadow: none !important;
  -webkit-box-shadow: none !important;
  -o-box-shadow: none !important;
  -ms-box-shadow: none !important; }

input[type=checkbox] {
  appearance: checkbox !important;
  -moz-appearance: checkbox !important;
  -webkit-appearance: checkbox !important;
  -o-appearance: checkbox !important;
  -ms-appearance: checkbox !important; }

input[type=radio] {
  appearance: radio !important;
  -moz-appearance: radio !important;
  -webkit-appearance: radio !important;
  -o-appearance: radio !important;
  -ms-appearance: radio !important; }

img {
  max-width: 100%;
  height: auto; }

figure {
  margin: 0; }

p {
  margin-bottom: 0px; }

input:-webkit-autofill {
  box-shadow: 0 0 0 30px white inset;
  -moz-box-shadow: 0 0 0 30px white inset;
  -webkit-box-shadow: 0 0 0 30px white inset;
  -o-box-shadow: 0 0 0 30px white inset;
  -ms-box-shadow: 0 0 0 30px white inset; }

h2 {
  line-height: 1.8;
  margin: 0;
  padding: 0;
  font-weight: bold;
  color: #222;
  font-family: 'Roboto Slab';
  font-size: 20px;
  margin-bottom: 30px;
  text-transform: uppercase; }

h3 {
  font-weight: bold;
  color: #222;
  font-size: 15px;
  margin: 0px;
  margin-bottom: 35px; }

.clear {
  clear: both; }

body {
  font-size: 13px;
  line-height: 1.8;
  color: #fff;
  background-repeat: no-repeat;
  background-size: cover;
  -moz-background-size: cover;
  -webkit-background-size: cover;
  -o-background-size: cover;
  -ms-background-size: cover;
  background-position: center center;
  font-weight: 400;
  font-family: 'Roboto Slab';
  margin: 0px; }

.main {
  padding: 60px 0;
  position: relative; }

.container {
  width: 586px;
  background: #fff;
  margin-left: 165px;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  -o-border-radius: 10px;
  -ms-border-radius: 10px; }

.appointment-form {
  padding: 50px 60px 70px 60px; }

input, select {
  width: 100%;
  display: block;
  border: none;
  border-bottom: 2px solid #ebebeb;
  padding: 5px 0;
  color: #222;
  margin-bottom: 31px;
  font-family: 'Roboto Slab'; }
  input:focus, select:focus {
    color: #222;
    border-bottom: 2px solid #4966b1; }

input[type=checkbox]:not(old) {
  width: 2em;
  margin: 0;
  padding: 0;
  font-size: 1em;
  display: none; }

input[type=checkbox]:not(old) + label {
  display: inline-block;
  margin-top: 7px;
  margin-bottom: 25px; }

input[type=checkbox]:not(old) + label > span {
  display: inline-block;
  width: 13px;
  height: 13px;
  margin-right: 15px;
  margin-bottom: 3px;
  border: 1px solid #ebebeb;
  background: white;
  background-image: -moz-linear-gradient(white, white);
  background-image: -ms-linear-gradient(white, white);
  background-image: -o-linear-gradient(white, white);
  background-image: -webkit-linear-gradient(white, white);
  background-image: linear-gradient(white, white);
  vertical-align: bottom; }

input[type=checkbox]:not(old):checked + label > span {
  background-image: -moz-linear-gradient(white, white);
  background-image: -ms-linear-gradient(white, white);
  background-image: -o-linear-gradient(white, white);
  background-image: -webkit-linear-gradient(white, white);
  background-image: linear-gradient(white, white); }

input[type=checkbox]:not(old):checked + label > span:before {
  content: '\f26b';
  display: block;
  color: #222;
  font-size: 11px;
  line-height: 1.2;
  text-align: center;
  font-family: 'Material-Design-Iconic-Font';
  font-weight: bold; }

.label-agree-term {
  color: #999; }

.term-service {
  color: #222; }

.submit {
  width: auto;
  background: #4966b1;
  color: #fff;
  padding: 16px 17px;
  font-size: 13px;
  border: none;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -ms-border-radius: 5px;
  cursor: pointer;
  box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
  -moz-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
  -webkit-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
  -o-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
  -ms-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7); }
  .submit:hover {
    background: #3a518d; }

ul {
  background: 0 0;
  z-index: 9; }

ul li {
  padding: 3px 0px;
  z-index: 2;
  color: #999; }
  ul li:last-child {
    border-bottom: 1px solid #ebebeb; }

ul li:not(.init) {
  display: none;
  background: #fff;
  color: #222;
  padding: 5px 10px;
  border-left: 1px solid #ebebeb;
  border-right: 1px solid #ebebeb;
  border-top: 1px solid #ebebeb; }

ul li:not(.init):hover, ul li.selected:not(.init) {
  background: #4966b1;
  color: #fff; }

li.init {
  cursor: pointer;
  position: relative;
  border-bottom: 2px solid #ebebeb; }
  li.init:after {
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    font-size: 20px;
    color: #999;
    font-family: 'Material-Design-Iconic-Font';
    content: '\f2f9'; }

#confirm_type {
  margin-bottom: 30px; }

.form-group-2 {
  margin-top: 15px;
  margin-bottom: 30px; }

.form-check {
  margin-bottom: 20px; }

.select-list {
  position: relative;
  display: inline-block;
  width: 100%;
  margin-bottom: 55px; }

.list-item {
  position: absolute;
  width: 100%; }

#confirm_type {
  z-index: 99; }

#hour_appointment {
  z-index: 9; }

@media screen and (max-width: 1024px) {
  .container {
    margin: 0 auto; } }
@media screen and (max-width: 768px) {
  .container {
    width: calc( 100% - 30px);
    max-width: 100%; } }
@media screen and (max-width: 480px) {
  .appointment-form {
    padding: 50px 30px 70px 30px; } }

/*# sourceMappingURL=style.css.map */

.data{
    font-size: larger;
    font-weight: bolder;


}

   </style>
    
    </head>
<body>

    <div class="main">

        <div class="container">
            <form method="POST" action="{{route('registration.data')}}" enctype="multipart/form-data">
           @csrf
                <h2>Student Registration form</h2>
                <div class="form-group-1">
                    

                    <input type="text" name="name" id="name" class="data" placeholder="Name" required />
                    <input type="text" name="age" id="age" class="data" placeholder="Age" required />
                    
                    <div class="select-list" style="font-size: larger;">
                        <select name="courseType" id="course_type" style="position: relative;
    margin-bottom: -29px;">
                            <option slected value="">Course Type</option>
                            
                        </select>
                    </div>
                   
                    <input type="text" name="address" id="address" class="data" placeholder="Address" required />
                   
                    <div class="select-list" style="font-size: larger;">
                        <select name="country" id="country" style="position: relative;
    margin-bottom: -29px;">
                            <option slected value="">Select Country</option>
                             </select>
                    </div>
                   
                    <div class="select-list" style="font-size: larger;">
                        <select name="city" id="city" style="position: relative;
    margin-bottom: -29px;">
                            <option slected value="">Select State</option>
                            
                        </select>
                    </div>
                    
                      <input type="text" name="mobile" id="mobile" class="data" placeholder="Mobile" required />
                    <input type="email" name="email" id="email" class="data" placeholder="Email" required />
                    <input type="text" name="password" id="password" class="data" placeholder="Password" required />
                    
                </div>
                

                <!-- <div class="form-submit"> -->
                <button type = "submit" class = "btn btn-success">Submit</button>
                    <!-- <input type="submit" name="submit" id="submit" class="submit" value="Request an appointment" /> -->

                <!-- </div> -->
            </form>
        </div>

    </div>

<script>

    $(document).ready(function(){
            $.ajax({
              url:'{{route('course.Type')}}',
               success:function(data)
               {
                 var courseData=JSON.parse(data);
                 var length=courseData.length;
                 var courseAppend='';
                 for(var i = 0;i<length;i++)
                 {  
                      
                      courseAppend+='<option value="'+courseData[i].courses+'">'+courseData[i].courses+'</option>';
                   }
                        $('#course_type').append(courseAppend);
               } 
            });

            
      $.ajax({
              url:'{{route('country.name')}}',
              success:function(data)
              {
                var countryData=JSON.parse(data);
                var length=countryData.length;
                var countryAppend='';
                for(var i=0;i<length;i++)
                {
                  countryAppend+='<option value="'+countryData[i].id+'">'+countryData[i].Country_Name+'</option>';
                }
                  $('#country').append(countryAppend);
              }

            });


            $('#country').change(function(){
                  var countryId=$(this).val();
              $.ajax({
                url:'getCountryId/'+countryId,
               type:'get',
                data:{countryId:countryId},
                success:function(data)
                {
                  var countryData=JSON.parse(data);
                var length=countryData.length;
                var countryAppend='';
                for(var i=0;i<length;i++)
                {
                  countryAppend+='<option value="'+countryData[i].id+'">'+countryData[i].Country_Name+'</option>';
                }
                  $('#city').append(countryAppend);
                }

              });

            })
            

    });



    // $(document).ready(function(){

    //   $.ajax({
    //           url:'{{route('country.name')}}',
    //           success:function(data)
    //           {
    //             var countryData=JSON.parse(data);
    //             var length=countryData.length;
    //             var countryAppend='';
    //             for(var i=0;i<length;i++)
    //             {
    //               countryAppend+='<option value="'+countryData[i].id+'">'+countryData[i].Country_Name+'</option>';
    //             }
    //               $('#country').append(countryAppend);
    //           }

    //         });

    // });

</script>



    
</body>
</html>

  @endsection

