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
                  <table id="tablekunjungan" class="table table-bordered " style="width: 100%; float: right;">
                    <tr>
                      <th style="width: 10px">No.</th>
                      <th style="width: 30px">Kunjungan</th>
                      <th style="width: 10px">Dokter</th>
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
                  <table id="tb-data" class="table table-striped" style="width: 100%; float: right;">
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
                  <button class="btn-success" id="btn-edit" data-toggle="modal" data-target="#edit" style="float: right; padding: 5px 10px 5px 10px;">Edit</button>
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

        function spesific_record(tgl, id_pasien) {
          $.ajax({
              url:"<?php echo base_url('c_perawat/spesific_odontogram');?>",
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
                  var findclass = $('#svgselect').find('.rct  , .nvt , .non , .une , .pre , .ano , .cfr , .mis , .poc , .fmc , .prd , .fld , .ipx , .sqrmeb , .linemeb , .sqrpob , .linepob , .pattpob , .rrx , .mpc , .gmc , .pon , .abu , .acr , .imv , .dia , .att , .abr');
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

                 }
                  });  
                }
              },
              error:function(){
                alert('error ... ');
              }
              
            });
        }

        function perOdontogram(id_odn){
          $.ajax({
            url:"<?php echo base_url('c_perawat/loadPerOdn');?>",
              type:"POST",
              data:{ id_start_odon: id_odn
              },
              dataType:'json',
              success:function(data){
                alert("benar");
                console.log(data);
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

        function load(){
          $.ajax({
            url:"<?php echo base_url('c_perawat/odt/');?>" + id_pasien,
            type:'GET',
            dataType:'JSON',
            success:function(data){
              console.log(data.morethan1year);
            
              // if (data.morethan1year != 0) {
              //   alert('Pasien tidak melakukan kunjungan lebih dari satu tahun. Harap buat odontogram baru dengan klik "Buat Odontogtam Baru"');
              // }
              //alert('data sukses ditampilkan');
              console.log(data.id_st);
              id_start_odon = data.id_st[0].id_start_odon;
                //set tabel kunjungan
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


        load();
        
        });
  
  </script>
</body>
</html>  