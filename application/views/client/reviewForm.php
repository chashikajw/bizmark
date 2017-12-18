<!DOCTYPE html>
<html>
<style>
body{
    background-color: #607A8B;
    padding-left: 30%;
    padding-right: 30%;
    padding-top: 5%;
}

form {
    border: 3px solid #f1f1f1;
    background-color: white;
}

input[type=text], input[type=password] {
    width: 100%;
    height: 50px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}



#slidecontainer {
    width: 100%;
}

.slider {
    -webkit-appearance: none;
    width: 50%;
    height: 15px;
    border-radius: 5px;
    background: #d3d3d3;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
}

.slider:hover {
    opacity: 1;
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background: #4CAF50;
    cursor: pointer;
}

.slider::-moz-range-thumb {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background: #4CAF50;
    cursor: pointer;
}
</style>
<body>

<form action="<?= base_url('business/addReview/' . $business_id)?>"  method="POST">
  <div class="imgcontainer">
    <h2>Review</h2>
  </div>

  <div class="container">
    <input name='business_id' type="hidden" placeholder="Enter Username" value='<?= $business_id ?>' required>
    <input id='rate_value' name='value' type="hidden" placeholder="3" value='3' required>

    <label><b>Comment</b></label>
    <input name='comment' type="text" placeholder="Type your comment here..." required>


    <!-- Slider -->
    <label><b>Rate: </b> <span id="demo"></span></label><br>
    <div id="slidecontainer">
      <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
    </div>

  </div>


  <div class="container" style="background-color:#f1f1f1">
      <button type="submit" style="width: 100px;">Submit</button>
  </div>
</form>





<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
var rate_field = document.getElementById("rate_value");
output.innerHTML = 3;

slider.oninput = function() {
  output.innerHTML = Math.round(this.value / 20);
  rate_field.value = Math.round(this.value / 20);
}
</script>


</body>
</html>
