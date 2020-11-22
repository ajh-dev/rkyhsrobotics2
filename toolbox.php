<?php
  print_r ($_POST);
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="main.css">
</head>
<body style = 'overflow-x: hidden;'>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <a class="navbar-brand" href="#">
                <img src="img/roboticsLogo.png" width="150">
              </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link text-light" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="#">Toolbox</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="#">Meeting Signup</a>
                </li>
              </ul>
          </nav>
    </header>
    <div class = "container-fluid h-100 text-center" style = 'background-color: white;'>
        <div class = 'row justify-content-center'>
            <h1 class = "display-1 text-center text-warning font-weight-light"> Toolbox </h1>
        </div>
        <div class = "row justify-content-center">
            <h1 class = "display-4 text-center text-warning font-weight-light">Item descriptions and pictures:</h1>
        </div>
        <div class="row justify-content-center">
          <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link bg-warning text-white" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Competition cube</a>
              <a class="nav-link bg-warning text-white" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Controller</a>
              <a class="nav-link bg-warning text-white" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Control console</a>
              <a class="nav-link bg-warning text-white" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Medium steel frame</a>
            </div>
          </div>
          <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active text-warning" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><img src = "img/IMG_4163.JPEG" width='120'> scbasdcilbsdafiluhsdfiuhsadfiouhasdfoiusadfhisaudfhsadioufhsadifuohsadfoiuhsdfiouhasdfoiuhsachsidohsaidouhisudoaasodih</div>
              <div class="tab-pane fade text-warning" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">asdchbasdchbasdchkjbasdchkbasdchkjbsadcubsadchkbasckjhsckjsdhcbusadcbaskdjchbsadcubhasdckjhscbusdcbksajdbsadcuysadbckjhsdcbs</div>
              <div class="tab-pane fade text-warning" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
              <div class="tab-pane fade text-warning" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
            </div>
          </div>
        </div>
        <div class = "row justify-content-center">
            <h1 class = "display-4 text-center text-warning font-weight-light">Please request your items below:</h1>
        </div>
        <form method='post'>
          <div class=' row justify-content-center w-50' style="margin: auto;">
            <h3 class = "text-center text-warning font-weight-light">Item 1</h3>
            <div class="input-group">
              <select class="custom-select bg-warning font-weight-light text-white" name="name1" style = 'font-size: 30px;'>
                <option>Select item...</option>
                <option value="1">First</option>
                <option value="2">Second</option>
                <option value="3">Third</option>
              </select>
            <div class="input-group-append">
              <select class="custom-select bg-warning font-weight-light text-white" name="quant1" style = 'font-size: 30px;'>
                <option>Item quantity...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
          </div>
          <div class=' row justify-content-center' style="margin: auto;">
            <h3 class = "text-center text-warning font-weight-light">Item 2</h3>
            <div class="input-group">
              <select class="custom-select bg-warning font-weight-light text-white" name="name2" style = 'font-size: 30px;'>
                <option>Select item...</option>
                <option value="1">First</option>
                <option value="2">Second</option>
                <option value="3">Third</option>
              </select>
            <div class="input-group-append">
              <select class="custom-select bg-warning font-weight-light text-white" name="quant2" style = 'font-size: 30px;'>
                <option>Item quantity...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
          </div>
          <div class=' row justify-content-center' style="margin: auto;">
            <h3 class = "text-center text-warning font-weight-light">Item 3</h3>
            <div class="input-group">
              <select class="custom-select bg-warning font-weight-light text-white" name="name3" style = 'font-size: 30px;'>
                <option>Select item...</option>
                <option value="1">First</option>
                <option value="2">Second</option>
                <option value="3">Third</option>
              </select>
            <div class="input-group-append">
              <select class="custom-select bg-warning font-weight-light text-white" name="quant3" style = 'font-size: 30px;'>
                <option>Item quantity...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
          </div>
          <div class=' row justify-content-center' style="margin: auto;">
            <h3 class = "text-center text-warning font-weight-light">Item 4</h3>
            <div class="input-group">
              <select class="custom-select bg-warning font-weight-light text-white" name="name4" style = 'font-size: 30px;'>
                <option>Select item...</option>
                <option value="1">First</option>
                <option value="2">Second</option>
                <option value="3">Third</option>
              </select>
            <div class="input-group-append">
              <select class="custom-select bg-warning font-weight-light text-white" name="quant4" style = 'font-size: 30px;'>
                <option>Item quantity...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
          </div>
          <div class=' row justify-content-center' style="margin: auto;">
            <h3 class = "text-center text-warning font-weight-light">Item 5</h3>
            <div class="input-group">
              <select class="custom-select bg-warning font-weight-light text-white" name="name5" style = 'font-size: 30px;'>
                <option>Select item...</option>
                <option value="1">First</option>
                <option value="2">Second</option>
                <option value="3">Third</option>
              </select>
            <div class="input-group-append">
              <select class="custom-select bg-warning font-weight-light text-white" name="quant5" style = 'font-size: 30px;'>
                <option>Item quantity...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
          </div>
          <div class=' row justify-content-center' style="margin: auto;">
            <h3 class = "text-center text-warning font-weight-light">Item 6</h3>
            <div class="input-group">
              <select class="custom-select bg-warning font-weight-light text-white" name="name6" style = 'font-size: 30px;'>
                <option>Select item...</option>
                <option value="1">First</option>
                <option value="2">Second</option>
                <option value="3">Third</option>
              </select>
            <div class="input-group-append">
              <select class="custom-select bg-warning font-weight-light text-white" name="quant6" style = 'font-size: 30px;'>
                <option>Item quantity...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
          </div>
          <div class=' row justify-content-center' style="margin: auto;">
            <h3 class = "text-center text-warning font-weight-light">Item 7</h3>
            <div class="input-group">
              <select class="custom-select bg-warning font-weight-light text-white" name="name7" style = 'font-size: 30px;'>
                <option>Select item...</option>
                <option value="1">First</option>
                <option value="2">Second</option>
                <option value="3">Third</option>
              </select>
            <div class="input-group-append">
              <select class="custom-select bg-warning font-weight-light text-white" name="quant7" style = 'font-size: 30px;'>
                <option>Item quantity...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
          </div>
          <div class=' row justify-content-center' style="margin: auto;">
            <h3 class = "text-center text-warning font-weight-light">Item 8</h3>
            <div class="input-group">
              <select class="custom-select bg-warning font-weight-light text-white" name="name8" style = 'font-size: 30px;'>
                <option>Select item...</option>
                <option value="1">First</option>
                <option value="2">Second</option>
                <option value="3">Third</option>
              </select>
            <div class="input-group-append">
              <select class="custom-select bg-warning font-weight-light text-white" name="quant8" style = 'font-size: 30px;'>
                <option>Item quantity...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
          </div>
          <div class=' row justify-content-center' style="margin: auto;">
            <h3 class = "text-center text-warning font-weight-light">Item 9</h3>
            <div class="input-group">
              <select class="custom-select bg-warning font-weight-light text-white" name="name9" style = 'font-size: 30px;'>
                <option>Select item...</option>
                <option value="1">First</option>
                <option value="2">Second</option>
                <option value="3">Third</option>
              </select>
            <div class="input-group-append">
              <select class="custom-select bg-warning font-weight-light text-white" name="quant9" style = 'font-size: 30px;'>
                <option>Item quantity...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
          </div>
          <div class=' row justify-content-center w-100' style="margin: auto;">
            <h3 class = "text-center text-warning font-weight-light">Item 10</h3>
            <div class="input-group">
              <select class="custom-select bg-warning font-weight-light text-white" name="name10" style = 'font-size: 30px;'>
                <option>Select item...</option>
                <option value="1">First</option>
                <option value="2">Second</option>
                <option value="3">Third</option>
              </select>
            <div class="input-group-append">
              <select class="custom-select bg-warning font-weight-light text-white" name="quant10" style = 'font-size: 30px;'>
                <option>Item quantity...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
          </div>
            <div class='input-group justify-content-center mt-3'>
              <input class="btn btn-warning w-25 mt-3" type="submit" name='submit' value="Submit" style = 'font-size: 25px;'>
            </div>
          </form>
        </div>
      </div>
    <footer>
        <div class = 'container-fluid' style = 'background-color: white'>
            <h1 class = 'display-4 text-center text-warning font-weight-light'>Contact Us!</h1>
            <p class = 'text-center text-warning font-weight-light' style = 'font-size: large;'>Email: rkyhsrobotics@gmail.com</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
