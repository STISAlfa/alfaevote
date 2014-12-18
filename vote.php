
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
      <title>&alpha;-Voting</title>
    <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/vote.js"></script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/style2.css" type="text/css">
    <style type="text/css"> 

     @font-face {   font-family: 'Glyphicons Halflings';   
        src: url('/fonts/glyphicons-halflings-regular.eot');   
        src: url('/fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), 
        url('/fonts/glyphicons-halflings-regular.woff') format('woff'),  
        url('/fonts/glyphicons-halflings-regular.ttf') format('truetype'), 
        url('/fonts/glyphicons-halflings-regular.svg#glyphicons-halflingsregular') format('svg'); } 
    </style>
    
  </head>
  <body>
          
          <div class="span12" id="container2">
            <div><h1 class="panel-heading" > Calon Ketua SEMA STIS</h1><hr></div>
            <form role="form" >
                <label class="radio-inline" value="sema1">
                  <input type="radio" name="optradio"><div class="kotakcalon sema1">
                      <div class="img">
                          <img src="img/person_dummy.jpg" onclick="pilihsema(1)">
                          <div class="overlay"></div>
                      </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  VisiMisi
                </button>
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      </div>
                      <div class="modal-body">
                          <h3>Visi</h3>
                          <hr>
                          <ol>
                              <li>
                                  LOL
                              </li>
                              <li>
                                  LOL2
                              </li><li>
                                  LOL3
                              </li>
                          </ol>
                          <h3>Misi</h3>
                          <hr>
                          <ol>
                              <li>
                                  LOL
                              </li>
                              <li>
                                  LOL2
                              </li><li>
                                  LOL3
                              </li>
                          </ol>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div> 
            </div>
                </label>
                <label class="radio-inline" value="sema2">
                  <input type="radio" name="optradio"><div class="kotakcalon sema2">
                <img src="img/person_dummy.jpg" onclick="pilihsema(2)"><br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  VisiMisi
                </button>
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      </div>
                      <div class="modal-body">
                          <h3>Visi</h3>
                          <hr>
                          <ol>
                              <li>
                                  LOL
                              </li>
                              <li>
                                  LOL2
                              </li><li>
                                  LOL3
                              </li>
                          </ol>
                          <h3>Misi</h3>
                          <hr>
                          <ol>
                              <li>
                                  LOL
                              </li>
                              <li>
                                  LOL2
                              </li><li>
                                  LOL3
                              </li>
                          </ol>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div> 
            </div>
                </label>
            </form>  
          </div>
          <div class="span12" id="container2">
            <div><h1 class="panel-heading" > Calon Ketua Tingkat STIS</h1><hr></div>
            <form role="form" >
                <label class="radio-inline" value="sema1">
                  <input type="radio" name="optradio"><div class="kotakcalon tingkat1">
                <img src="img/person_dummy.jpg" onclick="pilihtingkat(1)"><br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  VisiMisi
                </button>
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      </div>
                      <div class="modal-body">
                          <h3>Visi</h3>
                          <hr>
                          <ol>
                              <li>
                                  LOL
                              </li>
                              <li>
                                  LOL2
                              </li><li>
                                  LOL3
                              </li>
                          </ol>
                          <h3>Misi</h3>
                          <hr>
                          <ol>
                              <li>
                                  LOL
                              </li>
                              <li>
                                  LOL2
                              </li><li>
                                  LOL3
                              </li>
                          </ol>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div> 
            </div>
                </label>
                <label class="radio-inline" value="sema2">
                  <input type="radio" name="optradio"><div class="kotakcalon tingkat2">
                <img src="img/person_dummy.jpg" onclick="pilihtingkat(2)"><br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  VisiMisi
                </button>
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      </div>
                      <div class="modal-body">
                          <h3>Visi</h3>
                          <hr>
                          <ol>
                              <li>
                                  LOL
                              </li>
                              <li>
                                  LOL2
                              </li><li>
                                  LOL3
                              </li>
                          </ol>
                          <h3>Misi</h3>
                          <hr>
                          <ol>
                              <li>
                                  LOL
                              </li>
                              <li>
                                  LOL2
                              </li><li>
                                  LOL3
                              </li>
                          </ol>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div> 
            </div>
                </label>
                <label class="radio-inline" value="sema2">
                  <input type="radio" name="optradio"><div class="kotakcalon tingkat3">
                <img src="img/person_dummy.jpg" onclick="pilihtingkat(3)"><br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  VisiMisi
                </button>
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      </div>
                      <div class="modal-body">
                          <h3>Visi</h3>
                          <hr>
                          <ol>
                              <li>
                                  LOL
                              </li>
                              <li>
                                  LOL2
                              </li><li>
                                  LOL3
                              </li>
                          </ol>
                          <h3>Misi</h3>
                          <hr>
                          <ol>
                              <li>
                                  LOL
                              </li>
                              <li>
                                  LOL2
                              </li><li>
                                  LOL3
                              </li>
                          </ol>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div> 
            </div>
                </label>
            </form> 
          </div>
          
          <div class="span12" id="container2">
              <form>
                  <button type="submit" class="btn-success btn-lg">SUBMIT</button>
              </form>
          </div>
    <footer id="foter">
        <b>&COPY;STISAlfa 2014</b>
    </footer>
  </body>
</html>
