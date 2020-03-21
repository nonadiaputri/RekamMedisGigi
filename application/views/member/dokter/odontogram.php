  <!DOCTYPE html>
    <html>
    <head>
      <title></title>
      <script src="<?php echo base_url();?>assets/member/odontograma_archivos/jquery-1.js" type="text/javascript"></script>
      <script src="<?php echo base_url();?>assets/member/odontograma_archivos/jquery.js" type="text/javascript"></script>
      <script src="<?php echo base_url();?>assets/member/odontograma_archivos/jquery_002.js" type="text/javascript"></script>
      <script src="<?php echo base_url();?>assets/member/odontograma_archivos/jquery_004.js" type="text/javascript"></script>
      <script src="<?php echo base_url();?>assets/member/odontograma_archivos/jquery_003.js" type="text/javascript"></script>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toth</title>
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url();?>assets/member/css/base.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/member/tools/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/member/table.css">
    </head>
    <body>
         <!-- Main content -->
            <section class="content-header">
        <h1>
          Data Odontogram
        </h1>
        <ol class="breadcrumb">
          <li><i class="fa fa-user"></i>
            <?php 
            foreach ($pasien as $key) {
              echo $key->nama; ?>
            </a></li>
          <li>nomor pasien : <?php echo $key->id_pasien; ?></a></li>
          <?php } ?>
        </ol>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
              <!-- </div> -->
             <form class="form-horizontal" id="frm3" align="center">
                              <table align="center">
                                <tbody id="content_odon">
                                  <tr>
                                    <td colspan="2">
                                          <div id="message" style="height:20px">
                                          </div>
                                    </td>
                                  </tr>
                                    <tr>
                                      <td>
                                        <div style="line-height:37px;height:37px;">
                                          Odontogram
                                          <span id="tanggal"></span>
                                        </div>
                                        <div id="svgselect" style="width: 610px; height: 300px;"> <!-- background-color:red -->
                                          <svg version="1.1" height="100%" width="100%">
                                            <g transform="scale(1.5)" id="gmain">
                                              <g id="18" onclick="add(gigi,kondisi,posisi)">
                                                <polygon onclick="add(gigi,kondisi,posisi)" points="0,10  20,10  15,15  5,15" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon onclick="add(gigi,kondisi,posisi)" points="5,25   15,25   20,30   0,30" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1" class="B18"></polygon>
                                                <polygon onclick="add(gigi,kondisi,posisi)" points="15,15   20,10  20,30   15,25" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon onclick="add(gigi,kondisi,posisi)" points="0,10  5,15   5,25  0,30" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <polygon onclick="add(gigi,kondisi,posisi)" points="5,15  15,15  15,25   5,25" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <text x="6" y="47" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">18</text>
                                              </g>
                                              <g id="17" transform="translate(25,0)">
                                                <polygon points="0,10  20,10  15,15  5,15" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,25   15,25   20,30   0,30" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1" class="B18"></polygon>
                                                <polygon points="15,15   20,10  20,30   15,25" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,10  5,15   5,25  0,30" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <polygon points="5,15  15,15  15,25   5,25" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <text x="6" y="47" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">17</text>
                                              </g>
                                              <g id="16" transform="translate(50,0)">
                                                <polygon points="0,10  20,10  15,15  5,15" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,25   15,25   20,30   0,30" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1" class="B18"></polygon>
                                                <polygon points="15,15   20,10  20,30   15,25" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,10  5,15   5,25  0,30" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <polygon points="5,15  15,15  15,25   5,25" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <text x="6" y="47" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">16</text>
                                              </g>
                                              <g id="15" transform="translate(75,0)">
                                                <polygon points="0,10  20,10  15,15  5,15" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,25   15,25   20,30   0,30" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1" class="B18"></polygon>
                                                <polygon points="15,15   20,10  20,30   15,25" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,10  5,15   5,25  0,30" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <polygon points="5,15  15,15  15,25   5,25" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <text x="6" y="47" stroke="navy" fill="navy"  stroke-width="0.1" style="font-size: 6pt;font-weight:normal">15</text>
                                              </g>
                                              <g id="14" transform="translate(100,0)">
                                                <polygon points="0,10  20,10  15,15  5,15" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,25   15,25   20,30   0,30" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1" class="B18"></polygon>
                                                <polygon points="15,15   20,10  20,30   15,25" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,10  5,15   5,25  0,30" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <polygon points="5,15  15,15  15,25   5,25" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <text x="6" y="47" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">14</text>
                                              </g>
                                              <g id="13" transform="translate(125,0)">
                                                <polygon points="0,10  20,10  15,20  5,20" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,20   15,20   20,30   0,30" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1" class="B18"></polygon>
                                                <polygon points="15,20   20,10  20,30" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,10  5,20  0,30" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="47" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">13</text>
                                              </g>
                                              <g id="12" transform="translate(150,0)">
                                                <polygon points="0,10  20,10  15,20  5,20" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,20   15,20   20,30   0,30" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1" class="B18"></polygon>
                                                <polygon points="15,20   20,10  20,30" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,10  5,20  0,30" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="47" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">12</text>
                                              </g>
                                              <g id="11" transform="translate(175,0)">
                                                <polygon points="0,10  20,10  15,20  5,20" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,20 15,20   20,30   0,30" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1" class="B18"></polygon>
                                                <polygon points="15,20   20,10  20,30" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,10  5,20  0,30" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="47" stroke="navy" fill="navy"  stroke-width="0.1" style="font-size: 6pt;font-weight:normal">11</text>
                                              </g>
                                              
                                              <!-- Izquierda segunda fila -->
                                          
                                              <g id="55" transform="translate(75,40)">
                                                <polygon points="5,22  15,22  15,32   5,32" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <polygon points="0,17 20,17  15,22  5,22" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,32   15,32   20,37   0,37" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,22   20,17  20,37   15,32" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,17  5,22   5,32  0,37" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="54" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">55</text>
                                              </g>
                                              <g id="54" transform="translate(100,40)">
                                                 <polygon points="5,22  15,22  15,32   5,32" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <polygon points="0,17 20,17  15,22  5,22" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,32   15,32   20,37   0,37" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,22   20,17  20,37   15,32" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,17  5,22   5,32  0,37" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="54" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">54</text>
                                              </g>
                                              <g id="53" transform="translate(125,40)">
                                                 <polygon points="0,17 20,17  15,27  5,27" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,27   15,27   20,37   0,37" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,27   20,17  20,37" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,17  5,27  0,37" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="54" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">53</text>
                                              </g>
                                              <g id="52" transform="translate(150,40)">
                                                 <polygon points="0,17 20,17  15,27  5,27" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,27   15,27   20,37   0,37" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,27   20,17  20,37" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,17  5,27  0,37" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="54" stroke="navy" fill="navy"stroke-width="0.1" style="font-size: 6pt;font-weight:normal">52</text>
                                              </g>
                                              <g id="51" transform="translate(175,40)">
                                                <polygon points="0,17 20,17  15,27  5,27" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,27   15,27   20,37   0,37" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,27   20,17  20,37" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,17  5,27  0,37" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="54" stroke="navy" fill="navy"stroke-width="0.1" style="font-size: 6pt;font-weight:normal">51</text>
                                              </g>
                                          
                                              <!-- Izquierda tercer fila -->
                                          
                                              <g id="85" transform="translate(75,80)">
                                                <polygon points="5,29  15,29  15,39   5,39" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <polygon points="0,24 20,24  15,29  5,29" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,39   15,39   20,44   0,44" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,29   20,24  20,44   15,39" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,24  5,29   5,39  0,44" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="61" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">85</text>
                                              </g>
                                              <g id="84" transform="translate(100,80)">
                                                <polygon points="5,29  15,29  15,39   5,39" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <polygon points="0,24 20,24  15,29  5,29" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,39   15,39   20,44   0,44" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,29   20,24  20,44   15,39" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,24  5,29   5,39  0,44" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="61" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">84</text>
                                              </g>
                                              <g id="83" transform="translate(125,80)">
                                                <polygon points="0,24 20,24  15,34  5,34" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,34   15,34   20,44   0,44" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,34   20,24  20,44" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,24  5,34  0,44" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="61" stroke="navy" fill="navy"stroke-width="0.1" style="font-size: 6pt;font-weight:normal">83</text>
                                              </g>
                                              <g id="82" transform="translate(150,80)">
                                                <polygon points="0,24 20,24  15,34  5,34" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,34   15,34   20,44   0,44" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,34   20,24  20,44" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,24  5,34  0,44" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="61" stroke="navy" fill="navy"stroke-width="0.1" style="font-size: 6pt;font-weight:normal">82</text>
                                              </g>
                                              <g id="81" transform="translate(175,80)">
                                                <polygon points="0,24 20,24  15,34  5,34" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,34   15,34   20,44   0,44" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,34   20,24  20,44" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,24  5,34  0,44" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="61" stroke="navy" fill="navy"stroke-width="0.1" style="font-size: 6pt;font-weight:normal">81</text>
                                              </g>
                                          
                                              <!-- Izquierda cuarta fila -->
                                          
                                              <g id="48" transform="translate(0,120)">
                                                <polygon points="5,36  15,36  15,46   5,46" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <polygon points="0,31 20,31  15,36  5,36" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,46   15,46   20,51   0,51" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,36   20,31  20,51   15,46" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,31  5,36   5,46  0,51" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="68" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">48</text>
                                              </g>
                                              <g id="47" transform="translate(25,120)">
                                                <polygon points="5,36  15,36  15,46   5,46" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <polygon points="0,31 20,31  15,36  5,36" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,46   15,46   20,51   0,51" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,36   20,31  20,51   15,46" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,31  5,36   5,46  0,51" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="68" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">47</text>
                                              </g>
                                              <g id="46" transform="translate(50,120)">
                                                <polygon points="5,36  15,36  15,46   5,46" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <polygon points="0,31 20,31  15,36  5,36" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,46   15,46   20,51   0,51" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,36   20,31  20,51   15,46" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,31  5,36   5,46  0,51" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="68" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">46</text>
                                              </g>
                                              <g id="45" transform="translate(75,120)">
                                                <polygon points="5,36  15,36  15,46   5,46" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <polygon points="0,31 20,31  15,36  5,36" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,46   15,46   20,51   0,51" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,36   20,31  20,51   15,46" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,31  5,36   5,46  0,51" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="68" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">45</text>
                                              </g>
                                              <g id="44" transform="translate(100,120)">
                                                <polygon points="5,36  15,36  15,46   5,46" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <polygon points="0,31 20,31  15,36  5,36" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,46   15,46   20,51   0,51" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,36   20,31  20,51   15,46" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,31  5,36   5,46  0,51" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="68" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">44</text>
                                              </g>
                                              <g id="43" transform="translate(125,120)">
                                                <polygon points="0,31 20,31  15,41  5,41" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,41   15,41   20,51   0,51" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,41   20,31  20,51" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,31  5,41  0,51" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="68" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">43</text>
                                              </g>
                                              <g id="42" transform="translate(150,120)">
                                                <polygon points="0,31 20,31  15,41  5,41" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,41   15,41   20,51   0,51" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,41   20,31  20,51" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,31  5,41  0,51" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="68" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">42</text>
                                              </g>
                                              <g id="41" transform="translate(175,120)">
                                                <polygon points="0,31 20,31  15,41  5,41" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,41   15,41   20,51   0,51" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,41   20,31  20,51" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,31  5,41  0,51" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="68" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">41</text>
                                              </g>
                                              
                                              <!-- Derecha primer fila -->
                                              
                                              <g id="21" transform="translate(210,0)">
                                                <polygon points="0,10  20,10  15,20  5,20" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,20   15,20   20,30   0,30" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1" class="B18"></polygon>
                                                <polygon points="15,20   20,10  20,30" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,10  5,20  0,30" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="47" stroke="navy" fill="navy"  stroke-width="0.1" style="font-size: 6pt;font-weight:normal">21</text>
                                              </g>
                                              <g id="22" transform="translate(235,0)">
                                                <polygon points="0,10  20,10  15,20  5,20" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,20   15,20   20,30   0,30" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1" class="B18"></polygon>
                                                <polygon points="15,20   20,10  20,30" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,10  5,20  0,30" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="47" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">22</text>
                                              </g>
                                              <g id="23" transform="translate(260,0)">
                                                <polygon points="0,10  20,10  15,20  5,20" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,20   15,20   20,30   0,30" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1" class="B18"></polygon>
                                                <polygon points="15,20   20,10  20,30" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,10  5,20  0,30" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="47" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">23</text>
                                              </g>
                                              <g id="24" transform="translate(285,0)">
                                                <polygon points="0,10  20,10  15,15  5,15" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,25   15,25   20,30   0,30" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1" class="B18"></polygon>
                                                <polygon points="15,15   20,10  20,30   15,25" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,10  5,15   5,25  0,30" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <polygon points="5,15  15,15  15,25   5,25" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <text x="6" y="47" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">24</text>
                                              </g>
                                              <g id="25" transform="translate(310,0)">
                                                <polygon points="0,10  20,10  15,15  5,15" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,25   15,25   20,30   0,30" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1" class="B18"></polygon>
                                                <polygon points="15,15   20,10  20,30   15,25" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,10  5,15   5,25  0,30" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <polygon points="5,15  15,15  15,25   5,25" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <text x="6" y="47" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">25</text>
                                              </g>
                                              <g id="26" transform="translate(335,0)">
                                                <polygon points="0,10  20,10  15,15  5,15" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,25   15,25   20,30   0,30" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1" class="B18"></polygon>
                                                <polygon points="15,15   20,10  20,30   15,25" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,10  5,15   5,25  0,30" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <polygon points="5,15  15,15  15,25   5,25" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <text x="6" y="47" stroke="navy" fill="navy"  stroke-width="0.1" style="font-size: 6pt;font-weight:normal">26</text>
                                              </g>
                                              <g id="27" transform="translate(360,0)">
                                                <polygon points="0,10  20,10  15,15  5,15" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,25   15,25   20,30   0,30" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1" class="B18"></polygon>
                                                <polygon points="15,15   20,10  20,30   15,25" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,10  5,15   5,25  0,30" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <polygon points="5,15  15,15  15,25   5,25" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <text x="6" y="47" stroke="navy" fill="navy"  stroke-width="0.1" style="font-size: 6pt;font-weight:normal">27</text>
                                              </g>
                                              <g id="28" transform="translate(385,0)">
                                                <polygon points="0,10  20,10  15,15  5,15" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,25   15,25   20,30   0,30" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1" class="B18"></polygon>
                                                <polygon points="15,15   20,10  20,30   15,25" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,10  5,15   5,25  0,30" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <polygon points="5,15  15,15  15,25   5,25" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <text x="6" y="47" stroke="navy" fill="navy"  stroke-width="0.1" style="font-size: 6pt;font-weight:normal">28</text>
                                              </g>
                                              
                                              <!-- Derecha segunda fila -->
                                              
                                              <g id="61" transform="translate(210,40)">
                                                <polygon points="0,17 20,17  15,27  5,27" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,27   15,27   20,37   0,37" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,27   20,17  20,37" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,17  5,27  0,37" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="54" stroke="navy" fill="navy"stroke-width="0.1" style="font-size: 6pt;font-weight:normal">61</text>
                                              </g>
                                              <g id="62" transform="translate(235,40)">
                                                <polygon points="0,17 20,17  15,27  5,27" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,27   15,27   20,37   0,37" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,27   20,17  20,37" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,17  5,27  0,37" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="54" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">62</text>
                                              </g>
                                              <g id="63" transform="translate(260,40)">
                                                <polygon points="0,17 20,17  15,27  5,27" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,27   15,27   20,37   0,37" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,27   20,17  20,37" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,17  5,27  0,37" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="54" stroke="navy" fill="navy"stroke-width="0.1" style="font-size: 6pt;font-weight:normal">63</text>
                                              </g>
                                              <g id="64" transform="translate(285,40)">
                                                <polygon points="5,22  15,22  15,32   5,32" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <polygon points="0,17 20,17  15,22  5,22" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,32   15,32   20,37   0,37" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,22   20,17  20,37   15,32" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,17  5,22   5,32  0,37" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="54" stroke="navy" fill="navy"stroke-width="0.1" style="font-size: 6pt;font-weight:normal">64</text>
                                              </g>
                                              <g id="65" transform="translate(310,40)">
                                                <polygon points="5,22  15,22  15,32   5,32" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <polygon points="0,17 20,17  15,22  5,22" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,32   15,32   20,37   0,37" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,22   20,17  20,37   15,32" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,17  5,22   5,32  0,37" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="54" stroke="navy" fill="navy"stroke-width="0.1" style="font-size: 6pt;font-weight:normal">65</text>
                                              </g>
                                              
                                              <!-- Derecha tercer fila -->
                                              
                                              <g id="71" transform="translate(210,80)">
                                                <polygon points="0,24 20,24  15,34  5,34" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,34   15,34   20,44   0,44" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,34   20,24  20,44" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,24  5,34  0,44" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="61" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">71</text>
                                              </g>
                                              <g id="72" transform="translate(235,80)">
                                                <polygon points="0,24 20,24  15,34  5,34" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,34   15,34   20,44   0,44" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,34   20,24  20,44" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,24  5,34  0,44" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="61" stroke="navy" fill="navy"stroke-width="0.1" style="font-size: 6pt;font-weight:normal">72</text>
                                              </g>
                                              <g id="73" transform="translate(260,80)">
                                                <polygon points="0,24 20,24  15,34  5,34" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,34   15,34   20,44   0,44" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,34   20,24  20,44" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,24  5,34  0,44" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="61" stroke="navy" fill="navy"stroke-width="0.1" style="font-size: 6pt;font-weight:normal">73</text>
                                              </g>
                                              <g id="74" transform="translate(285,80)">
                                                <polygon points="5,29  15,29  15,39   5,39" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <polygon points="0,24 20,24  15,29  5,29" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,39   15,39   20,44   0,44" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,29   20,24  20,44   15,39" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,24  5,29   5,39  0,44" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="61" stroke="navy" fill="navy"stroke-width="0.1" style="font-size: 6pt;font-weight:normal">74</text>
                                              </g>
                                              <g id="75" transform="translate(310,80)">
                                                <polygon points="5,29  15,29  15,39   5,39" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <polygon points="0,24 20,24  15,29  5,29" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,39   15,39   20,44   0,44" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,29   20,24  20,44   15,39" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,24  5,29   5,39  0,44" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="61" stroke="navy" fill="navy"stroke-width="0.1" style="font-size: 6pt;font-weight:normal">75</text>
                                              </g>
                                              
                                              <!-- Derecha cuarta fila -->
                                              
                                              <g id="31" transform="translate(210,120)">
                                                <polygon points="0,31 20,31  15,41  5,41" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,41   15,41   20,51   0,51" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,41   20,31  20,51" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,31  5,41  0,51" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="68" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">31</text>
                                              </g>
                                              <g id="32" transform="translate(235,120)">
                                                <polygon points="0,31 20,31  15,41  5,41" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,41   15,41   20,51   0,51" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,41   20,31  20,51" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,31  5,41  0,51" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="68" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">32</text>
                                              </g>
                                              <g id="33" transform="translate(260,120)">
                                                <polygon points="0,31 20,31  15,41  5,41" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,41   15,41   20,51   0,51" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,41   20,31  20,51" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,31  5,41  0,51" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="68" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">33</text>
                                              </g>
                                              <g id="34" transform="translate(285,120)">
                                                <polygon points="5,36  15,36  15,46   5,46" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <polygon points="0,31 20,31  15,36  5,36" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,46   15,46   20,51   0,51" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,36   20,31  20,51   15,46" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,31  5,36   5,46  0,51" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="68" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">34</text>
                                              </g>
                                              <g id="35" transform="translate(310,120)">
                                                <polygon points="5,36  15,36  15,46   5,46" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <polygon points="0,31 20,31  15,36  5,36" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,46   15,46   20,51   0,51" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,36   20,31  20,51   15,46" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,31  5,36   5,46  0,51" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="68" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">35</text>
                                              </g>
                                              <g id="36" transform="translate(335,120)">
                                                <polygon points="5,36  15,36  15,46   5,46" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <polygon points="0,31 20,31  15,36  5,36" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,46   15,46   20,51   0,51" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,36   20,31  20,51   15,46" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,31  5,36   5,46  0,51" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="68" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">36</text>
                                              </g>
                                              <g id="37" transform="translate(360,120)">
                                                <polygon points="5,36  15,36  15,46   5,46" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <polygon points="0,31 20,31  15,36  5,36" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,46   15,46   20,51   0,51" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,36   20,31  20,51   15,46" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,31  5,36   5,46  0,51" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="68" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">37</text>
                                              </g>
                                              <g id="38" transform="translate(385,120)">
                                                <polygon points="5,36  15,36  15,46   5,46" fill="white" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
                                                <polygon points="0,31 20,31  15,36  5,36" fill="white" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
                                                <polygon points="5,46   15,46   20,51   0,51" fill="white" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
                                                <polygon points="15,36   20,31  20,51   15,46" fill="white" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
                                                <polygon points="0,31  5,36   5,46  0,51" fill="white" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
                                                <text x="6" y="68" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">38</text>
                                              </g>
                                            </g>
                                          </svg>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td rowspan="2" valign="top">
                                        <div style="line-height:30px;height:30px;">
                                          Gigi
                                        </div>
                                        <div id="detail">
                                          <span id="nomorgigi">XX</span>
                                          -
                                          <span id="bagian">X</span>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                            <div class="form-group">
                            <div class="col-sm-10">
                            <input type="hidden" class="form-control" name="id_pasien" id="id_pasien2">    
                          </div>
                        </div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label">Keadaan Gigi</label>
                      <div class="col-sm-2">
                        <select id="keadaan_gigi" class="form-control">
                          <option disabled selected value>pilih</option>
                          <option value="nvt">nvt</option>
                          <option value="non">non</option>
                          <option value="une">une</option>
                          <option value="pre">pre</option>
                          <option value="ano">ano</option>
                          <option value="car">car</option>
                          <option value="cfr">cfr</option>
                          <option value="rrx">rrx</option>
                          <option value="mis">mis</option>
                          <option value="sou">sou</option>
                          <option value="imv">imv</option>
                          <option value="dia">dia</option>
                          <option value="att">att</option>
                          <option value="abr">abr</option>
                        </select>
                        </div>
                      
                      <label class="col-sm-2 control-label">Restorasi</label>
                      <div class="col-sm-2">
                        <select id="restorasi" class="form-control">
                          <option disabled selected value>pilih</option>
                          <option value="poc">poc</option>
                          <option value="fmc">fmc</option>
                          <option value="meb">meb</option>
                          <option value="pob">pob</option>
                          <option value="rct">rct</option>
                          <option value="ipx">ipx</option>
                          <option value="mpc">mpc</option>
                          <option value="gmc">gmc</option>
                          <option value="pon">pon</option>
                          <option value="abu">abu</option>    
                        </select>
                        </div>
                      </div>

                      <div class="form-group">
                      <label class="col-sm-2 control-label">Bahan Restorasi</label>
                      <div class="col-sm-2">
                        <select id="bhn_restorasi" class="form-control">
                          <option disabled selected value>pilih</option>
                          <option value="amf">amf</option>
                          <option value="gif">gif</option>
                          <option value="cof">cof</option>
                          <option value="fis">fis</option>
                          <option value="inl">inl</option>
                          <option value="logammulia">logam mulia</option>
                        </select>
                        </div>

                      <label class="col-sm-2 control-label">Protesa</label>
                      <div class="col-sm-2">
                        <select id="protesa" class="form-control">
                          <option disabled selected value>pilih</option>     
                          <option value="prd">prd</option>
                          <option value="fld">fld</option>
                          <option value="acr">acr</option>
                        </select>
                        </div>

                        
                      </div>

                      <div class="col-sm-10">
                      <input type="hidden" class="form-control" id="pencatat" name="pencatat" value="<?php echo $this->session->userdata('id_staff'); ?>">
                      </div>
                    </form>

                      <div id="btn-show" class="form-group" style="display: none;" align="center">
                        <button class="btn-primary" id="btn-selesai" data-toggle="modal" data-target="#redirect-perawatan">Selesai</button>
                      </div>

                      
                      </div>
                    </div>
                     
                    <?php 
                    foreach ($pasien as $key ) { 
                    $id_pas=$key->id_pasien;
                    } ?>


      <div class="row" style="padding: 0px 10px 10px 10px;" align="center">
        <div class="col-md-6">
          <button class="btn-primary" id="btn-tmbh" data-toggle="modal" data-target="#tambah_odontogram" style="float: center; padding: 10px 10px 10px 10px;">Tambah Odontogram</button>
        </div>
        <div class="col-md-6">
            <a href="<?php echo base_url('c_dokter/buat_baru/').$key->id_pasien;?>">
              <button id="btn-buat" class="btn-primary" style="float: center; padding: 10px 10px 10px 10px;">Buat Odontogram Baru</button>
          </a>
        </div>
      </div>

      <div class="row">
          <div class="col-xs-12">
            <div class="box" style="background:#c6d7ef ">
              <div class="box-header">
                <div class="box-body">
            
            <!-- /.box-header -->
            <div class="row">
              <div class="col-md-4">
                <div class="box">
                <div class="box-body">
                  <table id="tablekunjungan" class="table table-bordered table-hover" style="width: 100%; float: right;">
                    <tr>
                      <th style="width: 10px">No.</th>
                      <th style="width: 10px">Odontogram</th>
                      <th style="width: 10px">Kunjungan</th>
                      <th style="width: 30px">Dokter</th>
                    </tr>
                    <tr>    
                    </tr>
                  </table>
                </div>
                <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
                </div>
              </div>

          <div class="col-md-6 table-responsive">
                <div class="box">
                <div class="box-body">
                  <table id="tb-data" class="table table-striped" style="width: 100%; float: right;" >
                    <thead>
                    <tr>
                      <th style="width: 20%;text-align:center;">Data</th>
                      <th style="width: 30%;text-align:center;">Keterangan</th>
                      <th style="width: 30%;text-align:center;">Description</th>
                    </tr>
                    </thead>
                    <tr>
                      <td>Occlusi</td>
                      <td id="occlusi"></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Torus Palatinus</td>
                      <td id="torus_palatinus"></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Torus Mandibularis</td>
                      <td id="torus_mandibularis"></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Palatum</td>
                      <td id="palatum"></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Diastema</td>
                      <td id="diastema"></td>
                      <td id="ket1"></td>
                    </tr>
                    <tr>
                      <td>Gigi Anomali</td>
                      <td id="gigi_anomali"></td>
                      <td id="ket2"></td>
                    </tr>
                    <tr>
                      <td>Lain-lain</td>
                      <td id="lainnya"></td>
                      <td></td>
                    </tr>
                  </table>
                </div>
                <div class="box-footer clearfix">
                  <p>D : <span id="decay"> </span></p>
                  <p>M : <span id="missing"> </span></p>
                  <p>F : <span id="fill"> </span></p>
                  <button class="btn-success" id="btn-edit" data-toggle="modal" style="float: right; padding: 5px 10px 5px 10px;">Edit</button>
                </div>
                </div>
                </div>
              </div>

          
              

              
            <!-- /.box-body -->
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-body">
              <table id="tabb" class="table table-bordered" style="width: 100%; float: left; border: 1px solid black; border-collapse: collapse;">
                <tr>
                  <thead>
                    <th style="width: 10%;text-align:center;">Gigi</th>
                    <th style="width: 40%;text-align:center;">Kondisi</th>
                  </thead>
                </tr>
                <tbody>
                        <?php
                        for ($r =11, $k=51;$r <= 18; $r++, $k++){    
                          ?>
                        <tr id="P<?php echo $r;?>">
                          <td><?php echo $r; ?>   
                            <?php 
                            if ($k > 50 && $k < 56){ ?>
                              <span id="P<?php echo $k;?>"> 
                                <?php echo '['.$k.']'; ?> </span> 
                            <?php }
                            ?>
                          </td>
                          <td style="text-align:left;">
                            <span id="kondisigigi"></span>
                          </td>
                        </tr>
                      <?php   } ?>
                      </tbody>
              </table>
            </div>
            </div>
          </div>
      <!--   </div> -->

       <div class="col-md-6">
          <div class="box">
            <div class="box-body">
              <table id="tabb" class="table table-bordered" style="width: 100%; float: right; border: 1px solid black; border-collapse: collapse;">
                <tr>
                  <thead>
                    <th style="width: 10%;text-align:center;">Gigi</th>
                    <th style="width: 40%;text-align:center;">Kondisi</th>
                  </thead>
                </tr>
                <tbody>
                       <?php
                        for ($r =21, $k=61;$r <= 28; $r++, $k++){    
                          ?>
                        <tr id="P<?php echo $r;?>">
                          <td><?php echo $r; ?>   
                            <?php 
                            if ($k > 60 && $k < 66){ ?>
                              <span id="P<?php echo $k;?>">
                               <?php echo '['.$k.']'; ?> </span> 
                            <?php }
                            ?>
                          </td>
                          <td style="text-align:left;">
                            <span id="kondisigigi"></span>
                          </td>
                        </tr>
                      <?php } ?>
                      </tbody>
              </table>
            </div>
            </div>
        </div>
      <!-- </div> -->

      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-body">
              <table id="tabb" class="table table-bordered" style="width: 100%; float: left; border: 1px solid black; border-collapse: collapse;">
                <tr>
                  <thead>
                    <th style="width: 10%; text-align:center;">Gigi</th>
                    <th style="width: 40%; text-align:center;">Kondisi</th>
                  </thead>
                </tr>
                <tbody>
                       <?php
                        for ($r =41, $k=81;$r <= 48; $r++, $k++){    
                          ?>
                        <tr id="P<?php echo $r;?>">
                          <td><?php echo $r; ?>   
                            <?php 
                            if ($k > 80 && $k < 86){ ?>
                              <span id="P<?php echo $k;?>"> 
                                <?php echo '['.$k.']'; ?> </span> 
                            <?php }
                            ?>
                          </td>
                          <td style="text-align:left;">
                            <span id="kondisigigi"></span>
                          </td>
                        </tr>
                      <?php } ?>
                      </tbody>
              </table>
            </div>
            </div>
        </div>
      <!--   </div> -->

       <div class="col-md-6">
          <div class="box">
            <div class="box-body">
              <table id="tabb" class="table table-bordered" style="width: 100%; float: right; border: 1px solid black; border-collapse: collapse;">
                <tr>
                  <thead>
                    <th style="width: 10%;text-align:center;">Gigi</th>
                    <th style="width: 40%;text-align:center;">Kondisi</th>
                  </thead>
                </tr>
                <tbody>
                        <?php
                        for ($r =31, $k=71;$r <= 38; $r++, $k++){    
                          ?>
                        <tr id="P<?php echo $r;?>">
                          <td><?php echo $r; ?>   
                            <?php 
                            if ($k > 70 && $k < 76){ ?>
                              <span id="P<?php echo $k;?>">
                               <?php echo '['.$k.']'; ?> </span> 
                            <?php }
                            ?>
                          </td>
                          <td style="text-align: left;">
                            <span id="kondisigigi"></span>
                          </td>
                        </tr>
                      <?php } ?>
                      </tbody>
              </table>
            </div>
            </div>
        </div>
      </div>


            <!-- /.box-body -->
                 
      <!-- Modal Isi Keluhan -->
  <div class="modal fade" id="tambah_odontogram" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #4787ef">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Isi Keluhan Pasien</h4>
        </div>
        <div class="modal-body">
            <input type="textarea" id="keluhan" name="keluhan" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="float: left;">Lihat Odontogram</button>
          <button type="button" id="btn-keluhan" class="btn btn-default">Simpan</button>
        </div>
      </div>
    </div>
  </div>

      <!-- Modal Edit -->
  <div class="modal fade" id="edit" role="dialog" data-backdrop="static">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #4787ef">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Edit</h4>
        </div>
        <div class="modal-body">
          <form id="form2">
          <div class="form-group">
            <label for="inputSkills">Oclusi</label>
            <select id="os" class="form-control" name="occlusi">
              <option disabled selected value>pilih</option>
              <option value="normal bite">Normal Bite</option>
              <option value="cross bite">Cross Bite</option>
              <option value="steep bite">Steep Bite</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputSkills">Torus Palatinus</label>
            <select id="tps" class="form-control" name="torus_palatinus">
              <option disabled selected value>pilih</option>
              <option value="tidak ada">Tidak Ada</option>
              <option value="kecil">Kecil</option>
              <option value="sedang">Sedang</option>
              <option value="besar">Besar</option>
              <option value="multiple">Multilpe</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputSkills" >Torus Mandibularis</label>
            <select id="tms" class="form-control" name="torus_mandibularis">
              <option disabled selected value>pilih</option>
              <option value="tidak ada">Tidak Ada</option>
              <option value="sisi kiri">Sisi Kiri</option>
              <option value="sisi kanan">Sisi Kanan</option>
              <option value="kedua sisi">Kedua Sisi</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputSkills">Palatum</label>
            <select id="ps" class="form-control" name="palatum">
              <option disabled selected value>pilih</option>
              <option value="dalam">Dalam</option>
              <option value="sedang">Sedang</option>
              <option value="rendah">Rendah</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputSkills">Diastema</label>
            <select id="ds" class="form-control" name="diastema">
              <option disabled selected value>pilih</option>
              <option value="tidak ada">Tidak Ada</option>
              <option value="ada">Ada</option>
            </select>
            <label>Penjelasan letak dan lebar</label>
            <input type="text" class="form-control" id="ket1" name="ket1">
          </div>
          <div class="form-group">
            <label for="inputSkills">Gigi Anomali</label>
            <select id="gas" class="form-control" name="gigi_anomali">
              <option disabled selected value>pilih</option>
              <option value="tidak ada">Tidak Ada</option>
              <option value="ada">Ada</option>
            </select>
            <label>Penjelasan gigi dan bentuknya</label>
            <input type="text" class="form-control" id="ket2" name="ket2">
          </div>
          <div class="form-group">
            <label for="inputSkills">Lain-lain</label>
            <input type="text" class="form-control" id="lainnya" name="lainnya" >
          </div>
          <div class="form-group">
            <label for="inputSkills">Decay (D)</label>
            <select id="decays" class="form-control" name="decay">
              <option value="0">pilih</option>
              <?php for ($i = 1; $i <= 24; $i++) : ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php endfor; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="inputSkills">Misiing (M)</label>
            <select id="missings" class="form-control" name="missing">
              <option value="0">pilih</option>
              <?php for ($i = 1; $i <= 24; $i++) : ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php endfor; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="inputSkills">Fill (F)</label>
            <select id="fills" class="form-control" name="fill">
              <option value="0">pilih</option>
              <?php for ($i = 1; $i <= 24; $i++) : ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php endfor; ?>
            </select>
          </div>
          <input type="hidden" name="id_dtodon" id="id_dtodon">
          <input type="hidden" name="id_pasien" id="id_pasien">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal" style="float: left;">Kembali</button>
          <button type="button" id="btn-simpan-data" class="btn btn-default">Simpan</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Isi Data -->
  <div class="modal fade" id="isi_data" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #4787ef">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Isi Data</h4>
        </div>
        <div class="modal-body">
            <form id="form3">
          <div class="form-group">
            <label for="inputSkills">Oclusi</label>
            <select id="os" class="form-control" name="occlusi">
              <option disabled selected value>pilih</option>
              <option value="normal bite">Normal Bite</option>
              <option value="cross bite">Cross Bite</option>
              <option value="steep bite">Steep Bite</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputSkills">Torus Palatinus</label>
            <select id="tps" class="form-control" name="torus_palatinus">
              <option disabled selected value>pilih</option>
              <option value="tidak ada">Tidak Ada</option>
              <option value="kecil">Kecil</option>
              <option value="sedang">Sedang</option>
              <option value="besar">Besar</option>
              <option value="multiple">Multilpe</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputSkills" >Torus Mandibularis</label>
            <select id="tms" class="form-control" name="torus_mandibularis">
              <option disabled selected value>pilih</option>
              <option value="tidak ada">Tidak Ada</option>
              <option value="sisi kiri">Sisi Kiri</option>
              <option value="sisi kanan">Sisi Kanan</option>
              <option value="kedua sisi">Kedua Sisi</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputSkills">Palatum</label>
            <select id="ps" class="form-control" name="palatum">
              <option disabled selected value>pilih</option>
              <option value="dalam">Dalam</option>
              <option value="sedang">Sedang</option>
              <option value="rendah">Rendah</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputSkills">Diastema</label>
            <select id="ds" class="form-control" name="diastema">
              <option disabled selected value>pilih</option>
              <option value="tidak ada">Tidak Ada</option>
              <option value="ada">Ada</option>
            </select>
            <label>Penjelasan letak dan lebar</label>
            <input type="text" class="form-control" id="ket1" name="ket1">
          </div>
          <div class="form-group">
            <label for="inputSkills">Gigi Anomali</label>
            <select id="gas" class="form-control" name="gigi_anomali">
              <option disabled selected value>pilih</option>
              <option value="tidak ada">Tidak Ada</option>
              <option value="ada">Ada</option>
            </select>
            <label>Penjelasan gigi dan bentuknya</label>
            <input type="text" class="form-control" id="ket2" name="ket2">
          </div>
          <div class="form-group">
            <label for="inputSkills">Lain-lain</label>
            <input type="text" class="form-control" id="lainnya" name="lainnya" >
          </div>
          <div class="form-group">
            <label for="inputSkills">Decay (D)</label>
            <select id="decays" class="form-control" name="decay">
              <option value="0">pilih</option>
              <?php for ($i = 1; $i <= 24; $i++) : ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php endfor; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="inputSkills">Misiing (M)</label>
            <select id="missings" class="form-control" name="missing">
              <option value="0">pilih</option>
              <?php for ($i = 1; $i <= 24; $i++) : ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php endfor; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="inputSkills">Fill (F)</label>
            <select id="fills" class="form-control" name="fill">
              <option value="0">pilih</option>
              <?php for ($i = 1; $i <= 24; $i++) : ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php endfor; ?>
            </select>
          </div>
          <?php 
          foreach ($pasien as $key) { ?>
          <input type="hidden" name="id_pasien" id="id_pasien" value="<?php echo $key->id_pasien;?>">
          <?php } ?>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" id="btn-isi" class="btn btn-default">Submit</button>
        </div>
      </div>
    </div>
  </div>



  <!-- redirect perawatan -->
  <div class="modal fade" id="redirect-perawatan" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #4787ef">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Perawatan Pasien</h4>
        </div>
        <div class="modal-body">
          <form id="form2">
          <div class="form-group">
            <label for="inputSkills">Temuan Masalah</label>
              <input type="text" class="form-control" id="temuan_masalah" name="temuan_masalah" placeholder="temuan masalah">
            </div>
          <div class="form-group">
            <label for="inputSkills">Gigi</label>
              <input type="text" class="form-control" id="tampilan_gigi" name="gigi" value="">
            </div>
          <div class="form-group">
            <label for="inputSkills">Diagnosa</label>
              <input type="text" class="form-control" id="diagnosa" name="diagnosa" placeholder="diagnosa">
            </div>
          <div class="form-group">
            <label for="inputSkills">Kode ICD</label>
            <select size="1" id="k1" class="form-control"  type="select" name="Rank" value="-Select Your Rank-">
              <option disabled selected value>pilih</option>  
              <option value="K00">K00 Disorders of tooth development and eruption</option>
              <option value="K01">K01 Embedded and impacted teeth</option>
              <option value="K02">K02 Dental caries</option>
              <option value="K03">K03 Other diseases of hard tissues of teeth</option>
              <option value="K04">K04 Diseases of pulp and periapical tissues</option>
              <option value="K05">K05 Gingivitis and periodontal diseases</option>
              <option value="K06">K06 Other disorders of gingiva and edentulous alveolar ridge</option>
              <option value="K07">K07 Dentofacial anomalies [including malocclusion]</option>
              <option value="K08">K08 Other disorders of teeth and supporting structures</option>
              <option value="K09">K09 Cysts of oral region, not elsewhere classified</option>
              <option value="K10">K10 Other diseases of jaws</option>
              <option value="K11">K11 Diseases of salivary glands</option>
              <option value="K12">K12 Stomatitis and related lesions</option>
              <option value="K13">K13 Other diseases of lip and oral mucosa</option>
              <option value="K14">K14 Diseases of tongue</option>
            </select>

            <div id="K00" class="style-sub-1" style="display: none;" name="stylesub1">
              
                <select id="K00" name="K00" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="K00_0">K00.0 Anodontia</option>
                    <option value="K00_1">K00.1 Supernumerary teeth</option>
                    <option value="K00_2">K00.2 Abnormalities of size and form of teeth</option>
                    <option value="K00_3">K00.3 Mottled teeth</option>
                    <option value="K00_4">K00.4 Disturbances in tooth formation </option>
                    <option value="K00_5">K00.5 Hereditary disturbances in tooth structure, not elsewhere classified</option>
                    <option value="K00_6">K00.6 Disturbances in tooth eruption</option>
                    <option value="K00_7">K00.7 Teething syndrome</option>
                    <option value="K00_8">K00.8 Other disorders of tooth development</option>
                    <option value="K00_9">K00.9 Disorder of tooth development, unspecified</option>
                  </select>
              </div>

              <div id="K01" class="style-sub-1" style="display: none;" name="stylesub1" >
              
                <select id="K01" name="K01" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="K01_0">K01.0 Embedded teeth</option>
                    <option value="K01_1">K01.1 Impacted teeth</option>
                  </select>
              </div>

              <div id="K02" class="style-sub-1" style="display: none;" name="stylesub1" >
              
                <select id="K02" name="K02" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="K02_0">K02.0 Caries limited to enamel</option>
                    <option value="K02_1">K02.1 Caries of dentine</option>
                    <option value="K02_2">K02.2 Caries of cementum</option>
                    <option value="K02_3">K02.3 Arrested dental caries</option>
                    <option value="K02_4">K02.4 Odontoclasia</option>
                    <option value="K02_5">K02.5 Other dental caries</option>
                    <option value="K02_6">K02.6 Dental caries, unspecified</option>
                  </select>
              </div>

              <div id="K03" class="style-sub-1" style="display: none;" name="stylesub1" >
              
                <select id="K03" name="K03" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="K03_0">K03.0 Excessive attrition of teeth</option>
                    <option value="K03_1">K03.1 Abrasion of teeth</option>
                    <option value="K03_2">K03.2 Erosion of teeth</option>
                    <option value="K03_3">K03.3 Pathological resorption of teeth</option>
                    <option value="K03_4">K03.4 Hypercementosis</option>
                    <option value="K03_5">K03.5 Ankylosis of teeth</option>
                    <option value="K03_6">K03.6 Deposits [accretions] on teeth</option>
                    <option value="K03_7">K03.7 Posteruptive colour changes of dental hard tissues</option>
                    <option value="K03_8">K03.8 Other specified diseases of hard tissues of teeth</option>
                    <option value="K03_9">K03.9 Disease of hard tissues of teeth, unspecified</option>
                  </select>
              </div>

              <div id="K04" class="style-sub-1" style="display: none;" name="stylesub1" >
              
                <select id="K04" name="K04" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="K04_0">K04.0 Pulpitis</option>
                    <option value="K04_1">K04.1 Necrosis of pulp</option>
                    <option value="K04_2">K04.2 Pulp degeneration</option>
                    <option value="K04_3">K04.3 Abnormal hard tissue formation in pulp</option>
                    <option value="K04_4">K04.4 Acute apical periodontitis of pulpal origin</option>
                    <option value="K04_5">K04.5 Chronic apical periodontitis</option>
                    <option value="K04_6">K04.6 Periapical abscess with sinus</option>
                    <option value="K04_7">K04.7 Periapical abscess without sinus</option>
                    <option value="K04_8">K04.8 Radicular cyst</option>
                    <option value="K04_9">K04.9 Other and unspecified diseases of pulp and periapical tissues</option>
                  </select>
              </div>

              <div id="K05" class="style-sub-1" style="display: none;" name="stylesub1" >
              
                <select id="K05" name="K05" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="K05_0">K05.0 Acute gingivitis</option>
                    <option value="K05_1">K05.1 Chronic gingivitis</option>
                    <option value="K05_2">K05.2 Acute periodontitis</option>
                    <option value="K05_3">K05.3 Chronic periodontitis</option>
                    <option value="K05_4">K05.4 Periodontosis</option>
                    <option value="K05_5">K05.5 Other periodontal diseases</option>
                    <option value="K05_6">K05.6 Periodontal disease, unspecified</option>
                  </select>
              </div>

              <div id="K06" class="style-sub-1" style="display: none;" name="stylesub1" >
              
                <select id="K06" name="K06" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="K06_0">K06.0 Gingival recession</option>
                    <option value="K06_1">K06.1 Gingival enlargement</option>
                    <option value="K06_2">K06.2 Gingival and edentulous alveolar ridge lesions associated with trauma</option>
                    <option value="K06_8">K06.8 Other specified disorders of gingiva and edentulous alveolar ridge</option>
                    <option value="K06_9">K06.9 Disorder of gingiva and edentulous alveolar ridge, unspecified</option>
                  </select>
              </div>

              <div id="K07" class="style-sub-1" style="display: none;" name="stylesub1" >
              
                <select id="K07" name="K07" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="K07_0">K07.0 Major anomalies of jaw size</option>
                    <option value="K07_1">K07.1 Anomalies of jaw-cranial base relationship</option>
                    <option value="K07_2">K07.2 Anomalies of dental arch relationship</option>
                    <option value="K07_3">K07.3 Anomalies of tooth position</option>
                    <option value="K07_4">K07.4 Malocclusion, unspecified</option>
                    <option value="K07_5">K07.5 Dentofacial functional abnormalities</option>
                    <option value="K07_6">K07.6 Temporomandibular joint disorders</option>
                    <option value="K07_8">K07.8 Other dentofacial anomalies</option>
                    <option value="K07_9">K07.9 Dentofacial anomaly, unspecified</option>
                  </select>
              </div>

              <div id="K08" class="style-sub-1" style="display: none;" name="stylesub1" >
              
                <select id="K08" name="K08" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="K08_0">K08.0 Exfoliation of teeth due to systemic causes</option>
                    <option value="K08_1">K08.1 Loss of teeth due to accident, extraction or local periodontal disease</option>
                    <option value="K08_2">K08.2 Atrophy of edentulous alveolar ridge</option>
                    <option value="K08_3">K08.3 Retained dental root</option>
                    <option value="K08_8">K08.8 Other specified disorders of teeth and supporting structures</option>
                    <option value="K08_9">K08.9 Disorder of teeth and supporting structures, unspecified</option>
                  </select>
              </div>

              <div id="K09" class="style-sub-1" style="display: none;" name="stylesub1" >
              
                <select id="K09" name="K09" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="K09_0">K09.0 Developmental odontogenic cysts</option>
                    <option value="K09_1">K09.1 Loss of teeth due to accident, extraction or local periodontal disease</option>
                    <option value="K09_2">K09.2 Other cysts of jaw</option>
                    <option value="K09_8">K09.8 Other cysts of oral region, not elsewhere classified</option>
                    <option value="K09_9">K09.9 Cyst of oral region, unspecified</option>
                  </select>
              </div>

              <div id="K10" class="style-sub-1" style="display: none;" name="stylesub1" >
              
                <select id="K10" name="K10" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="K10_0">K10.0 Developmental disorders of jaws</option>
                    <option value="K10_1">K10.1 Giant cell granuloma, central</option>
                    <option value="K10_2">K10.2 Inflammatory conditions of jaws</option>
                    <option value="K10_3">K10.3 Alveolitis of jaws</option>
                    <option value="K10_8">K10.8 Other specified diseases of jaws</option>
                    <option value="K10_9">K10.9 Disease of jaws, unspecified</option>
                  </select>
              </div>

              <div id="K11" class="style-sub-1" style="display: none;" name="stylesub1" >
              
                <select id="K11" name="K11" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="K11_0">K11.0 Atrophy of salivary gland</option>
                    <option value="K11_1">K11.1 Hypertrophy of salivary gland</option>
                    <option value="K11_2">K11.2 Sialoadenitis</option>
                    <option value="K11_3">K11.3 Abscess of salivary gland</option>
                    <option value="K11_4">K11.4 Fistula of salivary gland</option>
                    <option value="K11_5">K11.5 Sialolithiasis</option>
                    <option value="K11_6">K11.6 Mucocele of salivary gland</option>
                    <option value="K11_7">K11.7 Disturbances of salivary secretion</option>
                    <option value="K11_8">K11.8 Other diseases of salivary glands</option>
                    <option value="K11_9">K11.9 Disease of salivary gland, unspecified</option>
                  </select>
              </div>

              <div id="K12" class="style-sub-1" style="display: none;" name="stylesub1" >
              
                <select id="K12" name="K12" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="K12_0">K12.0 Recurrent oral aphthae</option>
                    <option value="K12_1">K12.1 Other forms of stomatitis</option>
                    <option value="K12_2">K12.2 Cellulitis and abscess of mouth</option>
                    <option value="K12_3">K12.3 Oral mucositis (ulcerative)</option>
                  </select>
              </div>

              <div id="K13" class="style-sub-1" style="display: none;" name="stylesub1" >
              
                <select id="K13" name="K13" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="K13_0">K13.0 Diseases of lips</option>
                    <option value="K13_1">K13.1 Cheek and lip biting</option>
                    <option value="K13_2">K13.2 Leukoplakia and other disturbances of oral epithelium, including tongue</option>
                    <option value="K13_3">K13.3 Hairy leukoplakia</option>
                    <option value="K13_4">K13.4 Granuloma and granuloma-like lesions of oral mucosa</option>
                    <option value="K13_5">K13.5 Oral submucous fibrosis</option>
                    <option value="K13_6">K13.6 Irritative hyperplasia of oral mucosa</option>
                    <option value="K13_7">K13.7 Other and unspecified lesions of oral mucosa</option>
                  </select>
              </div>

              <div id="K14" class="style-sub-1 " style="display: none;" name="stylesub1" >
              
                <select id="K14" name="K14" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="K14_0">K14.0 Glossitis</option>
                    <option value="K14_1">K14.1 Geographic tongue</option>
                    <option value="K14_2">K14.2 Median rhomboid glossitis</option>
                    <option value="K14_3">K14.3 Hypertrophy of tongue papillae</option>
                    <option value="K14_4">K14.4 Atrophy of tongue papillae</option>
                    <option value="K14_5">K14.5 Plicated tongue</option>
                    <option value="K14_6">K14.6 Glossodynia</option>
                    <option value="K14_8">K14.8 Other diseases of tongue</option>
                    <option value="K14_9">K14.9 Disease of tongue, unspecified</option>
                  </select>
              </div>

              <div id="K00_0" class="style-sub-2" style="display: none;" name="stylesub2">
              
                <select id="K00.0" name="K00.00" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Hypodontia">Hypodontia</option>
                    <option value="Oligodontia">Oligodontia</option>
                  </select>
              </div>

              <div id="K00_1" class="style-sub-2 " style="display: none;" name="stylesub1">
              
                <select id="K00.1" name="K00.1" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Distomolar">Distomolar</option>
                    <option value="Fourth molar">Fourth molar</option>
                    <option value="Mesiodens">Mesiodens</option>
                    <option value="Paramolar">Paramolar</option>
                    <option value="Supplementary teeth">Supplementary teeth</option>
                  </select>
              </div>

              <div id="K00_2" class="style-sub-2 " style="display: none;" name="stylesub1" >
              
                <select id="k00.2" name="k00.2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Concrescence of teeth">Concrescence of teeth</option>
                    <option value="Fusion of teeth">Fusion of teeth</option>
                    <option value="Gemination of teeth">Gemination of teeth</option>
                    <option value="Dens evaginatus">Dens evaginatus</option>
                    <option value="Dens in dente">Dens in dente</option>
                    <option value="Dens invaginatus">Dens invaginatus</option>
                    <option value="Enamel pearls">Enamel pearls</option>
                    <option value="Macrodontia">Macrodontia</option>
                    <option value="Microdontia">Microdontia</option>
                    <option value="Peg-shaped [conical] teeth">Peg-shaped [conical] teeth</option>
                    <option value="Taurodontism">Taurodontism</option>
                    <option value="Tuberculum paramolare">Tuberculum paramolare</option>
                  </select>
              </div>

              <div id="K00_3" class="style-sub-2 " style="display: none;" name="stylesub1" >
              
                <select id="k00.3" name="k00.3" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Dental fluorosis">Dental fluorosis</option>
                    <option value="Mottling of enamel">Mottling of enamel</option>
                    <option value="Nonfluoride enamel opacities">Nonfluoride enamel opacities</option>
                  </select>
              </div>

              <div id="K00_4" class="style-sub-2 " style="display: none;" name="stylesub1" >
              
                <select id="k00.4" name="k00.4" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Aplasia and hypoplasia of cementum">Aplasia and hypoplasia of cementum</option>
                    <option value="Dilaceration of tooth">Dilaceration of tooth</option>
                    <option value="Enamel hypoplasia (neonatal)(postnatal)(prenatal)">Enamel hypoplasia (neonatal)(postnatal)(prenatal)</option>
                    <option value="Regional odontodysplasia">Regional odontodysplasia</option>
                    <option value="Turner tooth">Turner tooth</option>
                  </select>
              </div>

              <div id="K00_5" class="style-sub-2 " style="display: none;" name="stylesub1" >
              
                <select id="k00.5" name="k00.5" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Amelogenesis imperfecta">Amelogenesis imperfecta</option>
                    <option value="Dentinogenesis imperfecta">Dentinogenesis imperfecta</option>
                    <option value="Odontogenesis imperfecta">Odontogenesis imperfecta</option>
                    <option value="Dentinal dysplasia">Dentinal dysplasia</option>
                    <option value="Shell teeth">Shell teeth</option>
                  </select>
              </div>

              <div id="K00_6" class="style-sub-2 " style="display: none;" name="stylesub1" >
              
                <select id="k00.6" name="k00.6" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Dentia praecox">Dentia praecox</option>
                    <option value="Natal tooth">Natal tooth</option>
                    <option value="Neonatal tooth">Neonatal tooth</option>
                    <option value="Premature eruption of tooth">Premature eruption of tooth</option>
                    <option value="Premature shedding of primary [deciduous] tooth">Premature shedding of primary [deciduous] tooth</option>
                    <option value="Retained [persistent] primary tooth">Retained [persistent] primary tooth</option>
                  </select>
              </div>

              <div id="K00_8" class="style-sub-2 " style="display: none;" name="stylesub1" >
              
                <select id="k00.8" name="k00.8" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Colour changes during tooth formation">Colour changes during tooth formation</option>
                    <option value="Intrinsic staining of teeth NOS">Intrinsic staining of teeth NOS</option>
                  </select>
              </div>

              <div id="K00_9" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k00.9" name="k00.9" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Disorder of odontogenesis NOS">Disorder of odontogenesis NOS</option>
                  </select>
              </div>

              <div id="K01_0" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k01.0" name="k01.0" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="An embedded tooth is a tooth that has failed to erupt without obstruction by another tooth.">An embedded tooth is a tooth that has failed to erupt without obstruction by another tooth.</option>
                  </select>
              </div>

              <div id="K01_1" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k01.1" name="k01.1" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="An impacted tooth is a tooth that has failed to erupt because of obstruction by another tooth">An impacted tooth is a tooth that has failed to erupt because of obstruction by another tooth</option>
                  </select>
              </div>

              <div id="K02_0" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k02.0" name="k02.0" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="White spot lesions [initial caries]">White spot lesions [initial caries]</option>
                  </select>
              </div>

              <div id="K02_4" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k02.4" name="k02.4" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Infantile melanodontia">Infantile melanodontia</option>
                    <option value="Melanodontoclasia">Melanodontoclasia</option>
                  </select>
              </div>

              <div id="K03_0" class="style-sub-2" style="display: none;" name="stylesub1" >
                <select id="k03.0" name="k03.0" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="approximal of teeth">approximal of teeth</option>
                    <option value="occlusal of teeth">occlusal of teeth</option>
                  </select>
              </div>

              <div id="K03_1" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k03.1" name="k03.1" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="dentifrice of teeth">dentifrice of teeth</option>
                    <option value="habitual of teeth">habitual of teeth</option>
                    <option value="occupational of teeth">occupational of teeth</option>
                    <option value="ritual of teeth">ritual of teeth</option>
                    <option value="Wedge defect NOS of teeth">Wedge defect NOS of teeth</option>
                  </select>
              </div>

              <div id="K03_2" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k03.2" name="k03.2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="NOS">NOS</option>
                    <option value="Erosion of teeth due to diet">Erosion of teeth due to diet</option>
                    <option value="Erosion of teeth due to drugs and medicement">Erosion of teeth due to drugs and medicement</option>
                    <option value="Erosion of teeth due to persistent vomiting">Erosion of teeth due to persistent vomiting</option>
                    <option value="idiopathic">idiopathic</option>
                    <option value="occupational">occupational</option>
                  </select>
              </div>

              <div id="K03_3" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k03.3" name="k03.3" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Internal granuloma of pulp">Internal granuloma of pulp</option>
                    <option value="Resorption of teeth (external)">Resorption of teeth (external)</option>
                  </select>
              </div>

              <div id="K03_4" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k03.4" name="k03.4" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Cementation hyperplasia">Cementation hyperplasia</option>
                  </select>
              </div>

              <div id="K03_6" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k03.6" name="k03.6" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Dental calculus subgingival">Dental calculus subgingival</option>
                    <option value="Dental calculus supragingival">Dental calculus supragingival</option>
                    <option value="betel">betel</option>
                    <option value="black">black</option>
                    <option value="green">green</option>
                    <option value="materia alba">materia alba</option>
                    <option value="orange">orange</option>
                    <option value="tobacco">tobacco</option>
                    <option value="Staining of teeth NOS">Staining of teeth NOS</option>
                    <option value="Staining of teeth extrinsic NOS">Staining of teeth extrinsic NOS</option>
                  </select>
              </div>

              <div id="K03_8" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k03.8" name="k03.8" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Irradiated enamel">Irradiated enamel</option>
                    <option value="Sensitive dentine">Sensitive dentine</option>
                  </select>
              </div>

              <div id="K04_0" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k04.0" name="k04.0" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="NOS">NOS</option>
                    <option value="acute">acute</option>
                    <option value="chronic (hyperplastic)(ulcerative)">chronic (hyperplastic)(ulcerative)</option>
                    <option value="irreversible">irreversible</option>
                    <option value="reversible">reversible</option>
                  </select>
              </div>

              <div id="K04_1" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k04.1" name="k04.1" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Pulpal gangrene">Pulpal gangrene</option>
                  </select>
              </div>

              <div id="K04_2" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k04.2" name="k04.2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Denticles">Denticles</option>
                    <option value="Pulpal calcifications">Pulpal calcifications</option>
                    <option value="Pulpal stones">Pulpal stones</option>
                  </select>
              </div>

              <div id="K04_3" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k04.3" name="k04.3" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Secondary or irregular dentine">Secondary or irregular dentine</option>
                  </select>
              </div>

              <div id="K04_4" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k04.4" name="k04.4" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Acute apical periodontitis NOS">Acute apical periodontitis NOS</option>
                  </select>
              </div>

              <div id="K04_5" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k04.5" name="k04.5" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Apical or periapical granuloma">Apical or periapical granuloma</option>
                    <option value="Apical periodontitis NOS">Apical periodontitis NOS</option>
                  </select>
              </div>

              <div id="K04_6" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k04.6" name="k04.6" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="dental abdental scess with sinus">dental abdental scess with sinus</option>
                    <option value="Dentoalveolar abdental scess with sinus">Dentoalveolar abdental scess with sinus</option>
                  </select>
              </div>

              <div id="K04_7" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k04.7" name="k04.7" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="dental abscess NOS">dental abscess NOS</option>
                    <option value="Dentoalveolar dental abscess NOS">Dentoalveolar dental abscess NOS</option>
                    <option value="Periapical dental abscess NOS">Periapical dental abscess NOS</option>
                  </select>
              </div>

              <div id="K04_8" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k04.8" name="k04.8" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="apical (periodontal)">apical (periodontal)</option>
                    <option value="periapical">periapical</option>
                    <option value="residual radicular">residual radicular</option>
                  </select>
              </div>

              <div id="K05_1" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k05.1" name="k05.1" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="NOS">NOS</option>
                    <option value="desquamative">desquamative</option>
                    <option value="hyperplastic">hyperplastic</option>
                    <option value="simple marginal">simple marginal</option>
                    <option value="ulcerative">ulcerative</option>
                  </select>
              </div>

              <div id="K05_2" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k05.2" name="k05.2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Acute pericoronitis">Acute pericoronitis</option>
                    <option value="Parodontal abscess">Parodontal abscess</option>
                    <option value="Periodontal abscess">Periodontal abscess</option>
                  </select>
              </div>

              <div id="K05_3" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k05.3" name="k05.3" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Chronic pericoronitis">Chronic pericoronitis</option>
                    <option value="Periodontitis NOS">Periodontitis NOS</option>
                    <option value="Periodontitis complex">Periodontitis complex</option>
                    <option value="Periodontitis simplex">Periodontitis simplex</option>
                  </select>
              </div>

              <div id="K05_4" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k05.4" name="k05.4" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Juvenile periodontosis">Juvenile periodontosis</option>
                  </select>
              </div>

              <div id="K06_0" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k06.0" name="k06.0" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Gingival recession (generalized)(localized)(postinfective)(post-operative)">Gingival recession (generalized)(localized)(postinfective)(post-operative)</option>
                  </select>
              </div>

              <div id="K06_1" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k06.1" name="k06.1" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Gingival fibromatosis">Gingival fibromatosis</option>
                  </select>
              </div>

              <div id="K06_2" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k06.2" name="k06.2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Irritative hyperplasia of edentulous ridge [denture hyperplasia]">Irritative hyperplasia of edentulous ridge [denture hyperplasia]</option>
                  </select>
              </div>

              <div id="K06_8" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k06.8" name="k06.8" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Fibrous epulis">Fibrous epulis</option>
                    <option value="Flabby ridge">Flabby ridge</option>
                    <option value="Giant cell epulis">Giant cell epulis</option>
                    <option value="Peripheral giant cell granuloma">Peripheral giant cell granuloma</option>
                    <option value="Pyogenic granuloma of gingiva">Pyogenic granuloma of gingiva</option>
                  </select>
              </div>

              <div id="K07_0" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k07.0" name="k07.0" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Hyperplasia, hypoplasia: mandibular">Hyperplasia, hypoplasia: mandibular</option>
                    <option value="Hyperplasia, hypoplasia : maxillary">Hyperplasia, hypoplasia : maxillary</option>
                    <option value="Macrognathism (mandibular)(maxillary)">Macrognathism (mandibular)(maxillary)</option>
                    <option value="Micrognathism (mandibular)(maxillary)">Micrognathism (mandibular)(maxillary)</option>
                  </select>
              </div>

              <div id="K07_1" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k07.1" name="k07.1" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Asymmetry of jaw">Asymmetry of jaw</option>
                    <option value="Prognathism (mandibular)(maxillary)">Prognathism (mandibular)(maxillary)</option>
                    <option value="Retrognathism (mandibular)(maxillary)">Retrognathism (mandibular)(maxillary)</option>
                  </select>
              </div>

              <div id="K07_2" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k07.2" name="k07.2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Crossbite (anterior)(posterior)">Crossbite (anterior)(posterior)</option>
                    <option value="Disto-occlusion">Disto-occlusion</option>
                    <option value="Mesio-occlusion">Mesio-occlusion</option>
                    <option value="Midline deviation of dental arch">Midline deviation of dental arch</option>
                    <option value="Openbite (anterior)(posterior)">Openbite (anterior)(posterior)</option>
                    <option value="Overbite (excessive): deep">Overbite (excessive): deep</option>
                    <option value="Overbite (excessive): horizontal">Overbite (excessive): horizontal</option>
                    <option value="Overbite (excessive): vertical">Overbite (excessive): vertical</option>
                    <option value="Overjet">Overjet</option>
                    <option value="Posterior lingual occlusion of mandibular teeth">Posterior lingual occlusion of mandibular teeth</option>
                  </select>
              </div>

              <div id="K07_3" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k07.3" name="k07.3" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Crowding of tooth or teeth">Crowding of tooth or teeth</option>
                    <option value="diastema of tooth or teeth">diastema of tooth or teeth</option>
                    <option value="displacement of tooth or teeth">displacement of tooth or teeth</option>
                    <option value="rotation of tooth or teeth">rotation of tooth or teeth</option>
                    <option value="spacing, abnormal of tooth or teeth">spacing, abnormal of tooth or teeth</option>
                    <option value="transposition of tooth or teeth">transposition of tooth or teeth</option>
                    <option value="Impacted or embedded teeth with abnormal position of such teeth or adjacent teeth">Impacted or embedded teeth with abnormal position of such teeth or adjacent teeth</option>
                  </select>
              </div>

              <div id="K07_5" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k07.5" name="k07.5" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Abnormal jaw closure">Abnormal jaw closure</option>
                    <option value="Malocclusion due to abnormal swallowing">Malocclusion due to abnormal swallowing</option>
                    <option value="Malocclusion due to mouth breathing">Malocclusion due to mouth breathing</option>
                    <option value="Malocclusion due to tongue, lip or finger habits">Malocclusion due to tongue, lip or finger habits</option>
                  </select>
              </div>

              <div id="K07_6" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k07.6" name="k07.6" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Costen complex or syndrome">Costen complex or syndrome</option>
                    <option value="Derangement of temporomandibular joint">Derangement of temporomandibular joint</option>
                    <option value="Snapping jaw">Snapping jaw</option>
                    <option value="Temporomandibular joint-pain-dysfunction syndrome">Temporomandibular joint-pain-dysfunction syndrome</option>
                  </select>
              </div>

              <div id="K08_8" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k08.8" name="k08.8" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Enlargement of alveolar ridge NOS">Enlargement of alveolar ridge NOS</option>
                    <option value="Irregular alveolar process">Irregular alveolar process</option>
                    <option value="Toothache NOS">Toothache NOS</option>
                  </select>
              </div>

              <div id="K09_0" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k09.0" name="k09.0" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="dentigerous cyst">dentigerous cyst</option>
                    <option value="eruption cyst">eruption cyst</option>
                    <option value="follicular cyst">follicular cyst</option>
                    <option value="gingival cyst">gingival cyst</option>
                    <option value="lateral periodontal cyst">lateral periodontal cyst</option>
                    <option value="primordial cyst">primordial cyst</option>
                  </select>
              </div>

              <div id="K09_1" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k09.1" name="k09.1" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="cyst of globulomaxillary">cyst of globulomaxillary</option>
                    <option value="cyst of incisive canal">cyst of incisive canal</option>
                    <option value="cyst of median palatal">cyst of median palatal</option>
                    <option value="cyst of nasopalatine">cyst of nasopalatine</option>
                    <option value="cyst of palatine papilla">cyst of palatine papilla</option>
                  </select>
              </div>

              <div id="K09_2" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k09.2" name="k09.2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="cyst of jaw : NOS">cyst of jaw : NOS</option>
                    <option value="cyst of jaw : aneurysmal">cyst of jaw : aneurysmal</option>
                    <option value="cyst of jaw : haemorrhagic">cyst of jaw : haemorrhagic</option>
                    <option value="cyst of jaw : traumatic">cyst of jaw : traumatic</option>
                  </select>
              </div>

              <div id="K09_8" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k09.8" name="k09.8" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Dermoid cyst of mouth">Dermoid cyst of mouth</option>
                    <option value="Epidermoid cyst of mouth">Epidermoid cyst of mouth</option>
                    <option value="Lymphoepithelial cyst of mouth">Lymphoepithelial cyst of mouth</option>
                    <option value="Epstein pearl">Epstein pearl</option>
                    <option value="Nasoalveolar cyst">Nasoalveolar cyst</option>
                    <option value="Nasolabial cyst">Nasolabial cyst</option>
                  </select>
              </div>

              <div id="K10_0" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k10.0" name="k10.0" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Latent bone cyst of jaw">Latent bone cyst of jaw</option>
                    <option value="Stafne cyst">Stafne cyst</option>
                    <option value="torus mandibularis">torus mandibularis</option>
                    <option value="torus palatinus">torus palatinus</option>
                  </select>
              </div>

              <div id="K10_1" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k10.1" name="k10.1" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Giant cell granuloma NOS">Giant cell granuloma NOS</option>
                  </select>
              </div>

              <div id="K10_2" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k10.2" name="k10.2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Osteitis of jaw (acute)(chronic)(suppurative)">Osteitis of jaw (acute)(chronic)(suppurative)</option>
                    <option value="Osteomyelitis (neonatal) of jaw (acute)(chronic)(suppurative)">Osteomyelitis (neonatal) of jaw (acute)(chronic)(suppurative)</option>
                    <option value="Osteoradionecrosis of jaw (acute)(chronic)(suppurative)">Osteoradionecrosis of jaw (acute)(chronic)(suppurative)</option>
                    <option value="Periostitis of jaw (acute)(chronic)(suppurative)">Periostitis of jaw (acute)(chronic)(suppurative)</option>
                    <option value="Sequestrum of jaw bone">Sequestrum of jaw bone</option>
                  </select>
              </div>

              <div id="K10_3" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k10.3" name="k10.3" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Alveolar osteitis">Alveolar osteitis</option>
                    <option value="Dry socket">Dry socket</option>
                  </select>
              </div>

              <div id="K10_8" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k10.8" name="k10.8" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Cherubism">Cherubism</option>
                    <option value="Exostosis of jaw">Exostosis of jaw</option>
                    <option value="Fibrous dysplasia of jaw">Fibrous dysplasia of jaw</option>
                    <option value="Unilateral condylar: hyperplasia">Unilateral condylar: hyperplasia</option>
                    <option value="Unilateral condylar: hypoplasia">Unilateral condylar: hypoplasia</option>
                  </select>
              </div>

              <div id="K11_5" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k11.5" name="k11.5" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="calculus of salivary gland or duct">calculus of salivary gland or duct </option>
                    <option value="stone of salivary gland or duct">stone of salivary gland or duct</option>
                  </select>
              </div>

              <div id="K11_6" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k11.6" name="k11.6" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="extravasation cyst of salivary gland">extravasation cyst of salivary gland</option>
                    <option value="retention cyst of salivary gland">retention cyst of salivary gland</option>
                    <option value="ranula">ranula</option>
                  </select>
              </div>

              <div id="K11_7" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k11.7" name="k11.7" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Hypoptyalism">Hypoptyalism</option>
                    <option value="Ptyalism">Ptyalism</option>
                    <option value="Xerostomia">Xerostomia</option>
                  </select>
              </div>

              <div id="K11_8" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k11.8" name="k11.8" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Benign lymphoepithelial lesion of salivary gland">Benign lymphoepithelial lesion of salivary gland</option>
                    <option value="Mikulicz disease">Mikulicz disease</option>
                    <option value="Necrotizing sialometaplasia">Necrotizing sialometaplasia</option>
                    <option value="Sialectasia">Sialectasia</option>
                    <option value="Stenosis of salivary duct">Stenosis of salivary duct</option>
                    <option value="Stricture of salivary duct">Stricture of salivary duct</option>
                  </select>
              </div>

              <div id="K11_9" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k11.9" name="k11.9" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Sialoadenopathy NOS">Sialoadenopathy NOS</option>
                  </select>
              </div>

              <div id="K12_0" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k12.0" name="k12.0" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Aphthous stomatitis (major)(minor)">Aphthous stomatitis (major)(minor)</option>
                    <option value="Bednar aphthae">Bednar aphthae</option>
                    <option value="Periadenitis mucosa necrotica recurrens">Periadenitis mucosa necrotica recurrens</option>
                    <option value="Recurrent aphthous ulcer">Recurrent aphthous ulcer</option>
                    <option value="Stomatitis herpetiformis">Stomatitis herpetiformis</option>
                  </select>
              </div>

              <div id="K12_1" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k12.1" name="k12.1" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Stomatitis NOS">Stomatitis NOS</option>
                    <option value="Stomatitis denture">Stomatitis denture</option>
                    <option value="Stomatitis ulcerative">Stomatitis ulcerative</option>
                    <option value="Stomatitis vesicular">Stomatitis vesicular</option>
                  </select>
              </div>

              <div id="K12_2" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k12.2" name="k12.2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Cellulitis of mouth (floor)">Cellulitis of mouth (floor)</option>
                    <option value="Submandibular abscess">Submandibular abscess</option>
                  </select>
              </div>

              <div id="K12_3" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k12.3" name="k12.3" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="NOS">NOS</option>
                    <option value="drug-induced">drug-induced</option>
                    <option value="radiation induced">radiation induced</option>
                    <option value="viral">viral</option>
                  </select>
              </div>

              <div id="K13_0" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k13.0" name="k13.0" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Cheilitis: NOS">Cheilitis: NOS</option>
                    <option value="Cheilitis:angular">Cheilitis:angular</option>
                    <option value="Cheilitis: exfoliative">Cheilitis: exfoliative</option>
                    <option value="Cheilitis: glandular">Cheilitis: glandular</option>
                    <option value="Cheilodynia">Cheilodynia</option>
                    <option value="Cheilosis">Cheilosis</option>
                    <option value="Perlèche NEC">Perlèche NEC</option>
                  </select>
              </div>

              <div id="K13_2" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k13.2" name="k13.2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Erythroplakia of oral epithelium, including tongue">Erythroplakia of oral epithelium, including tongue</option>
                    <option value="Leukoedema of oral epithelium, including tongue">Leukoedema of oral epithelium, including tongue</option>
                    <option value="Leukokeratosis nicotina palati">Leukokeratosis nicotina palati</option>
                    <option value="Smoker palate">Smoker palate</option>
                  </select>
              </div>

              <div id="K13_4" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k13.4" name="k13.4" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Eosinophilic granuloma of oral mucosa">Eosinophilic granuloma of oral mucosa</option>
                    <option value="Granuloma pyogenicum of oral mucosa">Granuloma pyogenicum of oral mucosa</option>
                    <option value="Verrucous xanthoma of oral mucosa">Verrucous xanthoma of oral mucosa</option>
                  </select>
              </div>

              <div id="K13_5" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k13.5" name="k13.5" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Submucous fibrosis of tongue">Submucous fibrosis of tongue</option>
                  </select>
              </div>

              <div id="K13_7" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k13.7" name="k13.7" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Focal oral mucinosis">Focal oral mucinosis</option>
                  </select>
              </div>

              <div id="K14_0" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k14.0" name="k14.0" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Abscess of tongue">Abscess of tongue</option>
                    <option value="Ulceration (traumatic) of tongue">Ulceration (traumatic) of tongue</option>
                  </select>
              </div>

              <div id="K14_3" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k14.3" name="k14.3" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Black hairy tongue">Black hairy tongue</option>
                    <option value="Coated tongue">Coated tongue</option>
                    <option value="Hypertrophy of foliate papillae">Hypertrophy of foliate papillae</option>
                    <option value="Lingua villosa nigra">Lingua villosa nigra</option>
                  </select>
              </div>

              <div id="K14_4" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k14.4" name="k14.4" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Atrophic glossitis">Atrophic glossitis</option>
                  </select>
              </div>

              <div id="K14_5" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k14.5" name="k14.5" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Fissured tongue">Fissured tongue</option>
                    <option value="Furrowed tongue">Furrowed tongue</option>
                    <option value="Scrotal tongue">Scrotal tongue</option>
                  </select>
              </div>

              <div id="K14_6" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k14.6" name="k14.6" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Glossopyrosis">Glossopyrosis</option>
                    <option value="Painful tongue">Painful tongue</option>
                  </select>
              </div>

              <div id="K14_8" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k14.8" name="k14.8" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Atrophy of tongue">Atrophy of tongue</option>
                    <option value="Crenated of tongue">Crenated of tongue</option>
                    <option value="Enlargement of tongue">Enlargement of tongue</option>
                    <option value="Hypertrophy of tongue">Hypertrophy of tongue</option>
                  </select>
              </div>

              <div id="K14_9" class="style-sub-2" style="display: none;" name="stylesub1" >
              
                <select id="k14.9" name="k14.9" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Glossopathy NOS">Glossopathy NOS</option>
                  </select>
              </div> 
            </div>
          <div class="form-group">
            <label for="inputSkills">Perawatan</label>
              <input type="text" class="form-control" id="perawatan" name="perawatan" placeholder="perawatan">
            </div>
          </form>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="float: left;">Kembali</button>
          <button type="button" id="btn-simpan" class="btn btn-default">Simpan</button>
        </div>
      </div>
    </div>
  </div>

      </div>
    </div>
  </div>
</div>
</section>

<!-- jQuery -->
   

      <!-- /.content -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <script type="text/javascript">
        $(document).ready(function () {
        var mem_id  = <?php echo json_encode($this->session->userdata('id_staff')); ?>; 
        console.log(mem_id);
        var id_start_odon;
        console.log(id_start_odon);
        var id_pasien="<?php echo $id_pas; ?>";
        console.log(id_pasien);
        var last_id_pasien ; 
        var last_id_pasien2;
        var act;
        var x;
        var cond = ["amf", "gif", "cof", "fis", "inl", "logammulia", "car"];
        var pos_gigi_kiri=['11','12','13','14','15','16','17','18','51','52','53','54','55','81','82','83','84','85','41','42','43','44','45','46','47','48'];
        var move_pos = ['C', 'L','R','T','B']; 
        var last_id_perawatan;
        var pos_temp=[];
        var tampil_gigi = [];
        var ank = ['51','52','53','54','55','61','62','63','64','65','71','72','73','74','75','81','82','83','84','85'];
        // var c_dw_left = ['81','82','83','84','85'];
        // var c_up_right = ['61','62','63','64','65'];
        // var c_dw_right = ['71','72','73','74','75'];
        var gigi_ttt = ['11','12','13','14','15','21','22','23','24','25','31','32','33','34','35','41','42','43','44','45']

        $("#k1").change(function() {
          correspondingID = $(this).find(":selected").val()
          console.log("1"+correspondingID);
          $(".style-sub-1").hide();
          $("#" + correspondingID).show();
          $("#"+correspondingID).change(function() {
            correspondingID2 = $(this).find(":selected").val();
            console.log("2"+correspondingID2);
            $(".style-sub-2").hide();
            $("#"+correspondingID2).show();
            var nyari = $('div').find("#"+correspondingID2);
            //var cari = find($("#"+correspondingID2));
            console.log(nyari.length);
            if (nyari.length == 0) {
                correspondingID3 = "";
              }else{
                $("#"+correspondingID2).change(function(){
                  correspondingID3 = $(this).find(":selected").val();
                  console.log("3"+correspondingID3);
                }); 
              }    
          });
        });

        //simpan data perawatan
        $("#btn-simpan").click(function(e){
          $.ajax({
            type: "POST",
            url: "<?php echo base_url('c_dokter/insert_perawatan');?>",
            data: {id_perawatan : last_id_perawatan, id_pasien : id_pasien,temuan_masalah : $('#temuan_masalah').val(), gigi : x, diagnosa : $('#diagnosa').val() , kode_icd : correspondingID, kode_icd1 : correspondingID2, kode_icd2 : correspondingID3, perawatan : $('#perawatan').val(), pencatat : mem_id },
              dataType:'json',
            success:function(data){
                if (data.status) {
                  alert('data sukses disimpan');
                  $('#redirect-perawatan').modal('hide');
                  $('.modal-backdrop').remove();
                  $('#btn-show').hide();
                  $('#btn-tmbh').show();
                  $('#btn-buat').show();
                }
              },
            error:function(){
                alert('data gagal disimpan');
              }
          });
        });

        //selesai buat odontogram
        $('#btn-selesai').click(function(e){
         //var save_gigi = tampil_gigi.toString();
         document.getElementById('tampilan_gigi').value = tampil_gigi;
         x = tampil_gigi.join();
        });

        //isi keluhan
        $("#btn-keluhan").click(function(e) {
           $.ajax({
            type: "POST",
            url: "<?php echo base_url('c_dokter/add_keluhan');?>",
            data:{ id_pasien : id_pasien, 
                keluhan : $('#keluhan').val() },
              dataType:'json',
            success:function(data){
                if (data.status) {
                  alert('sukses');
                  var last_id_per = data.insert_id;
                  last_id_perawatan = last_id_per;
                  $('#tambah_odontogram').modal('hide');
                  $('.modal-backdrop').remove();
                  //create_odontogram();   
                  $('#btn-show').show();
                  $('#btn-tmbh').hide();
                  $('#btn-buat').hide();
                }
              },
            error:function(){
                alert('error ... ');
              }
          });
        }); 

        //simpan perawatan
        // $("#btn-buat-baru").click(function(e){
        //   $.ajax({
        //     type: "POST",
        //     url: "<?php echo base_url('c_dokter/insert_perawatan');?>",
        //     data: {id_perawatan : last_id_perawatan, id_pasien : id_pasien,temuan_masalah : $('#temuan_masalah').val(), gigi : x, diagnosa : $('#diagnosa').val() , kode_icd : correspondingID, kode_icd1 : correspondingID2, kode_icd2 : correspondingID3, perawatan : $('#perawatan').val(), pencatat : mem_id },
        //       dataType:'json',
        //     success:function(data){
        //         if (data.status) {
        //           alert('sukses!');
        //           $('#redirect-perawatan').modal('hide');
        //           $('.modal-backdrop').remove();
        //           $('#btn-show').hide();
        //           $('#btn-tmbh').show();
        //         }
        //       },
        //     error:function(){
        //         alert('error ... ');
        //       }
        //   });
        // }); 

        //update data odon
        $('#btn-simpan-data').click(function(e){
          $.ajax({
            type: "POST",
            url: "<?php echo base_url('c_dokter/update_data_odon');?>",
            data: $('#form2').serialize(),
            dataType:'json',
            success:function(data){
                if (data.status) {
                  alert('data sukses diubah');
                  $('#edit').modal('hide');
                  $('.modal-backdrop').hide();
                  loadTable();
                }
              },
            error:function(){
                alert('data gagal di ubah ');
              }
          });
        });
        //show n hide modal edit
        $("#btn-edit").click(function(){
          $('#edit').modal("show").on('hide', function() {
            $('#edit').modal('hide');
          });
        });

        //isi data odon pertama kali
        $('#btn-isi').click(function(e){
          $.ajax({
            type: "POST",
            url: "<?php echo base_url('c_dokter/insert_data_odon');?>",
            data: $('#form3').serialize(),
            dataType:'json',
            success:function(data){
                if (data.status) {
                  alert('sukses!');
                  $('#isi_data').modal('hide');
                  loadTable();
                }
              },
            error:function(){
                alert('error ... ');
              }
          });

        });

        // loadTable('tb-data');

        function loadTable(){
          $.ajax({
            type: "GET",
            url: "<?php echo base_url('c_dokter/get_data_odon/');?>"+id_pasien,
            dataType:'json',
            success:function(data){
              console.log(data.data);
                  //set tabel data
                  $('#occlusi').html(data.data[0].occlusi);
                  $('#torus_palatinus').html(data.data[0].torus_palatinus);
                  $('#torus_mandibularis').html(data.data[0].torus_mandibularis);
                  $('#palatum').html(data.data[0].palatum);
                  $('#diastema').html(data.data[0].diastema);
                  $('#gigi_anomali').html(data.data[0].gigi_anomali);
                  $('#lainnya').html(data.data[0].lainnya);
                  $('#ket1').html(data.data[0].ket1);
                  $('#ket2').html(data.data[0].ket2);
                  $('#decay').html(data.data[0].decay);
                  $('#missing').html(data.data[0].missing);
                  $('#fill').html(data.data[0].fill);
              },
            error:function(){
                alert('error ... ');
              }
          });
        }
        

        function add(gigi, posisi, kondisi){ 
            $.ajax({
              url:"<?php echo base_url('c_dokter/insert_odontogram');?>",
              type:"POST",
              data:{ id_pasien : id_pasien, 
                id_start_odon : id_start_odon, gigi ,posisi ,
                kondisi, pencatat : mem_id},
              dataType:'json',
              success:function(data){
                if (data.status) {
                  alert('sukses');
                  addToTable(gigi, posisi, kondisi);
                  child_mapping(gigi, posisi, kondisi); 
                  tampil_gigi.push(gigi);
                }
              },
              error:function(){
                alert('gagal di insert');
              }

            });
        }

        function child_mapping(gigi, posisi, kondisi){
          var cc = $('span#P'+gigi).parent().parent().attr('id');
          var inside = $('#'+cc+' td').eq(1).text();
            if (ank.indexOf(gigi) > -1) {
              if (inside.indexOf(gigi) == -1) {              
                $('#'+cc+' td').eq(1).append(" "+gigi+" : ");
                if (cond.indexOf(kondisi) > -1){
                  if (pos_gigi_kiri.indexOf(gigi) > -1) {
                    if (posisi=="C") {
                    $('#'+cc+' td').eq(1).append(" O ");
                    }else if (posisi=="T") {
                      $('#'+cc+' td').eq(1).append(" V ");
                    }else if (posisi=="B") {
                      $('#'+cc+' td').eq(1).append(" L ");            
                    }else if (posisi=="L") {
                      $('#'+cc+' td').eq(1).append(" D ");
                    }else if (posisi=="R") {
                      $('#'+cc+' td').eq(1).append(" M ");
                    } 
                  }else{
                    console.log("kanan");
                    if (posisi=="L") {  
                      $('#'+cc+' td').eq(1).append(" M ");
                    }else if (posisi=="R") {
                      $('#'+cc+' td').eq(1).append(" D ");
                    }else if (posisi=="T") {
                      $('#'+cc+' td').eq(1).append(" V ");
                    }else if (posisi=="B") {                  
                      $('#'+cc+' td').eq(1).append(" L ");
                    }else if (posisi=="C") {                   
                      $('#'+cc+' td').eq(1).append(" O ");
                    }             
                  } 
                }
              }else{
              if (cond.indexOf(kondisi) > -1){
                  if (pos_gigi_kiri.indexOf(gigi) > -1) {
                    if (posisi=="C") {
                    $('#'+cc+' td').eq(1).append(" O ");
                    }else if (posisi=="T") {
                      $('#'+cc+' td').eq(1).append(" V ");
                    }else if (posisi=="B") {
                      $('#'+cc+' td').eq(1).append(" L ");   
                    }else if (posisi=="L") {
                      $('#'+cc+' td').eq(1).append(" D ");
                    }else if (posisi=="R") {
                      $('#'+cc+' td').eq(1).append(" M ");
                    }                        
                  }else{
                    if (posisi=="L") {  
                      $('#'+cc+' td').eq(1).append(" M ");
                    }else if (posisi=="R") {
                      $('#'+cc+' td').eq(1).append(" D ");
                    }else if (posisi=="T") {
                      $('#'+cc+' td').eq(1).append(" V ");
                    }else if (posisi=="B") {                  
                      $('#'+cc+' td').eq(1).append(" L ");
                    }else if (posisi=="C") {                   
                      $('#'+cc+' td').eq(1).append(" O ");
                    }             
                  } 
                }
              }
            }
            $('#'+cc+' td').eq(1).append(kondisi+" ");
          }
        

        function addToTable(gigi, posisi, kondisi){
          var inside = $('#P'+gigi+' td').eq(1).text();
          if (gigi_ttt.indexOf(gigi) > -1) {
            if (inside.indexOf(gigi) == -1) {              
            $('#P'+gigi+' td').eq(1).append(" "+gigi+" : ");
            if (cond.indexOf(kondisi) > -1){
              if (pos_gigi_kiri.indexOf(gigi) > -1) {
                if (posisi=="C") {
                $('#P'+gigi+' td').eq(1).append("O ");
                }else if (posisi=="T") {
                  $('#P'+gigi+' td').eq(1).append("V ");
                }else if (posisi=="B") {
                  $('#P'+gigi+' td').eq(1).append("L ");            
                }else if (posisi=="L") {
                  $('#P'+gigi+' td').eq(1).append("D ");
                }else if (posisi=="R") {
                  $('#P'+gigi+' td').eq(1).append("M ");
                }                        
              }else{
                if (posisi=="L") {  
                  $('#P'+gigi+' td').eq(1).append(" M ");
                }else if (posisi=="R") {
                  $('#P'+gigi+' td').eq(1).append(" D ");
                }else if (posisi=="T") {
                  $('#P'+gigi+' td').eq(1).append(" V ");
                }else if (posisi=="B") {                  
                  $('#P'+gigi+' td').eq(1).append(" L ");
                }else if (posisi=="C") {                   
                  $('#P'+gigi+' td').eq(1).append(" O ");
                }        
              }
            }
            $('#P'+gigi+' td').eq(1).append(" "+kondisi);
            }else{
              if (cond.indexOf(kondisi) > -1){
                if (pos_gigi_kiri.indexOf(gigi) > -1) {
                  if (posisi=="C") {
                  $('#P'+gigi+' td').eq(1).append(" O ");
                }else if (posisi=="T") {
                  $('#P'+gigi+' td').eq(1).append(" V ");
                }else if (posisi=="B") {
                  $('#P'+gigi+' td').eq(1).append(" L ");            
                }else if (posisi=="L") {
                  $('#P'+gigi+' td').eq(1).append(" D ");
                }else if (posisi=="R") {
                  $('#P'+gigi+' td').eq(1).append(" M ");
                }                        
              }else{
                if (posisi=="L") {  
                  $('#P'+gigi+' td').eq(1).append(" M ");
                }else if (posisi=="R") {
                  $('#P'+gigi+' td').eq(1).append(" D ");
                }else if (posisi=="T") {
                  $('#P'+gigi+' td').eq(1).append(" V ");
                }else if (posisi=="B") {                  
                  $('#P'+gigi+' td').eq(1).append(" L ");
                }else if (posisi=="C") {                   
                  $('#P'+gigi+' td').eq(1).append(" O ");
                }        
              }
            }
            $('#P'+gigi+' td').eq(1).append(" "+kondisi);
            }
          }else{
            if (cond.indexOf(kondisi) > -1){
                if (pos_gigi_kiri.indexOf(gigi) > -1) {
                  if (posisi=="C") {
                  $('#P'+gigi+' td').eq(1).append(" O ");
                }else if (posisi=="T") {
                  $('#P'+gigi+' td').eq(1).append(" V ");
                }else if (posisi=="B") {
                  $('#P'+gigi+' td').eq(1).append(" L ");            
                }else if (posisi=="L") {
                  $('#P'+gigi+' td').eq(1).append(" D ");
                }else if (posisi=="R") {
                  $('#P'+gigi+' td').eq(1).append(" M ");
                }                        
              }else{
                if (posisi=="L") {  
                  $('#P'+gigi+' td').eq(1).append(" M ");
                }else if (posisi=="R") {
                  $('#P'+gigi+' td').eq(1).append(" D ");
                }else if (posisi=="T") {
                  $('#P'+gigi+' td').eq(1).append(" V ");
                }else if (posisi=="B") {                  
                  $('#P'+gigi+' td').eq(1).append(" L ");
                }else if (posisi=="C") {                   
                  $('#P'+gigi+' td').eq(1).append(" O ");
                }        
              }
            }
            $('#P'+gigi+' td').eq(1).append(" "+kondisi);
          } 
        }

        function hapus(gigi, posisi, kondisi){
          $.ajax({
              url:"<?php echo base_url('c_dokter/delete_odontogram');?>",
              type:"POST",
              data:{ gigi ,posisi ,kondisi},
              dataType:'json',
              success:function(data){
                if (data.status) {
                  alert('sukses hapus');
                  pos_temp.splice( $.inArray(gigi,pos_temp) ,1 );
                  console.log(pos_temp.length);
                  if (ank.indexOf(gigi) >= 0) {
                    var cc = $('span#P'+gigi).parent().parent().attr('id');
                    var inside = $('#'+cc+' td').eq(1).text();
                    console.log(inside);
                    if (cond.indexOf(kondisi) > -1) {
          
                    // var substr = kondisi;
                    // var parts = [];
                    // parts = inside.split(substr);
                    // var before = parts[0];
                    // var after = parts[1];
                    // $('#'+cc+' td').eq(1).text(function(index, currentText) {
                    //   return currentText.replace(after, "");
                    // });
                    }else{
                      $('#'+cc+' td').eq(1).text(function(index, currentText) {
                      return currentText.replace(kondisi, '');
                    });
                    }
                  }else{
                    if(gigi_ttt.indexOf(gigi) >= 0){
                      if (cond.indexOf(kondisi) > -1) {
                    var inside = $('#P'+gigi+' td').eq(1).text();
                    console.log(inside);
                    var substr = kondisi;
                    var parts = [];
                    parts = inside.split(substr);
                    var before = parts[0];
                    var after = parts[1];
                    $('#P'+gigi+' td').eq(1).text(function(index, currentText) {
                      return currentText.replace(kondisi, "").replace(before, "");
                    });
                    }else{
                      $('#P'+gigi+' td').eq(1).text(function(index, currentText) {
                      return currentText.replace(kondisi, "").replace(gigi, "");
                      });
                    }
                    }else{
                      $('#P'+gigi+' td').eq(1).text(function(index, currentText) {
                      return currentText.replace(kondisi, "").replace(gigi, "");
                      });
                    }
                  }    
                }
              },
              error:function(){
                alert('gagal ');
              }

            });
        }

        function cek_kondisi(kondisi){
          if (pos_gigi_kiri.indexOf(gigi) > -1) {
                if (posisi=="C") {
                $('#P'+gigi+' td').eq(1).append("O ");
                }else if (posisi=="T") {
                  $('#P'+gigi+' td').eq(1).append("V ");
                }else if (posisi=="B") {
                  $('#P'+gigi+' td').eq(1).append("L ");            
                }else if (posisi=="L") {
                  $('#P'+gigi+' td').eq(1).append("D ");
                }else if (posisi=="R") {
                  $('#P'+gigi+' td').eq(1).append("M ");
                }                        
              }else{
                if (posisi=="L") {  
                  $('#P'+gigi+' td').eq(1).append(" M ");
                }else if (posisi=="R") {
                  $('#P'+gigi+' td').eq(1).append(" D ");
                }else if (posisi=="T") {
                  $('#P'+gigi+' td').eq(1).append(" V ");
                }else if (posisi=="B") {                  
                  $('#P'+gigi+' td').eq(1).append(" L ");
                }else if (posisi=="C") {                   
                  $('#P'+gigi+' td').eq(1).append(" O ");
                }        
              }

        }

        function perOdontogram(id_odn){
          $.ajax({
            url:"<?php echo base_url('c_dokter/loadPerOdn');?>",
              type:"POST",
              data:{ id_start_odon: id_odn
              },
              dataType:'json',
              success:function(data){
                alert("benar");
                //console.log(data);
                if (!data.status) {
                  $('.amf , .gif , .cof , .fis , .inl , .logammulia').css({fill: "#ffffff"});
                  $('.car').attr("stroke-width", -2 );
                  var findclass = $('#svgselect').find('.rct  , .nvt , .non , .une , .pre , .ano , .cfr , .mis , .poc , .fmc , .prd , .fld , .ipx , .sqrmeb , .linemeb , .sqrpob , .linepob , .pattpob , .rrx , .mpc , .gmc , .pon , .abu , .acr , .imv , .dia , .att , .abr , .sou');
                  console.log(findclass);
                  console.log(findclass.length);
                  findclass.remove();
                  $("#tabb tr").each(function(){
                    $(this).find("td:eq(1)").empty();
                  });
                  $.each(data.perOdn, function(index) { 
                    addToTable(data.perOdn[index].gigi, data.perOdn[index].posisi, data.perOdn[index].kondisi);
                    child_mapping(data.perOdn[index].gigi, data.perOdn[index].posisi, data.perOdn[index].kondisi);
                      if (data.perOdn[index].kondisi == "amf") {
                        $("#"+data.perOdn[index].gigi).find("#"+data.perOdn[index].posisi).attr("class", "amf");
                        act = $("#"+data.perOdn[index].gigi).find("#"+data.perOdn[index].posisi).hasClass("amf");
                        if (act) {
                          $("#"+data.perOdn[index].gigi).find("#"+data.perOdn[index].posisi).css({fill: "#333333"});
                          } 
                      }else if(data.perOdn[index].kondisi=="cof"){
                        $("#"+data.perOdn[index].gigi).find("#"+data.perOdn[index].posisi).addClass("cof");
                        act = $("#"+data.perOdn[index].gigi).find("#"+data.perOdn[index].posisi).hasClass("cof");
                        if (act) {
                          $("#"+data.perOdn[index].gigi).find("#"+data.perOdn[index].posisi).css({fill: "#00ff33"});
                          }

                      }else if(data.perOdn[index].kondisi=="fis"){
                        $("#"+data.perOdn[index].gigi).find("#"+data.perOdn[index].posisi).addClass("fis");
                        act = $("#"+data.perOdn[index].gigi).find("#"+data.perOdn[index].posisi).hasClass("fis");
                        if (act) {
                          $("#"+data.perOdn[index].gigi).find("#"+data.perOdn[index].posisi).css({fill: "#eed0d0"});
                          } 
                      }else if(data.perOdn[index].kondisi=="gif") {
                        $("#"+data.perOdn[index].gigi).find("#"+data.perOdn[index].posisi).addClass("gif");
                        act = $("#"+data.perOdn[index].gigi).find("#"+data.perOdn[index].posisi).hasClass("gif");
                        if (act) {
                          $("#"+data.perOdn[index].gigi).find("#"+data.perOdn[index].posisi).css({fill: "#00ff33"});
                          }
                      }else if(data.perOdn[index].kondisi=="inl") {
                        $("#"+data.perOdn[index].gigi).find("#"+data.perOdn[index].posisi).addClass("inl");
                        act = $("#"+data.perOdn[index].gigi).find("#"+data.perOdn[index].posisi).hasClass("inl");
                        if (act) {
                          $("#"+data.perOdn[index].gigi).find("#"+data.perOdn[index].posisi).css({fill: "#00ff33"});
                          }           
                      }else if (data.perOdn[index].kondisi=="logammulia") {
                        $("#"+data.perOdn[index].gigi).find("#"+data.perOdn[index].posisi).addClass("logammulia");
                        act = $("#"+data.perOdn[index].gigi).find("#"+data.perOdn[index].posisi).hasClass("logammulia");
                        if (act) {
                          $("#"+data.perOdn[index].gigi).find("#"+data.perOdn[index].posisi).css({fill: "#db172a"});
                        }
                  }else if (data.perOdn[index].kondisi=="rct") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();      
                        var svgns = "http://www.w3.org/2000/svg";
                        var shape = document.createElementNS(svgns, "polygon");
                        shape.setAttribute("points", "-5,0, 5,0, 0,7");
                        shape.setAttributeNS(null, "fill", "black");
                        var xPos = (bbox.x + bbox.width / 2); 
                        var yPos = (bbox.y + bbox.height / 2); 
                        shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        shape.setAttribute("class", "rct");
                        pDoc.appendChild(shape);
                  }else if (data.perOdn[index].kondisi=="nvt") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var shape = document.createElementNS(svgns, "polygon");
                        shape.setAttribute('id','nvt');
                        shape.setAttribute("points", "-5,0, 5,0, 0,7");
                        shape.setAttributeNS(null, "fill", "none");
                        shape.setAttributeNS(null, "stroke", "black")
                        var xPos = bbox.x + bbox.width / 2;  
                        var yPos = bbox.y + bbox.height / 2;     
                        shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        shape.setAttribute("class", "nvt");
                        pDoc.appendChild(shape);
                  }else if (data.perOdn[index].kondisi=="non") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'NON';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xPos = bbox.x ; 
                        var yPos = bbox.y ;  
                        text.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        text.setAttribute("class","non");
                        pDoc.appendChild(text);
                  }else if (data.perOdn[index].kondisi=="une") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'UNE';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xPos = bbox.x ;
                        var yPos = bbox.y ;    
                        text.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        text.setAttribute("class","une");
                        pDoc.appendChild(text);
                  }else if (data.perOdn[index].kondisi=="pre") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'PRE';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xPos = bbox.x ; 
                        var yPos = bbox.y ;  
                        text.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        text.setAttribute("class","pre");
                        pDoc.appendChild(text);
                  }else if (data.perOdn[index].kondisi=="ano") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'ANO';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xPos = bbox.x ;  
                        var yPos = bbox.y ;  
                        text.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        text.setAttribute("class", "ano");
                        pDoc.appendChild(text);
                  }else if (data.perOdn[index].kondisi=="cfr") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var line = document.createElementNS(svgns, "path");
                        line.setAttribute('d', 'M 3,7 L 11,-9 M 9,7 L 16,-9 M 1,1 L 18,1 M 1,-5 L 18,-5');
                        line.setAttribute("fill", "none");
                        line.setAttribute("stroke", "black");
                        var xPos = bbox.x + bbox.width / 7 ;  
                        var yPos = bbox.y + bbox.height / 3.5  ;   
                        line.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        line.setAttribute("class", "cfr");
                        pDoc.appendChild(line);
                  }else if (data.perOdn[index].kondisi=="car") {
                        $("#"+data.perOdn[index].gigi).find("#"+data.perOdn[index].posisi).addClass("car");
                        act = $("#"+data.perOdn[index].gigi).find("#"+data.perOdn[index].posisi).hasClass("car");
                        if (act) {
                          $("#"+data.perOdn[index].gigi).find("#"+data.perOdn[index].posisi).attr("stroke-width", 2 );
                        }        
                  }else if (data.perOdn[index].kondisi=="mis") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var line = document.createElementNS(svgns, "path");
                        line.setAttribute('d', 'M -6,-13 L 6,13 M 6,-13 L -6,13');
                        line.setAttribute("fill", "none");
                        line.setAttribute("stroke", "black");
                        var xPos = bbox.x + bbox.width / 2; 
                        var yPos = bbox.y + 10;  
                        line.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        line.setAttribute("class", "mis");
                        pDoc.appendChild(line);
                  }else if (data.perOdn[index].kondisi=="poc") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var shape = document.createElementNS(svgns, "polygon");
                        var pattern = document.createElementNS(svgns, "path");
                        shape.setAttribute("points", "0,0, 0,20, 20,20, 20,0");
                        shape.setAttributeNS(null, "fill", "none");
                        shape.setAttributeNS(null, "stroke", "black");
                        shape.setAttributeNS(null, "stroke-width", 2.5);
                        var xPos = bbox.x ;  
                        var yPos = bbox.y ;    
                        shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        pattern.setAttribute('d','M 5,0 L 5,20 M 10,0 L 10,20 M 15,0 L 15,20');
                        pattern.setAttributeNS(null, "fill", "none");
                        pattern.setAttributeNS(null, "stroke", "black");
                        pattern.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        shape.setAttribute("class", "square");
                        pattern.setAttribute("class", "line");
                        pDoc.appendChild(shape);
                        pDoc.appendChild(pattern);
                  }else if (data.perOdn[index].kondisi=="fmc") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var shape = document.createElementNS(svgns, "polygon");
                        shape.setAttribute("points", "0,0, 0,20, 20,20, 20,0");
                        shape.setAttributeNS(null, "fill", "none");
                        shape.setAttributeNS(null, "stroke", "black")
                        shape.setAttributeNS(null, "stroke-width", 2.5);
                        var xPos = bbox.x ;  
                        var yPos = bbox.y ;    
                        shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        shape.setAttribute("class", "fmc");
                        pDoc.appendChild(shape);
                  }else if (data.perOdn[index].kondisi=="prd") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'PRD';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "prd");
                        pDoc.appendChild(text);
                  }else if (data.perOdn[index].kondisi=="fld") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'FLD';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "fld");
                        pDoc.appendChild(text);
                  }else if (data.perOdn[index].kondisi=="ipx") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'IPX';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "ipx");
                        pDoc.appendChild(text);
                  }else if (data.perOdn[index].kondisi=="meb") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var shape = document.createElementNS(svgns, "polygon");
                        var line = document.createElementNS(svgns, "path");
                        shape.setAttribute("points", "0,0, 0,20, 20,20, 20,0");
                        shape.setAttributeNS(null, "fill", "none");
                        shape.setAttributeNS(null, "stroke", "black");
                        shape.setAttributeNS(null, "stroke-width", 2.5);
                        line.setAttribute('d', 'M -3,-5 L 23,-5');
                        line.setAttributeNS(null, "fill", "none");
                        line.setAttributeNS(null, "stroke", "black");
                        var xPos = bbox.x ;  
                        var yPos = bbox.y ;    
                        shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        line.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        shape.setAttribute("class", "sqrmeb");
                        line.setAttribute("class", "linemeb");
                        pDoc.appendChild(shape);
                        pDoc.appendChild(line);
                  }else if (data.perOdn[index].kondisi=="pob") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var shape = document.createElementNS(svgns, "polygon");
                        var pattern = document.createElementNS(svgns, "path");
                        var line = document.createElementNS(svgns, "path");
                        shape.setAttribute("points", "0,0, 0,20, 20,20, 20,0");
                        shape.setAttributeNS(null, "fill", "none");
                        shape.setAttributeNS(null, "stroke", "black");
                        shape.setAttributeNS(null, "stroke-width", 2.5);
                        var xPos = bbox.x ;  
                        var yPos = bbox.y ;    
                        shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        pattern.setAttribute('d', 'M 5,0 L 5,20 M 10,0 L 10,20 M 15,0 L 15,20');
                        pattern.setAttributeNS(null, "fill", "none");
                        pattern.setAttributeNS(null, "stroke", "black");
                        pattern.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        line.setAttribute('d', 'M -3,-5 L 23,-5');
                        line.setAttributeNS(null, "fill", "none");
                        line.setAttributeNS(null, "stroke", "black");
                        line.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        shape.setAttribute("class", "sqrpob");
                        pattern.setAttribute("class", "pattpob");
                        line.setAttribute("class", "linepob");
                        pDoc.appendChild(shape);
                        pDoc.appendChild(pattern);
                        pDoc.appendChild(line);
                  }else if (data.perOdn[index].kondisi=="rrx") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var line = document.createElementNS(svgns, "path");
                        line.setAttribute('d', 'M 7,-25 L 0,9 M 0,9 L -7,-15');
                        line.setAttribute("stroke", "black");
                        var xPos = bbox.x + bbox.width / 1.7  ;  
                        var yPos = bbox.y + bbox.height / 2.7;     
                        line.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        line.setAttribute("class", "rrx");
                        pDoc.appendChild(line);
                        console.log(poss);
                 }else if (data.perOdn[index].kondisi=="mpc") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'mpc';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "mpc");
                        pDoc.appendChild(text);
                 }else if (data.perOdn[index].kondisi=="gmc") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'gmc';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "gmc");
                        pDoc.appendChild(text);
                 }else if (data.perOdn[index].kondisi=="pon") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'pon';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "pon");
                        pDoc.appendChild(text);

                 }else if (data.perOdn[index].kondisi=="abu") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'abu';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "abu");
                        pDoc.appendChild(text);
                 }else if (data.perOdn[index].kondisi=="acr") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'acr';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "acr");
                        pDoc.appendChild(text);
                 }else if (data.perOdn[index].kondisi=="imv") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'imv';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "imv");
                        pDoc.appendChild(text);
                 }else if (data.perOdn[index].kondisi=="dia") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'dia';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "dia");
                        pDoc.appendChild(text);
                 }else if (data.perOdn[index].kondisi=="att") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'att';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "att");
                        pDoc.appendChild(text);
                 }else if (data.perOdn[index].kondisi=="abr") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'abr';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "abr");
                        pDoc.appendChild(text);
                 }else if (data.perOdn[index].kondisi=="sou") {
                        var poss = data.perOdn[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'sou';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "sou");
                        pDoc.appendChild(text);

                 }
                  });  
                }

              },
              error:function(){
                alert('error ... ');
              }
          });
        }

        function spesific_record(tgl, id_pasien) {
          $.ajax({
              url:"<?php echo base_url('c_dokter/spesific_odontogram');?>",
              type:"POST",
              data:{ tgl: tgl,
                id_pasien: id_pasien
              },
              dataType:'json',
              success:function(data){
                console.log(data);
                if (!data.status) {
                  $('#tanggal').html(" tanggal "+tgl);
                  alert('sukses ....');
                  $('.amf , .gif , .cof , .fis , .inl , .logammulia').css({fill: "#ffffff"});
                  $('.car').attr("stroke-width", -2 );
                  var findclass = $('#svgselect').find('.rct  , .nvt , .non , .une , .pre , .ano , .cfr , .mis , .poc , .fmc , .prd , .fld , .ipx , .sqrmeb , .linemeb , .sqrpob , .linepob , .pattpob , .rrx , .mpc , .gmc , .pon , .abu , .acr , .imv , .dia , .att , .abr , .sou');
                  console.log(findclass);
                  console.log(findclass.length);
                  findclass.remove();
                  $("#tabb tr").each(function(){
                    $(this).find("td:eq(1)").empty();
                  });
                  $.each(data.record, function(index) { 
                    addToTable(data.record[index].gigi, data.record[index].posisi, data.record[index].kondisi);
                    child_mapping(data.record[index].gigi, data.record[index].posisi, data.record[index].kondisi);
                      if (data.record[index].kondisi == "amf") {
                        $("#"+data.record[index].gigi).find("#"+data.record[index].posisi).attr("class", "amf");
                        act = $("#"+data.record[index].gigi).find("#"+data.record[index].posisi).hasClass("amf");
                        if (act) {
                          $("#"+data.record[index].gigi).find("#"+data.record[index].posisi).css({fill: "#333333"});
                          } 
                      }else if(data.record[index].kondisi=="cof"){
                        $("#"+data.record[index].gigi).find("#"+data.record[index].posisi).addClass("cof");
                        act = $("#"+data.record[index].gigi).find("#"+data.record[index].posisi).hasClass("cof");
                        if (act) {
                          $("#"+data.record[index].gigi).find("#"+data.record[index].posisi).css({fill: "#00ff33"});
                          }

                      }else if(data.record[index].kondisi=="fis"){
                        $("#"+data.record[index].gigi).find("#"+data.record[index].posisi).addClass("fis");
                        act = $("#"+data.record[index].gigi).find("#"+data.record[index].posisi).hasClass("fis");
                        if (act) {
                          $("#"+data.record[index].gigi).find("#"+data.record[index].posisi).css({fill: "#eed0d0"});
                          } 
                      }else if(data.record[index].kondisi=="gif") {
                        $("#"+data.record[index].gigi).find("#"+data.record[index].posisi).addClass("gif");
                        act = $("#"+data.record[index].gigi).find("#"+data.record[index].posisi).hasClass("gif");
                        if (act) {
                          $("#"+data.record[index].gigi).find("#"+data.record[index].posisi).css({fill: "#00ff33"});
                          }
                      }else if(data.record[index].kondisi=="inl") {
                        $("#"+data.record[index].gigi).find("#"+data.record[index].posisi).addClass("inl");
                        act = $("#"+data.record[index].gigi).find("#"+data.record[index].posisi).hasClass("inl");
                        if (act) {
                          $("#"+data.record[index].gigi).find("#"+data.record[index].posisi).css({fill: "#00ff33"});
                          }           
                      }else if (data.record[index].kondisi=="logammulia") {
                        $("#"+data.record[index].gigi).find("#"+data.record[index].posisi).addClass("logammulia");
                        act = $("#"+data.record[index].gigi).find("#"+data.record[index].posisi).hasClass("logammulia");
                        if (act) {
                          $("#"+data.record[index].gigi).find("#"+data.record[index].posisi).css({fill: "#db172a"});
                        }
                  }else if (data.record[index].kondisi=="rct") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();      
                        var svgns = "http://www.w3.org/2000/svg";
                        var shape = document.createElementNS(svgns, "polygon");
                        shape.setAttribute("points", "-5,0, 5,0, 0,7");
                        shape.setAttributeNS(null, "fill", "black");
                        var xPos = (bbox.x + bbox.width / 2); 
                        var yPos = (bbox.y + bbox.height / 2); 
                        shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        shape.setAttribute("class", "rct");
                        pDoc.appendChild(shape);
                  }else if (data.record[index].kondisi=="nvt") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var shape = document.createElementNS(svgns, "polygon");
                        shape.setAttribute('id','nvt');
                        shape.setAttribute("points", "-5,0, 5,0, 0,7");
                        shape.setAttributeNS(null, "fill", "none");
                        shape.setAttributeNS(null, "stroke", "black")
                        var xPos = bbox.x + bbox.width / 2;  
                        var yPos = bbox.y + bbox.height / 2;     
                        shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        shape.setAttribute("class", "nvt");
                        pDoc.appendChild(shape);
                  }else if (data.record[index].kondisi=="non") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'NON';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xPos = bbox.x ; 
                        var yPos = bbox.y ;  
                        text.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        text.setAttribute("class","non");
                        pDoc.appendChild(text);
                  }else if (data.record[index].kondisi=="une") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'UNE';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xPos = bbox.x ;
                        var yPos = bbox.y ;    
                        text.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        text.setAttribute("class","une");
                        pDoc.appendChild(text);
                  }else if (data.record[index].kondisi=="pre") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'PRE';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xPos = bbox.x ; 
                        var yPos = bbox.y ;  
                        text.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        text.setAttribute("class","pre");
                        pDoc.appendChild(text);
                  }else if (data.record[index].kondisi=="ano") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'ANO';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xPos = bbox.x ;  
                        var yPos = bbox.y ;  
                        text.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        text.setAttribute("class", "ano");
                        pDoc.appendChild(text);
                  }else if (data.record[index].kondisi=="cfr") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var line = document.createElementNS(svgns, "path");
                        line.setAttribute('d', 'M 3,7 L 11,-9 M 9,7 L 16,-9 M 1,1 L 18,1 M 1,-5 L 18,-5');
                        line.setAttribute("fill", "none");
                        line.setAttribute("stroke", "black");
                        var xPos = bbox.x + bbox.width / 7 ;  
                        var yPos = bbox.y + bbox.height / 3.5  ;   
                        line.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        line.setAttribute("class", "cfr");
                        pDoc.appendChild(line);
                  }else if (data.record[index].kondisi=="car") {
                        $("#"+data.record[index].gigi).find("#"+data.record[index].posisi).addClass("car");
                        act = $("#"+data.record[index].gigi).find("#"+data.record[index].posisi).hasClass("car");
                        if (act) {
                          $("#"+data.record[index].gigi).find("#"+data.record[index].posisi).attr("stroke-width", 2 );
                        }        
                  }else if (data.record[index].kondisi=="mis") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var line = document.createElementNS(svgns, "path");
                        line.setAttribute('d', 'M -6,-13 L 6,13 M 6,-13 L -6,13');
                        line.setAttribute("fill", "none");
                        line.setAttribute("stroke", "black");
                        var xPos = bbox.x + bbox.width / 2; 
                        var yPos = bbox.y + 10;  
                        line.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        line.setAttribute("class", "mis");
                        pDoc.appendChild(line);
                  }else if (data.record[index].kondisi=="poc") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var shape = document.createElementNS(svgns, "polygon");
                        var pattern = document.createElementNS(svgns, "path");
                        shape.setAttribute("points", "0,0, 0,20, 20,20, 20,0");
                        shape.setAttributeNS(null, "fill", "none");
                        shape.setAttributeNS(null, "stroke", "black");
                        shape.setAttributeNS(null, "stroke-width", 2.5);
                        var xPos = bbox.x ;  
                        var yPos = bbox.y ;    
                        shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        pattern.setAttribute('d','M 5,0 L 5,20 M 10,0 L 10,20 M 15,0 L 15,20');
                        pattern.setAttributeNS(null, "fill", "none");
                        pattern.setAttributeNS(null, "stroke", "black");
                        pattern.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        shape.setAttribute("class", "square");
                        pattern.setAttribute("class", "line");
                        pDoc.appendChild(shape);
                        pDoc.appendChild(pattern);
                  }else if (data.record[index].kondisi=="fmc") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var shape = document.createElementNS(svgns, "polygon");
                        shape.setAttribute("points", "0,0, 0,20, 20,20, 20,0");
                        shape.setAttributeNS(null, "fill", "none");
                        shape.setAttributeNS(null, "stroke", "black")
                        shape.setAttributeNS(null, "stroke-width", 2.5);
                        var xPos = bbox.x ;  
                        var yPos = bbox.y ;    
                        shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        shape.setAttribute("class", "fmc");
                        pDoc.appendChild(shape);
                  }else if (data.record[index].kondisi=="prd") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'PRD';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "prd");
                        pDoc.appendChild(text);
                  }else if (data.record[index].kondisi=="fld") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'FLD';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "fld");
                        pDoc.appendChild(text);
                  }else if (data.record[index].kondisi=="ipx") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'IPX';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "ipx");
                        pDoc.appendChild(text);
                  }else if (data.record[index].kondisi=="meb") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var shape = document.createElementNS(svgns, "polygon");
                        var line = document.createElementNS(svgns, "path");
                        shape.setAttribute("points", "0,0, 0,20, 20,20, 20,0");
                        shape.setAttributeNS(null, "fill", "none");
                        shape.setAttributeNS(null, "stroke", "black");
                        shape.setAttributeNS(null, "stroke-width", 2.5);
                        line.setAttribute('d', 'M -3,-5 L 23,-5');
                        line.setAttributeNS(null, "fill", "none");
                        line.setAttributeNS(null, "stroke", "black");
                        var xPos = bbox.x ;  
                        var yPos = bbox.y ;    
                        shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        line.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        shape.setAttribute("class", "sqrmeb");
                        line.setAttribute("class", "linemeb");
                        pDoc.appendChild(shape);
                        pDoc.appendChild(line);
                  }else if (data.record[index].kondisi=="pob") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var shape = document.createElementNS(svgns, "polygon");
                        var pattern = document.createElementNS(svgns, "path");
                        var line = document.createElementNS(svgns, "path");
                        shape.setAttribute("points", "0,0, 0,20, 20,20, 20,0");
                        shape.setAttributeNS(null, "fill", "none");
                        shape.setAttributeNS(null, "stroke", "black");
                        shape.setAttributeNS(null, "stroke-width", 2.5);
                        var xPos = bbox.x ;  
                        var yPos = bbox.y ;    
                        shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        pattern.setAttribute('d', 'M 5,0 L 5,20 M 10,0 L 10,20 M 15,0 L 15,20');
                        pattern.setAttributeNS(null, "fill", "none");
                        pattern.setAttributeNS(null, "stroke", "black");
                        pattern.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        line.setAttribute('d', 'M -3,-5 L 23,-5');
                        line.setAttributeNS(null, "fill", "none");
                        line.setAttributeNS(null, "stroke", "black");
                        line.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        shape.setAttribute("class", "sqrpob");
                        pattern.setAttribute("class", "pattpob");
                        line.setAttribute("class", "linepob");
                        pDoc.appendChild(shape);
                        pDoc.appendChild(pattern);
                        pDoc.appendChild(line);
                  }else if (data.record[index].kondisi=="rrx") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var line = document.createElementNS(svgns, "path");
                        line.setAttribute('d', 'M 7,-25 L 0,9 M 0,9 L -7,-15');
                        line.setAttribute("stroke", "black");
                        var xPos = bbox.x + bbox.width / 1.7  ;  
                        var yPos = bbox.y + bbox.height / 2.7;     
                        line.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        line.setAttribute("class", "rrx");
                        pDoc.appendChild(line);
                        console.log(poss);
                 }else if (data.record[index].kondisi=="mpc") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'mpc';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "mpc");
                        pDoc.appendChild(text);
                 }else if (data.record[index].kondisi=="gmc") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'gmc';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "gmc");
                        pDoc.appendChild(text);
                 }else if (data.record[index].kondisi=="pon") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'pon';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "pon");
                        pDoc.appendChild(text);

                 }else if (data.record[index].kondisi=="abu") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'abu';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "abu");
                        pDoc.appendChild(text);
                 }else if (data.record[index].kondisi=="acr") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'acr';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "acr");
                        pDoc.appendChild(text);
                 }else if (data.record[index].kondisi=="imv") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'imv';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "imv");
                        pDoc.appendChild(text);
                 }else if (data.record[index].kondisi=="dia") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'dia';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "dia");
                        pDoc.appendChild(text);
                 }else if (data.record[index].kondisi=="att") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'att';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "att");
                        pDoc.appendChild(text);
                 }else if (data.record[index].kondisi=="abr") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'abr';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "abr");
                        pDoc.appendChild(text);
                 }else if (data.record[index].kondisi=="sou") {
                        var poss = data.record[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'sou';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "sou");
                        pDoc.appendChild(text);

                 }
                  });  
                }
              },
              error:function(){
                alert('error ... ');
              }
              
            });
        }

        function load(){
          $.ajax({
            url:"<?php echo base_url('c_dokter/odt/');?>" + id_pasien,
            type:'GET',
            dataType:'JSON',
            success:function(data){
              console.log(data.morethan1year);
            
              if (data.morethan1year != 0) {
                alert('Pasien tidak melakukan kunjungan lebih dari satu tahun. Harap buat odontogram baru dengan klik "Buat Odontogtam Baru"');
              }
              console.log(data);
              if (data.id_st != false) {
                id_start_odon = data.id_st[0].id_start_odon;
              }else {
                $("#btn-tmbh").hide();
              }
              console.log(data.id_st);

              var no;
              no = data.tot_idOdn;
              console.log(no);

                //set tabel kunjungan
                $.each(data.record, function(i, item) {
                // while(no!=0){
                  $('<tr>').html(
                      "<td>" + (i+1) + "</td>"+
                      "<td id = '"+data.record[i].id_start_odon+"'>"+data.record[i].id_start_odon+"</td>"+
                      "<td>" + data.record[i].kunjungan + "</td><td>" +"drg "+ data.record[i].firstname + "</td>").appendTo('#tablekunjungan');
                // }

                  });
                //merge tabel kunjungan
                  $('#tablekunjungan td:nth-child(2)').each(function(){
                    var $this = $(this);
                    var col = $this.index();
                    var html = $this.html();
                    var row = $(this).parent()[0].rowIndex; 
                    var span = 1;
                    var cell_above = $($this.parent().prev().children()[col]);
                    // look for cells one above another with the same text

                    while (cell_above.html() === html) { // if the text is the same
                      span += 1; // increase the span
                      cell_above_old = cell_above; // store this cell
                      cell_above = $(cell_above.parent().prev().children()[col]); // and go to the next cell above
                    }

                    // if there are at least two columns with the same value, 
                    // set a new span to the first and hide the other
                    if (span > 1) {
                      // console.log(span);
                      $(cell_above_old).attr('rowspan', span);
                      $this.hide();
                    }
                  });
                //change no odontogram
                // $('#tablekunjungan td:nth-child(2)').each(function() {
                //   $.each(data.jum, function(i, item) {
                //   $("td:contains('"+data.jum[i]+"')").html(no);
                //     no--;
                //     //console.log(data.jum[i]);
                //   });
                   
                //     //console.log("i:"+no);
                // });
                
                //klik efek tabel kunjungan u/ odontogram
                $('#tablekunjungan').on('click', 'tr td:nth-child(2)', function(){
                  console.log($(this).attr('id'));
                    var id_odn = $(this).text();
                    perOdontogram(id_odn);
                  });
                  // klik efek tabel kunjungan
                  $('#tablekunjungan').on('click', 'tr td:nth-child(3)', function(){
                    var tgl = $(this).text();
                    var id_pasien = data.record[0].id_pasien;
                    spesific_record(tgl, id_pasien);
                  });
                  console.log(data.hitung);
                  if (data.hitung != 0) {
                  //set tabel data
                  $('#occlusi').html(data.data[0].occlusi);
                  $('#torus_palatinus').html(data.data[0].torus_palatinus);
                  $('#torus_mandibularis').html(data.data[0].torus_mandibularis);
                  $('#palatum').html(data.data[0].palatum);
                  $('#diastema').html(data.data[0].diastema);
                  $('#gigi_anomali').html(data.data[0].gigi_anomali);
                  $('#lainnya').html(data.data[0].lainnya);
                  $('#ket1').html(data.data[0].ket1);
                  $('#ket2').html(data.data[0].ket2);
                  $('#decay').html(data.data[0].decay);
                  $('#missing').html(data.data[0].missing);
                  $('#fill').html(data.data[0].fill);
                  console.log(data.data);
                  //set modal box edit data
                  $('#os').val(data.data[0].occlusi);
                  $('#tps').val(data.data[0].torus_palatinus);
                  $('#tms').val(data.data[0].torus_mandibularis);
                  $('#ps').val(data.data[0].palatum);
                  $('#ds').val(data.data[0].diastema);
                  $('#gas').val(data.data[0].gigi_anomali);
                  $('#form2').find('#ket1').val(data.data[0].ket1);
                  $('#form2').find('#ket2').val(data.data[0].ket2);
                  $('#form2').find('#lainnya').val(data.data[0].lainnya);
                  if (data.data[0].decay == "") {
                    $('#decays').val('0');
                  }else{
                    $('#decays').val(data.data[0].decay);
                  }
                  if (data.data[0].missing == "") {
                    $('#missings').val('0');
                  }else{
                    $('#missings').val(data.data[0].missing);
                  }
                  if (data.data[0].fill == "") {
                    $('#fills').val('0');
                  }else{
                    $('#fills').val(data.data[0].fill);
                  }
                  $('#id_pasien').val(data.data[0].id_pasien);
                  $('#id_dtodon').val(data.data[0].id_dtodon);
                  }else{ 
                    $('#isi_data').modal('show'); 
                  }
                  
                  //load odontogram ke gambar
                  $.each(data.latest, function(index) {
                    if (data.latest[index].kondisi == "amf") {
                      $("#"+data.latest[index].gigi).find("#"+data.latest[index].posisi).attr("class", "amf");
                      act = $("#"+data.latest[index].gigi).find("#"+data.latest[index].posisi).hasClass("amf");
                      if (act) {
                        $("#"+data.latest[index].gigi).find("#"+data.latest[index].posisi).css({fill: "#333333"});
                      } 
                    }else if(data.latest[index].kondisi=="cof"){
                      $("#"+data.latest[index].gigi).find("#"+data.latest[index].posisi).addClass("cof");
                      act = $("#"+data.latest[index].gigi).find("#"+data.latest[index].posisi).hasClass("cof");
                      if (act) {
                        $("#"+data.latest[index].gigi).find("#"+data.latest[index].posisi).css({fill: "#00ff33"});
                      }
                    }else if(data.latest[index].kondisi=="fis"){
                      $("#"+data.latest[index].gigi).find("#"+data.latest[index].posisi).addClass("fis");
                        act = $("#"+data.latest[index].gigi).find("#"+data.latest[index].posisi).hasClass("fis");
                      if (act) {
                        $("#"+data.latest[index].gigi).find("#"+data.latest[index].posisi).css({fill: "#eed0d0"});
                      } 
                    }else if(data.latest[index].kondisi=="gif"){
                      $("#"+data.latest[index].gigi).find("#"+data.latest[index].posisi).addClass("gif");
                      act = $("#"+data.latest[index].gigi).find("#"+data.latest[index].posisi).hasClass("gif");
                      if (act) {
                        $("#"+data.latest[index].gigi).find("#"+data.latest[index].posisi).css({fill: "#00ff33"});
                      }
                    }else if(data.latest[index].kondisi=="inl"){
                      $("#"+data.latest[index].gigi).find("#"+data.latest[index].posisi).addClass("inl");
                      act = $("#"+data.latest[index].gigi).find("#"+data.latest[index].posisi).hasClass("inl");
                      if (act) {
                        $("#"+data.latest[index].gigi).find("#"+data.latest[index].posisi).css({fill: "#00ff33"});
                      }           
                    }else if (data.latest[index].kondisi=="logammulia") {
                        $("#"+data.latest[index].gigi).find("#"+data.latest[index].posisi).addClass("logammulia");
                        act = $("#"+data.latest[index].gigi).find("#"+data.latest[index].posisi).hasClass("logammulia");
                        if (act) {
                          $("#"+data.latest[index].gigi).find("#"+data.latest[index].posisi).css({fill: "#db172a"});
                        }
                    }else if (data.latest[index].kondisi=="rct") {
                        var poss = data.latest[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();      
                        var svgns = "http://www.w3.org/2000/svg";
                        var shape = document.createElementNS(svgns, "polygon");
                        shape.setAttribute("points", "-5,0, 5,0, 0,7");
                        shape.setAttributeNS(null, "fill", "black");
                        var xPos = (bbox.x + bbox.width / 2); 
                        var yPos = (bbox.y + bbox.height / 2); 
                        shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        shape.setAttribute("class", "rct");
                        pDoc.appendChild(shape);
                    }else if (data.latest[index].kondisi=="nvt") {
                        var poss = data.latest[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var shape = document.createElementNS(svgns, "polygon");
                        shape.setAttribute('id','nvt');
                        shape.setAttribute("points", "-5,0, 5,0, 0,7");
                        shape.setAttributeNS(null, "fill", "none");
                        shape.setAttributeNS(null, "stroke", "black")
                        var xPos = bbox.x + bbox.width / 2;  
                        var yPos = bbox.y + bbox.height / 2;     
                        shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        shape.setAttribute("class", "nvt");
                        pDoc.appendChild(shape);
                    }else if (data.latest[index].kondisi=="non") {
                        var poss = data.latest[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'NON';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xPos = bbox.x ; 
                        var yPos = bbox.y ;  
                        text.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        text.setAttribute("class","non");
                        pDoc.appendChild(text);
                    }else if (data.latest[index].kondisi=="une") {
                        var poss = data.latest[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'UNE';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xPos = bbox.x ;
                        var yPos = bbox.y ;    
                        text.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        text.setAttribute("class","une");
                        pDoc.appendChild(text);
                    }else if (data.latest[index].kondisi=="pre") {
                        var poss = data.latest[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'PRE';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xPos = bbox.x ; 
                        var yPos = bbox.y ;  
                        text.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        text.setAttribute("class","pre");
                        pDoc.appendChild(text);
                    }else if (data.latest[index].kondisi=="ano") {
                        var poss = data.latest[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'ANO';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xPos = bbox.x ;  
                        var yPos = bbox.y ;  
                        text.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        text.setAttribute("class", "ano");
                        pDoc.appendChild(text);
                    }else if (data.latest[index].kondisi=="cfr") {
                        var poss = data.latest[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var line = document.createElementNS(svgns, "path");
                        line.setAttribute('d', 'M 3,7 L 11,-9 M 9,7 L 16,-9 M 1,1 L 18,1 M 1,-5 L 18,-5');
                        line.setAttribute("fill", "none");
                        line.setAttribute("stroke", "black");
                        var xPos = bbox.x + bbox.width / 7 ;  
                        var yPos = bbox.y + bbox.height / 3.5  ;   
                        line.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        line.setAttribute("class", "cfr");
                        pDoc.appendChild(line);
                    }else if (data.latest[index].kondisi=="car") {
                        $("#"+data.latest[index].gigi).find("#"+data.latest[index].posisi).addClass("car");
                        act = $("#"+data.latest[index].gigi).find("#"+data.latest[index].posisi).hasClass("car");
                        if (act) {
                          $("#"+data.latest[index].gigi).find("#"+data.latest[index].posisi).attr("stroke-width", 2 );
                        }        
                    }else if (data.latest[index].kondisi=="mis") {
                        var poss = data.latest[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var line = document.createElementNS(svgns, "path");
                        line.setAttribute('d', 'M -6,-13 L 6,13 M 6,-13 L -6,13');
                        line.setAttribute("fill", "none");
                        line.setAttribute("stroke", "black");
                        var xPos = bbox.x + bbox.width / 2; 
                        var yPos = bbox.y + 10;  
                        line.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        line.setAttribute("class", "mis");
                        pDoc.appendChild(line);
                    }else if (data.latest[index].kondisi=="poc") {
                        var poss = data.latest[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var shape = document.createElementNS(svgns, "polygon");
                        var pattern = document.createElementNS(svgns, "path");
                        shape.setAttribute("points", "0,0, 0,20, 20,20, 20,0");
                        shape.setAttributeNS(null, "fill", "none");
                        shape.setAttributeNS(null, "stroke", "black");
                        shape.setAttributeNS(null, "stroke-width", 2.5);
                        var xPos = bbox.x ;  
                        var yPos = bbox.y ;    
                        shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        pattern.setAttribute('d','M 5,0 L 5,20 M 10,0 L 10,20 M 15,0 L 15,20');
                        pattern.setAttributeNS(null, "fill", "none");
                        pattern.setAttributeNS(null, "stroke", "black");
                        pattern.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        shape.setAttribute("class", "square");
                        pattern.setAttribute("class", "line");
                        pDoc.appendChild(shape);
                        pDoc.appendChild(pattern);
                    }else if (data.latest[index].kondisi=="fmc") {
                        var poss = data.latest[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var shape = document.createElementNS(svgns, "polygon");
                        shape.setAttribute("points", "0,0, 0,20, 20,20, 20,0");
                        shape.setAttributeNS(null, "fill", "none");
                        shape.setAttributeNS(null, "stroke", "black")
                        shape.setAttributeNS(null, "stroke-width", 2.5);
                        var xPos = bbox.x ;  
                        var yPos = bbox.y ;    
                        shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        shape.setAttribute("class", "fmc");
                        pDoc.appendChild(shape);
                    }else if (data.latest[index].kondisi=="prd") {
                        var poss = data.latest[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'PRD';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "prd");
                        pDoc.appendChild(text);
                    }else if (data.latest[index].kondisi=="fld") {
                        var poss = data.latest[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'FLD';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "fld");
                        pDoc.appendChild(text);
                    }else if (data.latest[index].kondisi=="ipx") {
                        var poss = data.latest[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var text = document.createElementNS(svgns, "text");
                        text.textContent = 'IPX';
                        text.setAttributeNS(null,'font-size', '8px');
                        text.setAttribute(null, 'fill', '#000');
                        var xText = bbox.x ;
                        var yText = bbox.y + bbox.height / 1.5;
                        text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                        text.setAttribute("class", "ipx");
                        pDoc.appendChild(text);
                    }else if (data.latest[index].kondisi=="meb") {
                        var poss = data.latest[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var shape = document.createElementNS(svgns, "polygon");
                        var line = document.createElementNS(svgns, "path");
                        shape.setAttribute("points", "0,0, 0,20, 20,20, 20,0");
                        shape.setAttributeNS(null, "fill", "none");
                        shape.setAttributeNS(null, "stroke", "black");
                        shape.setAttributeNS(null, "stroke-width", 2.5);
                        line.setAttribute('d', 'M -3,-5 L 23,-5');
                        line.setAttributeNS(null, "fill", "none");
                        line.setAttributeNS(null, "stroke", "black");
                        var xPos = bbox.x ;  
                        var yPos = bbox.y ;    
                        shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        line.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        shape.setAttribute("class", "sqrmeb");
                        line.setAttribute("class", "linemeb");
                        pDoc.appendChild(shape);
                        pDoc.appendChild(line);
                    }else if (data.latest[index].kondisi=="pob") {
                        var poss = data.latest[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var shape = document.createElementNS(svgns, "polygon");
                        var pattern = document.createElementNS(svgns, "path");
                        var line = document.createElementNS(svgns, "path");
                        shape.setAttribute("points", "0,0, 0,20, 20,20, 20,0");
                        shape.setAttributeNS(null, "fill", "none");
                        shape.setAttributeNS(null, "stroke", "black");
                        shape.setAttributeNS(null, "stroke-width", 2.5);
                        var xPos = bbox.x ;  
                        var yPos = bbox.y ;    
                        shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        pattern.setAttribute('d', 'M 5,0 L 5,20 M 10,0 L 10,20 M 15,0 L 15,20');
                        pattern.setAttributeNS(null, "fill", "none");
                        pattern.setAttributeNS(null, "stroke", "black");
                        pattern.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        line.setAttribute('d', 'M -3,-5 L 23,-5');
                        line.setAttributeNS(null, "fill", "none");
                        line.setAttributeNS(null, "stroke", "black");
                        line.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        shape.setAttribute("class", "sqrpob");
                        pattern.setAttribute("class", "pattpob");
                        line.setAttribute("class", "linepob");
                        pDoc.appendChild(shape);
                        pDoc.appendChild(pattern);
                        pDoc.appendChild(line);
                    }else if (data.latest[index].kondisi=="rrx") {
                        var poss = data.latest[index].gigi;
                        var pDoc = document.getElementById(poss);
                        var bbox = pDoc.getBBox();
                        var svgns = "http://www.w3.org/2000/svg";
                        var line = document.createElementNS(svgns, "path");
                        line.setAttribute('d', 'M 7,-25 L 0,9 M 0,9 L -7,-15');
                        line.setAttribute("stroke", "black");
                        var xPos = bbox.x + bbox.width / 1.7  ;  
                        var yPos = bbox.y + bbox.height / 2.7;     
                        line.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
                        line.setAttribute("class", "rrx");
                        pDoc.appendChild(line);
                    }else if (data.latest[index].kondisi=="mpc") {
                      var poss = data.latest[index].gigi;
                      var pDoc = document.getElementById(poss);
                      var bbox = pDoc.getBBox();
                      var svgns = "http://www.w3.org/2000/svg";
                      var text = document.createElementNS(svgns, "text");
                      text.textContent = 'mpc';
                      text.setAttributeNS(null,'font-size', '8px');
                      text.setAttribute(null, 'fill', '#000');
                      var xText = bbox.x ;
                      var yText = bbox.y + bbox.height / 1.5;
                      text.setAttribute("transform", "translate(" +xText + "," + yText + ")");
                      text.setAttribute("class", "mpc");
                      pDoc.appendChild(text);
                    }else if (data.latest[index].kondisi=="gmc") {
                      var poss = data.latest[index].gigi;
                      var pDoc = document.getElementById(poss);
                      var bbox = pDoc.getBBox();
                      var svgns = "http://www.w3.org/2000/svg";
                      var text = document.createElementNS(svgns, "text");
                      text.textContent = 'gmc';
                      text.setAttributeNS(null,'font-size', '8px');
                      text.setAttribute(null, 'fill', '#000');
                      var xText = bbox.x ;
                      var yText = bbox.y + bbox.height / 1.5;
                      text.setAttribute("transform", "translate(" +xText + "," + yText + ")");
                      text.setAttribute("class", "gmc");
                      pDoc.appendChild(text);
                    }else if (data.latest[index].kondisi=="pon") {
                      var poss = data.latest[index].gigi;
                      var pDoc = document.getElementById(poss);
                      var bbox = pDoc.getBBox();
                      var svgns = "http://www.w3.org/2000/svg";
                      var text = document.createElementNS(svgns, "text");
                      text.textContent = 'pon';
                      text.setAttributeNS(null,'font-size', '8px');
                      text.setAttribute(null, 'fill', '#000');
                      var xText = bbox.x ;
                      var yText = bbox.y + bbox.height / 1.5;
                      text.setAttribute("transform", "translate(" +xText + "," + yText + ")");
                      text.setAttribute("class", "pon");
                      pDoc.appendChild(text);
                    }else if (data.latest[index].kondisi=="abu") {
                      var poss = data.latest[index].gigi;
                      var pDoc = document.getElementById(poss);
                      var bbox = pDoc.getBBox();
                      var svgns = "http://www.w3.org/2000/svg";
                      var text = document.createElementNS(svgns, "text");
                      text.textContent = 'abu';
                      text.setAttributeNS(null,'font-size', '8px');
                      text.setAttribute(null, 'fill', '#000');
                      var xText = bbox.x ;
                      var yText = bbox.y + bbox.height / 1.5;
                      text.setAttribute("transform", "translate(" +xText + "," + yText + ")");
                      text.setAttribute("class", "abu");
                      pDoc.appendChild(text);
                    }else if (data.latest[index].kondisi=="acr") {
                      var poss = data.latest[index].gigi;
                      var pDoc = document.getElementById(poss);
                      var bbox = pDoc.getBBox();
                      var svgns = "http://www.w3.org/2000/svg";
                      var text = document.createElementNS(svgns, "text");
                      text.textContent = 'acr';
                      text.setAttributeNS(null,'font-size', '8px');
                      text.setAttribute(null, 'fill', '#000');
                      var xText = bbox.x ;
                      var yText = bbox.y + bbox.height / 1.5;
                      text.setAttribute("transform", "translate(" +xText + "," + yText + ")");
                      text.setAttribute("class", "acr");
                      pDoc.appendChild(text);
                    }else if (data.latest[index].kondisi=="imv") {
                      var poss = data.latest[index].gigi;
                      var pDoc = document.getElementById(poss);
                      var bbox = pDoc.getBBox();
                      var svgns = "http://www.w3.org/2000/svg";
                      var text = document.createElementNS(svgns, "text");
                      text.textContent = 'imv';
                      text.setAttributeNS(null,'font-size', '8px');
                      text.setAttribute(null, 'fill', '#000');
                      var xText = bbox.x ;
                      var yText = bbox.y + bbox.height / 1.5;
                      text.setAttribute("transform", "translate(" +xText + "," + yText + ")");
                      text.setAttribute("class", "imv");
                      pDoc.appendChild(text);
                    }else if (data.latest[index].kondisi=="dia") {
                      var poss = data.latest[index].gigi;
                      var pDoc = document.getElementById(poss);
                      var bbox = pDoc.getBBox();
                      var svgns = "http://www.w3.org/2000/svg";
                      var text = document.createElementNS(svgns, "text");
                      text.textContent = 'dia';
                      text.setAttributeNS(null,'font-size', '8px');
                      text.setAttribute(null, 'fill', '#000');
                      var xText = bbox.x ;
                      var yText = bbox.y + bbox.height / 1.5;
                      text.setAttribute("transform", "translate(" +xText + "," + yText + ")");
                      text.setAttribute("class", "dia");
                      pDoc.appendChild(text);
                    }else if (data.latest[index].kondisi=="att") {
                      var poss = data.latest[index].gigi;
                      var pDoc = document.getElementById(poss);
                      var bbox = pDoc.getBBox();
                      var svgns = "http://www.w3.org/2000/svg";
                      var text = document.createElementNS(svgns, "text");
                      text.textContent = 'att';
                      text.setAttributeNS(null,'font-size', '8px');
                      text.setAttribute(null, 'fill', '#000');
                      var xText = bbox.x ;
                      var yText = bbox.y + bbox.height / 1.5;
                      text.setAttribute("transform", "translate(" +xText + "," + yText + ")");
                      text.setAttribute("class", "att");
                      pDoc.appendChild(text);
                    }else if (data.latest[index].kondisi=="abr") {
                      var poss = data.latest[index].gigi;
                      var pDoc = document.getElementById(poss);
                      var bbox = pDoc.getBBox();
                      var svgns = "http://www.w3.org/2000/svg";
                      var text = document.createElementNS(svgns, "text");
                      text.textContent = 'abr';
                      text.setAttributeNS(null,'font-size', '8px');
                      text.setAttribute(null, 'fill', '#000');
                      var xText = bbox.x ;
                      var yText = bbox.y + bbox.height / 1.5;
                      text.setAttribute("transform", "translate(" +xText + "," + yText + ")");
                      text.setAttribute("class", "abr");
                      pDoc.appendChild(text);
                    }else if (data.latest[index].kondisi=="sou") {
                      var poss = data.latest[index].gigi;
                      var pDoc = document.getElementById(poss);
                      var bbox = pDoc.getBBox();
                      var svgns = "http://www.w3.org/2000/svg";
                      var text = document.createElementNS(svgns, "text");
                      text.textContent = 'sou';
                      text.setAttributeNS(null,'font-size', '8px');
                      text.setAttribute(null, 'fill', '#000');
                      var xText = bbox.x ;
                      var yText = bbox.y + bbox.height / 1.5;
                      text.setAttribute("transform", "translate(" +xText + "," + yText + ")");
                      text.setAttribute("class", "sou");
                      pDoc.appendChild(text);
                    }
                    addToTable(data.latest[index].gigi, data.latest[index].posisi, data.latest[index].kondisi);
                    child_mapping(data.latest[index].gigi, data.latest[index].posisi, data.latest[index].kondisi);
                  });
            },
            error:function(){
              alert('error ... ');
            }
          });
        }

      // function create_odontogram(){
        $('polygon').mouseover(function (evt) {
          var sector = $(evt.target);
          var cara = sector.attr('id');
          var diente = sector.parent().attr('id');
          $('#nomorgigi').html(diente);
          $('#bagian').html(cara);
          sector.attr('fill', 'yellow');
        });
        $('polygon').mouseout(function (evt) {
          var sector = $(evt.target);
          sector.attr('fill', 'white');
          $('#nomorgigi').html('XX');
          $('#bagian').html('X');
        });
        var xpos, ypos;
        $('polygon').click(function (evt) {   
          var sector = $(evt.target); 
          var strdebug = sector.parent().attr('id') + ' - ' + sector.attr('id');
          var gigi = sector.parent().attr('id');
          var posisi= sector.attr('id');
          console.log(posisi);
          $("#message").html( strdebug );

          function add_pos_down(){
            if (move_pos.indexOf(posisi) > -1) {
              var temp = "B";
              posisi=temp;
            }
          }
          
          var f = document.getElementById("restorasi");
          var strUser = f.options[f.selectedIndex].value;
          var kondisi = strUser;
          console.log(strUser);
          if (strUser=="poc") {
            var group = evt.target.parentNode;
            add_pos_down();
            var lineShape = $(group).find(".line");
            var squareShape = $(group).find(".square");
            if (squareShape.length > 0 && lineShape.length > 0){
              squareShape.remove();
              lineShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            var bbox = group.getBBox();
            var svgns = "http://www.w3.org/2000/svg";
            var shape = document.createElementNS(svgns, "polygon");
            var pattern = document.createElementNS(svgns, "path");
            shape.setAttribute("points", "0,0, 0,20, 20,20, 20,0");
            shape.setAttributeNS(null, "fill", "none");
            shape.setAttributeNS(null, "stroke", "black");
            shape.setAttributeNS(null, "stroke-width", 2.5);
            var xPos = bbox.x ;  
            var yPos = bbox.y ;    
            shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            pattern.setAttribute('d','M 5,0 L 5,20 M 10,0 L 10,20 M 15,0 L 15,20');
            pattern.setAttributeNS(null, "fill", "none");
            pattern.setAttributeNS(null, "stroke", "black");
            pattern.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            shape.setAttribute("class", "square");
            pattern.setAttribute("class", "line");
            group.appendChild(shape);
            group.appendChild(pattern);
            add(gigi, posisi, kondisi);
            console.log(gigi);  
            }
            }else if (strUser=="fmc") {
            var group = evt.target.parentNode;
            add_pos_down();
            var fmcShape = $(group).find(".fmc");
            if (fmcShape.length > 0){
              fmcShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            var bbox = group.getBBox();
            var svgns = "http://www.w3.org/2000/svg";
            var shape = document.createElementNS(svgns, "polygon");
            shape.setAttribute("points", "0,0, 0,20, 20,20, 20,0");
            shape.setAttributeNS(null, "fill", "none");
            shape.setAttributeNS(null, "stroke", "black")
            shape.setAttributeNS(null, "stroke-width", 2.5);
            var xPos = bbox.x ;  
            var yPos = bbox.y ;    
            shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            shape.setAttribute("class", "fmc");
            group.appendChild(shape);
            add(gigi, posisi, kondisi);
            console.log(gigi);
            }
            }else if (strUser=="meb") {
            var group = evt.target.parentNode;
            add_pos_down();
            var squareShape = $(group).find(".sqrmeb");
            var lineShape = $(group).find(".linemeb");
            if (squareShape.length > 0 && lineShape.length > 0 ){
              squareShape.remove();
              lineShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            var bbox = group.getBBox();
            var svgns = "http://www.w3.org/2000/svg";
            var shape = document.createElementNS(svgns, "polygon");
            var line = document.createElementNS(svgns, "path");
            shape.setAttribute("points", "0,0, 0,20, 20,20, 20,0");
            shape.setAttributeNS(null, "fill", "none");
            shape.setAttributeNS(null, "stroke", "black");
            shape.setAttributeNS(null, "stroke-width", 2.5);
            line.setAttribute('d', 'M -3,-5 L 23,-5');
            line.setAttributeNS(null, "fill", "none");
            line.setAttributeNS(null, "stroke", "black");
            var xPos = bbox.x ;  
            var yPos = bbox.y ;    
            shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            line.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            shape.setAttribute("class", "sqrmeb");
            line.setAttribute("class", "linemeb");
            group.appendChild(shape);
            group.appendChild(line);
            add(gigi, posisi, kondisi);
            }
            }else if (strUser=="pob") {
            var group = evt.target.parentNode;
            add_pos_down();
            var squareShape = $(group).find(".sqrpob");
            var lineShape = $(group).find(".linepob");
            var pattShape = $(group).find(".pattpob");
            if (squareShape.length > 0 && lineShape.length > 0 && pattShape.length > 0 ){
              squareShape.remove();
              lineShape.remove();
              pattShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            var bbox = group.getBBox();
            var svgns = "http://www.w3.org/2000/svg";
            var shape = document.createElementNS(svgns, "polygon");
            var pattern = document.createElementNS(svgns, "path");
            var line = document.createElementNS(svgns, "path");
            shape.setAttribute("points", "0,0, 0,20, 20,20, 20,0");
            shape.setAttributeNS(null, "fill", "none");
            shape.setAttributeNS(null, "stroke", "black");
            shape.setAttributeNS(null, "stroke-width", 2.5);
            var xPos = bbox.x ;  
            var yPos = bbox.y ;    
            shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            pattern.setAttribute('d', 'M 5,0 L 5,20 M 10,0 L 10,20 M 15,0 L 15,20');
            pattern.setAttributeNS(null, "fill", "none");
            pattern.setAttributeNS(null, "stroke", "black");
            pattern.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            line.setAttribute('d', 'M -3,-5 L 23,-5');
            line.setAttributeNS(null, "fill", "none");
            line.setAttributeNS(null, "stroke", "black");
            line.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            shape.setAttribute("class", "sqrpob");
            pattern.setAttribute("class", "pattpob");
            line.setAttribute("class", "linepob");
            group.appendChild(shape);
            group.appendChild(pattern);
            group.appendChild(line);
            add(gigi, posisi, kondisi);
            }
            }else if (strUser=="rct") {
              // Find the group that contains the polygon that was clicked on
            var group = evt.target.parentNode;
            add_pos_down();
            // If the group already contains the "amf" element, then remove it
            var rctShape = $(group).find(".rct");
            if (rctShape.length > 0)
            {
              rctShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            // Get the bounding box of the group
            var bbox = group.getBBox();
            console.log(group);
            // Add a triangle to the group
            var svgns = "http://www.w3.org/2000/svg";
            var shape = document.createElementNS(svgns, "polygon");
            shape.setAttribute("points", "-5,0, 5,0, 0,7"); // triangle centered on x=0
            console.log(xPos+";"+yPos);
            console.log(bbox.x+":"+bbox.width)
            shape.setAttributeNS(null, "fill", "black");
            var xPos = bbox.x + bbox.width / 2; // Horizontal centre of the bbox
            var yPos = bbox.y + bbox.height / 2; // Bottom of the group bbox
            shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            shape.setAttribute("class", "rct");
            group.appendChild(shape);
            add(gigi, posisi, kondisi);
            //console.log(gigi);
            }
            }else if (strUser=="ipx") {
            var group = evt.target.parentNode;
            add_pos_down();
            var ipxShape = $(group).find(".ipx");
            if (ipxShape.length > 0){
              ipxShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            var bbox = group.getBBox();
            var svgns = "http://www.w3.org/2000/svg";
            var text = document.createElementNS(svgns, "text");
            text.textContent = 'IPX';
            text.setAttributeNS(null,'font-size', '8px');
            text.setAttribute(null, 'fill', '#000');
            var xText = bbox.x ;
            var yText = bbox.y + bbox.height / 1.5;
            text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
            text.setAttribute("class", "ipx");
            group.appendChild(text);
            console.log(gigi);
            add(gigi, posisi, kondisi);
            }
            }else if (strUser=="mpc") {
              var group = evt.target.parentNode;
              add_pos_down();
              var mpcShape = $(group).find(".mpc");
              if (mpcShape.length > 0){
                mpcShape.remove();
                hapus(gigi, posisi, kondisi);
              }else{
                var bbox = group.getBBox();
                var svgns = "http://www.w3.org/2000/svg";
                var text = document.createElementNS(svgns, "text");
                text.textContent = 'mpc';
                text.setAttributeNS(null,'font-size', '8px');
                text.setAttribute(null, 'fill', '#000');
                var xText = bbox.x ;
                var yText = bbox.y + bbox.height / 1.5;
                text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                text.setAttribute("class", "mpc");
                group.appendChild(text);
                console.log(gigi);
                add(gigi, posisi, kondisi);
                }
            }else if (strUser=="gmc") {
              var group = evt.target.parentNode;
              add_pos_down();
              var gmcShape = $(group).find(".gmc");
              if (gmcShape.length > 0){
                gmcShape.remove();
                hapus(gigi, posisi, kondisi);
              }else{
                var bbox = group.getBBox();
                var svgns = "http://www.w3.org/2000/svg";
                var text = document.createElementNS(svgns, "text");
                text.textContent = 'gmc';
                text.setAttributeNS(null,'font-size', '8px');
                text.setAttribute(null, 'fill', '#000');
                var xText = bbox.x ;
                var yText = bbox.y + bbox.height / 1.5;
                text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                text.setAttribute("class", "gmc");
                group.appendChild(text);
                console.log(gigi);
                add(gigi, posisi, kondisi);
                }
            }else if (strUser=="pon") {
              var group = evt.target.parentNode;
              add_pos_down();
              var ponShape = $(group).find(".pon");
              if (ponShape.length > 0){
                ponShape.remove();
                hapus(gigi, posisi, kondisi);
              }else{
                var bbox = group.getBBox();
                var svgns = "http://www.w3.org/2000/svg";
                var text = document.createElementNS(svgns, "text");
                text.textContent = 'pon';
                text.setAttributeNS(null,'font-size', '8px');
                text.setAttribute(null, 'fill', '#000');
                var xText = bbox.x ;
                var yText = bbox.y + bbox.height / 1.5;
                text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                text.setAttribute("class", "pon");
                group.appendChild(text);
                console.log(gigi);
                add(gigi, posisi, kondisi);
                }
            }else if (strUser=="abu") {
              var group = evt.target.parentNode;
              add_pos_down();
              var abuShape = $(group).find(".abu");
              if (abuShape.length > 0){
                abuShape.remove();
                hapus(gigi, posisi, kondisi);
              }else{
                var bbox = group.getBBox();
                var svgns = "http://www.w3.org/2000/svg";
                var text = document.createElementNS(svgns, "text");
                text.textContent = 'abu';
                text.setAttributeNS(null,'font-size', '8px');
                text.setAttribute(null, 'fill', '#000');
                var xText = bbox.x ;
                var yText = bbox.y + bbox.height / 1.5;
                text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
                text.setAttribute("class", "abu");
                group.appendChild(text);
                console.log(gigi);
                add(gigi, posisi, kondisi);
                }

            }
            $('#restorasi').get(0).selectedIndex = 0;


          var g = document.getElementById("bhn_restorasi");
          var strUser = g.options[g.selectedIndex].value;
          var kondisi = strUser;
          if (strUser=="amf") {
            $(evt.target).toggleClass("amf");
            var act = $(evt.target).hasClass("amf");
            if (act) {
              $(evt.target).css({fill: "#333333"});
              add(gigi, posisi, kondisi);
              } else {
              $(evt.target).css({fill: "#ffffff"});
              hapus(gigi, posisi, kondisi);
            }
          }else if (strUser=="gif") {
            $(evt.target).toggleClass("gif");
            var act = $(evt.target).hasClass("gif");
            if (act) {
              $(evt.target).css({fill: "#00ff33"});
              add(gigi, posisi, kondisi);
              } else {
              $(evt.target).css({fill: "#ffffff"});
              hapus(gigi, posisi, kondisi);
            }
          }else if (strUser=="cof") {
            $(evt.target).toggleClass("cof");
            var act = $(evt.target).hasClass("cof");
            if (act) {
              $(evt.target).css({fill: "#00ff33"});
              add(gigi, posisi, kondisi);
              } else {
              $(evt.target).css({fill: "#ffffff"});
              hapus(gigi, posisi, kondisi);
            }

          }else if (strUser=="fis") {
            $(evt.target).toggleClass("fis");
            var act = $(evt.target).hasClass("fis");
            if (act) {
              $(evt.target).css({fill: "#eed0d0"});
              add(gigi, posisi, kondisi);
              } else {
              $(evt.target).css({fill: "#ffffff"});
              hapus(gigi, posisi, kondisi);
            }
          }else if (strUser=="inl") {
            $(evt.target).toggleClass("inl");
            var act = $(evt.target).hasClass("inl");
            if (act) {
              $(evt.target).css({fill: "#00ff33"});
              add(gigi, posisi, kondisi);
              } else {
              $(evt.target).css({fill: "#ffffff"});
              hapus(gigi, posisi, kondisi);
            }
          }else if (strUser=="logammulia") {
            $(evt.target).toggleClass("logammulia");
            var act = $(evt.target).hasClass("logammulia");
            if (act) {
              $(evt.target).css({fill: "#db172a"});
              add(gigi, posisi, kondisi);
              } else {
              $(evt.target).css({fill: "#ffffff"});
              hapus(gigi, posisi, kondisi);
            }
          }
          $('#bhn_restorasi').get(0).selectedIndex = 0;

          var h = document.getElementById("protesa");
          var strUser = h.options[h.selectedIndex].value;
          var kondisi = strUser;
          if (strUser=="prd") {
            var group = evt.target.parentNode;
            add_pos_down();
            var prdShape = $(group).find(".prd");
            if (prdShape.length > 0){
              prdShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            var bbox = group.getBBox();
            var svgns = "http://www.w3.org/2000/svg";
            var text = document.createElementNS(svgns, "text");
            text.textContent = 'PRD';
            text.setAttributeNS(null,'font-size', '8px');
            text.setAttribute(null, 'fill', '#000');
            var xText = bbox.x ;
            var yText = bbox.y + bbox.height / 1.5;
            text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
            text.setAttribute("class", "prd");
            group.appendChild(text);
            add(gigi, posisi, kondisi);
            console.log(gigi);
          }
          }else if (strUser=="fld") {
            var group = evt.target.parentNode;
            add_pos_down();
            var fldShape = $(group).find(".fld");
            if (fldShape.length > 0){
              fldShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            var bbox = group.getBBox();
            var svgns = "http://www.w3.org/2000/svg";
            var text = document.createElementNS(svgns, "text");
            text.textContent = 'FLD';
            text.setAttributeNS(null,'font-size', '8px');
            text.setAttribute(null, 'fill', '#000');
            var xText = bbox.x ;
            var yText = bbox.y + bbox.height / 1.5;
            text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
            text.setAttribute("class", "fld");
            group.appendChild(text);
            console.log(gigi);
            add(gigi, posisi, kondisi);
          }
          }else if (strUser=="acr") {
            var group = evt.target.parentNode;
            add_pos_down();
            var acrShape = $(group).find(".acr");
            if (acrShape.length > 0){
              acrShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            var bbox = group.getBBox();
            var svgns = "http://www.w3.org/2000/svg";
            var text = document.createElementNS(svgns, "text");
            text.textContent = 'acr';
            text.setAttributeNS(null,'font-size', '8px');
            text.setAttribute(null, 'fill', '#000');
            var xText = bbox.x ;
            var yText = bbox.y + bbox.height / 1.5;
            text.setAttribute("transform", "translate(" + xText + "," + yText + ")");
            text.setAttribute("class", "acr");
            group.appendChild(text);
            console.log(gigi);
            add(gigi, posisi, kondisi);

          }
          }
           $('#protesa').get(0).selectedIndex = 0;

          var e = document.getElementById("keadaan_gigi");
          var strUser = e.options[e.selectedIndex].value;
          var kondisi = strUser;
          if (strUser=="nvt") {
            var group = evt.target.parentNode;
            add_pos_down();
            var nvtShape = $(group).find(".nvt");
            if (nvtShape.length > 0){
              nvtShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            var bbox = group.getBBox();
            var svgns = "http://www.w3.org/2000/svg";
            var shape = document.createElementNS(svgns, "polygon");
            shape.setAttribute('id','nvt');
            shape.setAttribute("points", "-5,0, 5,0, 0,7");
            shape.setAttributeNS(null, "fill", "none");
            shape.setAttributeNS(null, "stroke", "black")
            var xPos = bbox.x + bbox.width / 2;  
            var yPos = bbox.y + bbox.height / 2;     
            shape.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            group.appendChild(shape);
            shape.setAttribute("class", "nvt");
            add(gigi, posisi, kondisi);
            console.log(gigi);
          }
          }else if (strUser=="non") {
            var group = evt.target.parentNode;
            add_pos_down();
            var nonShape = $(group).find(".non");
            if (nonShape.length > 0){
              nonShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            var bbox = group.getBBox();
            var svgns = "http://www.w3.org/2000/svg";
            var text = document.createElementNS(svgns, "text");
            text.textContent = 'NON';
            text.setAttributeNS(null,'font-size', '8px');
            text.setAttribute(null, 'fill', '#000');
            var xPos = bbox.x ; 
            var yPos = bbox.y ;  
            text.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            text.setAttribute("class","non");
            group.appendChild(text);
            add(gigi, posisi, kondisi);
            console.log(gigi);
          }
          }else if (strUser=="une") {
            var group = evt.target.parentNode;
            add_pos_down();
            var uneShape = $(group).find(".une");
            if (uneShape.length > 0){
              uneShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            var bbox = group.getBBox();
            var svgns = "http://www.w3.org/2000/svg";
            var text = document.createElementNS(svgns, "text");
            text.textContent = 'UNE';
            text.setAttributeNS(null,'font-size', '8px');
            text.setAttribute(null, 'fill', '#000');
            var xPos = bbox.x ;
            var yPos = bbox.y ;    
            text.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            text.setAttribute("class","une");
            group.appendChild(text);
            add(gigi, posisi, kondisi);
            console.log(gigi);
          }
          } else if (strUser=="pre") {
            var group = evt.target.parentNode;
            add_pos_down();
            var preShape = $(group).find(".pre");
            if (preShape.length > 0){
              preShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            var bbox = group.getBBox();
            var svgns = "http://www.w3.org/2000/svg";
            var text = document.createElementNS(svgns, "text");
            text.textContent = 'PRE';
            text.setAttributeNS(null,'font-size', '8px');
            text.setAttribute(null, 'fill', '#000');
            var xPos = bbox.x ; 
            var yPos = bbox.y ;  
            text.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            text.setAttribute("class","pre");
            group.appendChild(text);
            add(gigi, posisi, kondisi);
            console.log(gigi);
          }
          }else if (strUser=="ano") {
            var group = evt.target.parentNode;
            add_pos_down();
            var anoShape = $(group).find(".ano");
            if (anoShape.length > 0){
              anoShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            var bbox = group.getBBox();
            var svgns = "http://www.w3.org/2000/svg";
            var text = document.createElementNS(svgns, "text");
            text.textContent = 'ANO';
            text.setAttributeNS(null,'font-size', '8px');
            text.setAttribute(null, 'fill', '#000');
            var xPos = bbox.x ;  
            var yPos = bbox.y ;  
            text.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            text.setAttribute("class", "ano");
            group.appendChild(text);
            add(gigi, posisi, kondisi);
            console.log(gigi);
          }
          } else if (strUser=="cfr") {
            var group = evt.target.parentNode;
            add_pos_down();
            var cfrShape = $(group).find(".cfr");
            if (cfrShape.length > 0){
              cfrShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            var bbox = group.getBBox();
            var svgns = "http://www.w3.org/2000/svg";
            var line = document.createElementNS(svgns, "path");
            line.setAttribute('d', 'M 3,7 L 11,-9 M 9,7 L 16,-9 M 1,1 L 18,1 M 1,-5 L 18,-5');
            line.setAttribute("fill", "none");
            line.setAttribute("stroke", "black");
            var xPos = bbox.x + bbox.width / 7 ;  
            var yPos = bbox.y + bbox.height / 3.5  ;   
            line.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            line.setAttribute("class", "cfr");
            group.appendChild(line);
            add(gigi, posisi, kondisi);
            console.log(gigi);
          }
          }else if (strUser=="car") {
            $(evt.target).toggleClass("car");
            var act = $(evt.target).hasClass("car");
            if (act) {
              $(evt.target).attr("stroke-width", 2 );
              add(gigi, posisi, kondisi);
              } else {
              $(evt.target).attr("stroke-width", -2 );
              hapus(gigi, posisi, kondisi);
            }
            console.log(gigi);
            console.log(posisi);
          }else if (strUser=="rrx") {
            var group = evt.target.parentNode;
            add_pos_down();
            var rrxShape = $(group).find(".rrx");
            if (rrxShape.length > 0){
              rrxShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            var bbox = group.getBBox();
            var svgns = "http://www.w3.org/2000/svg";
            var line = document.createElementNS(svgns, "path");
            line.setAttribute('d', 'M 7,-25 L 0,9 M 0,9 L -7,-15');
            line.setAttribute("stroke", "black");
            var xPos = bbox.x + bbox.width / 1.7  ;  
            var yPos = bbox.y + bbox.height / 2.7;     
            line.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            line.setAttribute("class", "rrx");
            group.appendChild(line);
            console.log(gigi);
            add(gigi, posisi, kondisi);
          }
          }else if (strUser=="mis") {
            var group = evt.target.parentNode;
            add_pos_down();
            var misShape = $(group).find(".mis");
            if (misShape.length > 0){
              misShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            var bbox = group.getBBox();
            var svgns = "http://www.w3.org/2000/svg";
            var line = document.createElementNS(svgns, "path");
            line.setAttribute('d', 'M -6,-13 L 6,13 M 6,-13 L -6,13');
            line.setAttribute("fill", "none");
            line.setAttribute("stroke", "black");
            var xPos = bbox.x + bbox.width / 2; 
            var yPos = bbox.y + 10;  
            line.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            line.setAttribute("class", "mis");
            group.appendChild(line);
            add(gigi, posisi, kondisi);
            console.log(gigi);
          }
          }else if (strUser=="imv") {
            var group = evt.target.parentNode;
            add_pos_down();
            var imvShape = $(group).find(".imv");
            if (imvShape.length > 0){
              imvShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            var bbox = group.getBBox();
            var svgns = "http://www.w3.org/2000/svg";
            var text = document.createElementNS(svgns, "text");
            text.textContent = 'imv';
            text.setAttributeNS(null,'font-size', '8px');
            text.setAttribute(null, 'fill', '#000');
            var xPos = bbox.x ; 
            var yPos = bbox.y ;  
            text.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            text.setAttribute("class","imv");
            group.appendChild(text);
            add(gigi, posisi, kondisi);
            console.log(gigi);
          }
          }else if (strUser=="dia") {
            var group = evt.target.parentNode;
            add_pos_down();
            var diaShape = $(group).find(".dia");
            if (diaShape.length > 0){
              diaShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            var bbox = group.getBBox();
            var svgns = "http://www.w3.org/2000/svg";
            var text = document.createElementNS(svgns, "text");
            text.textContent = 'dia';
            text.setAttributeNS(null,'font-size', '8px');
            text.setAttribute(null, 'fill', '#000');
            var xPos = bbox.x ; 
            var yPos = bbox.y ;  
            text.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            text.setAttribute("class","dia");
            group.appendChild(text);
            add(gigi, posisi, kondisi);
            console.log(gigi);
          }
          }else if (strUser=="att") {
            var group = evt.target.parentNode;
            add_pos_down();
            var attShape = $(group).find(".att");
            if (attShape.length > 0){
              attShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            var bbox = group.getBBox();
            var svgns = "http://www.w3.org/2000/svg";
            var text = document.createElementNS(svgns, "text");
            text.textContent = 'att';
            text.setAttributeNS(null,'font-size', '8px');
            text.setAttribute(null, 'fill', '#000');
            var xPos = bbox.x ; 
            var yPos = bbox.y ;  
            text.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            text.setAttribute("class","att");
            group.appendChild(text);
            add(gigi, posisi, kondisi);
            console.log(gigi);
          }
          }else if (strUser=="abr") {
            var group = evt.target.parentNode;
            add_pos_down();
            var abrShape = $(group).find(".abr");
            if (abrShape.length > 0){
              abrShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            var bbox = group.getBBox();
            var svgns = "http://www.w3.org/2000/svg";
            var text = document.createElementNS(svgns, "text");
            text.textContent = 'abr';
            text.setAttributeNS(null,'font-size', '8px');
            text.setAttribute(null, 'fill', '#000');
            var xPos = bbox.x ; 
            var yPos = bbox.y ;  
            text.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            text.setAttribute("class","abr");
            group.appendChild(text);
            add(gigi, posisi, kondisi);
            console.log(gigi);
          }
          }else if (strUser=="sou") {
           var group = evt.target.parentNode;
            add_pos_down();
            var souShape = $(group).find(".sou");
            if (souShape.length > 0){
              souShape.remove();
              hapus(gigi, posisi, kondisi);
            }
            else{
            var bbox = group.getBBox();
            var svgns = "http://www.w3.org/2000/svg";
            var text = document.createElementNS(svgns, "text");
            text.textContent = 'sou';
            text.setAttributeNS(null,'font-size', '8px');
            text.setAttribute(null, 'fill', '#000');
            var xPos = bbox.x ; 
            var yPos = bbox.y ;  
            text.setAttribute("transform", "translate(" + xPos + "," + yPos + ")");
            text.setAttribute("class","sou");
            group.appendChild(text);
            add(gigi, posisi, kondisi);
            console.log(gigi);
          } 
          }
          $('#keadaan_gigi').get(0).selectedIndex = 0;
          console.log(gigi);
        });

        load();


        
        });
  
  </script>
</body>
</html>  