<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <title></title>
</head>
 <body>
         <!-- Main content -->
    <section class="content-header">
        <h1>
          Edit Data Perawatan
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">List Pasien</a></li>
          <li class="active">Data tables</li>
        </ol>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#editpr" data-toggle="tab">Edit Perawatan</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="editpr">
                <form class="form-horizontal" method="post" action="<?php echo base_url('c_perawat/update_perawatan');?>">
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <?php 
                      foreach ($pasien as $key) { ?>
                      <input type="text" class="form-control" id="tgl" name="tgl" value="<?php echo $key->nama;?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <?php 
                    foreach ($perawatan as $key) { ?>
                    <label for="inputEmail" class="col-sm-2 control-label">Tanggal</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="tgl" name="tgl" value="<?php echo $key->tgl; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Keluhan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="keluhan" name="keluhan" value="<?php echo $key->keluhan; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Temuan Masalah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="temuan_masalah" name="temuan_masalah" value="<?php echo $key->temuan_masalah; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Gigi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="gigi" name="gigi" value="<?php echo $key->gigi; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Diagnosa</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="diagnosa" name="diagnosa" value="<?php echo $key->diagnosa; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Kode ICD</label>
                    <div class="col-sm-10">
                      <select size="1" id="k1" class="form-control"  type="select" name="kode_icd" value="-Select Your Rank-">
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
                      <select id="K00" name="kode_icd1" class="form-control">
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
                  <select id="K01" name="kode_icd1" class="form-control">
                      <option disabled selected value>pilih</option>  
                      <option value="K01_0">K01.0 Embedded teeth</option>
                      <option value="K01_1">K01.1 Impacted teeth</option>
                    </select>
                </div>

                <div id="K02" class="style-sub-1" style="display: none;" name="stylesub1" >
                <label> </label>
                  <select id="K02" name="kode_icd1" class="form-control">
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
                <label> </label>
                  <select id="K03" name="kode_icd1" class="form-control">
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
                <label> </label>
                  <select id="K04" name="kode_icd1" class="form-control">
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
                <label> </label>
                  <select id="K05" name="kode_icd1" class="form-control">
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
                <label> </label>
                  <select id="K06" name="kode_icd1" class="form-control">
                      <option disabled selected value>pilih</option>  
                      <option value="K06_0">K06.0 Gingival recession</option>
                      <option value="K06_1">K06.1 Gingival enlargement</option>
                      <option value="K06_2">K06.2 Gingival and edentulous alveolar ridge lesions associated with trauma</option>
                      <option value="K06_8">K06.8 Other specified disorders of gingiva and edentulous alveolar ridge</option>
                      <option value="K06_9">K06.9 Disorder of gingiva and edentulous alveolar ridge, unspecified</option>
                    </select>
                </div>

                <div id="K07" class="style-sub-1" style="display: none;" name="stylesub1" >
                <label> </label>
                  <select id="K07" name="kode_icd1" class="form-control">
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
                <label> </label>
                  <select id="K08" name="kode_icd1" class="form-control">
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
                <label> </label>
                  <select id="K09" name="kode_icd1" class="form-control">
                      <option disabled selected value>pilih</option>  
                      <option value="K09_0">K09.0 Developmental odontogenic cysts</option>
                      <option value="K09_1">K09.1 Loss of teeth due to accident, extraction or local periodontal disease</option>
                      <option value="K09_2">K09.2 Other cysts of jaw</option>
                      <option value="K09_8">K09.8 Other cysts of oral region, not elsewhere classified</option>
                      <option value="K09_9">K09.9 Cyst of oral region, unspecified</option>
                    </select>
                </div>

                <div id="K10" class="style-sub-1" style="display: none;" name="stylesub1" >
                <label> </label>
                  <select id="K10" name="kode_icd1" class="form-control">
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
                <label> </label>
                  <select id="K11" name="kode_icd1" class="form-control">
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
                <label> </label>
                  <select id="K12" name="kode_icd1" class="form-control">
                      <option disabled selected value>pilih</option>
                      <option value="K12_0">K12.0 Recurrent oral aphthae</option>
                      <option value="K12_1">K12.1 Other forms of stomatitis</option>
                      <option value="K12_2">K12.2 Cellulitis and abscess of mouth</option>
                      <option value="K12_3">K12.3 Oral mucositis (ulcerative)</option>
                    </select>
                </div>

                <div id="K13" class="style-sub-1" style="display: none;" name="stylesub1" >
                <label> </label>
                  <select id="K13" name="kode_icd1" class="form-control">
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
                <label> </label>
                  <select id="K14" name="kode_icd1" class="form-control">
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
              <label> </label>
                <select id="K00_0s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Hypodontia">Hypodontia</option>
                    <option value="Oligodontia">Oligodontia</option>
                  </select>
              </div>

              <div id="K00_1" class="style-sub-2 " style="display: none;" name="stylesub1">
              <label> </label>
                <select id="K00_1s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Distomolar">Distomolar</option>
                    <option value="Fourth molar">Fourth molar</option>
                    <option value="Mesiodens">Mesiodens</option>
                    <option value="Paramolar">Paramolar</option>
                    <option value="Supplementary teeth">Supplementary teeth</option>
                  </select>
              </div>

              <div id="K00_2" class="style-sub-2 " style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K00_2s" name="kode_icd2" class="form-control">
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
              <label> </label>
                <select id="K00_3s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Dental fluorosis">Dental fluorosis</option>
                    <option value="Mottling of enamel">Mottling of enamel</option>
                    <option value="Nonfluoride enamel opacities">Nonfluoride enamel opacities</option>
                  </select>
              </div>

              <div id="K00_4" class="style-sub-2 " style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K00_4s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Aplasia and hypoplasia of cementum">Aplasia and hypoplasia of cementum</option>
                    <option value="Dilaceration of tooth">Dilaceration of tooth</option>
                    <option value="Enamel hypoplasia (neonatal)(postnatal)(prenatal)">Enamel hypoplasia (neonatal)(postnatal)(prenatal)</option>
                    <option value="Regional odontodysplasia">Regional odontodysplasia</option>
                    <option value="Turner tooth">Turner tooth</option>
                  </select>
              </div>

              <div id="K00_5" class="style-sub-2 " style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K00_5s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Amelogenesis imperfecta">Amelogenesis imperfecta</option>
                    <option value="Dentinogenesis imperfecta">Dentinogenesis imperfecta</option>
                    <option value="Odontogenesis imperfecta">Odontogenesis imperfecta</option>
                    <option value="Dentinal dysplasia">Dentinal dysplasia</option>
                    <option value="Shell teeth">Shell teeth</option>
                  </select>
              </div>

              <div id="K00_6" class="style-sub-2 " style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K00_6s" name="kode_icd2" class="form-control">
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
              <label> </label>
                <select id="K00_8s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Colour changes during tooth formation">Colour changes during tooth formation</option>
                    <option value="Intrinsic staining of teeth NOS">Intrinsic staining of teeth NOS</option>
                  </select>
              </div>

              <div id="K00_9" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K00_9s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Disorder of odontogenesis NOS">Disorder of odontogenesis NOS</option>
                  </select>
              </div>

              <div id="K01_0" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K01_0s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="An embedded tooth is a tooth that has failed to erupt without obstruction by another tooth.">An embedded tooth is a tooth that has failed to erupt without obstruction by another tooth.</option>
                  </select>
              </div>

              <div id="K01_1" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K01_1s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="An impacted tooth is a tooth that has failed to erupt because of obstruction by another tooth">An impacted tooth is a tooth that has failed to erupt because of obstruction by another tooth</option>
                  </select>
              </div>

              <div id="K02_0" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K02_0s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="White spot lesions [initial caries]">White spot lesions [initial caries]</option>
                  </select>
              </div>

              <div id="K02_4" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K02_4s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Infantile melanodontia">Infantile melanodontia</option>
                    <option value="Melanodontoclasia">Melanodontoclasia</option>
                  </select>
              </div>

              <div id="K03_0" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K03_0s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="approximal of teeth">approximal of teeth</option>
                    <option value="occlusal of teeth">occlusal of teeth</option>
                  </select>
              </div>

              <div id="K03_1" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K03_1s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="dentifrice of teeth">dentifrice of teeth</option>
                    <option value="habitual of teeth">habitual of teeth</option>
                    <option value="occupational of teeth">occupational of teeth</option>
                    <option value="ritual of teeth">ritual of teeth</option>
                    <option value="Wedge defect NOS of teeth">Wedge defect NOS of teeth</option>
                  </select>
              </div>

              <div id="K03_2" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K03_2s" name="kode_icd2" class="form-control">
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
              <label> </label>
                <select id="K03_3s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Internal granuloma of pulp">Internal granuloma of pulp</option>
                    <option value="Resorption of teeth (external)">Resorption of teeth (external)</option>
                  </select>
              </div>

              <div id="K03_4" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K03_4s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Cementation hyperplasia">Cementation hyperplasia</option>
                  </select>
              </div>

              <div id="K03_6" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K03_6s" name="kode_icd2" class="form-control">
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
              <label> </label>
                <select id="K03_8s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Irradiated enamel">Irradiated enamel</option>
                    <option value="Sensitive dentine">Sensitive dentine</option>
                  </select>
              </div>

              <div id="K04_0" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K04_0s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="NOS">NOS</option>
                    <option value="acute">acute</option>
                    <option value="chronic (hyperplastic)(ulcerative)">chronic (hyperplastic)(ulcerative)</option>
                    <option value="irreversible">irreversible</option>
                    <option value="reversible">reversible</option>
                  </select>
              </div>

              <div id="K04_1" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K04_1s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Pulpal gangrene">Pulpal gangrene</option>
                  </select>
              </div>

              <div id="K04_2" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K04_2s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Denticles">Denticles</option>
                    <option value="Pulpal calcifications">Pulpal calcifications</option>
                    <option value="Pulpal stones">Pulpal stones</option>
                  </select>
              </div>

              <div id="K04_3" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K04_3s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Secondary or irregular dentine">Secondary or irregular dentine</option>
                  </select>
              </div>

              <div id="K04_4" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K04_4s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Acute apical periodontitis NOS">Acute apical periodontitis NOS</option>
                  </select>
              </div>

              <div id="K04_5" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K04_5s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Apical or periapical granuloma">Apical or periapical granuloma</option>
                    <option value="Apical periodontitis NOS">Apical periodontitis NOS</option>
                  </select>
              </div>

              <div id="K04_6" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K04_6s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="dental abdental scess with sinus">dental abdental scess with sinus</option>
                    <option value="Dentoalveolar abdental scess with sinus">Dentoalveolar abdental scess with sinus</option>
                  </select>
              </div>

              <div id="K04_7" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K04_7s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="dental abscess NOS">dental abscess NOS</option>
                    <option value="Dentoalveolar dental abscess NOS">Dentoalveolar dental abscess NOS</option>
                    <option value="Periapical dental abscess NOS">Periapical dental abscess NOS</option>
                  </select>
              </div>

              <div id="K04_8" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K04_8s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="apical (periodontal)">apical (periodontal)</option>
                    <option value="periapical">periapical</option>
                    <option value="residual radicular">residual radicular</option>
                  </select>
              </div>

              <div id="K05_1" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K05_1s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="NOS">NOS</option>
                    <option value="desquamative">desquamative</option>
                    <option value="hyperplastic">hyperplastic</option>
                    <option value="simple marginal">simple marginal</option>
                    <option value="ulcerative">ulcerative</option>
                  </select>
              </div>

              <div id="K05_2" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K05_2s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Acute pericoronitis">Acute pericoronitis</option>
                    <option value="Parodontal abscess">Parodontal abscess</option>
                    <option value="Periodontal abscess">Periodontal abscess</option>
                  </select>
              </div>

              <div id="K05_3" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K05_3s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Chronic pericoronitis">Chronic pericoronitis</option>
                    <option value="Periodontitis NOS">Periodontitis NOS</option>
                    <option value="Periodontitis complex">Periodontitis complex</option>
                    <option value="Periodontitis simplex">Periodontitis simplex</option>
                  </select>
              </div>

              <div id="K05_4" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K05_4s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Juvenile periodontosis">Juvenile periodontosis</option>
                  </select>
              </div>

              <div id="K06_0" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K06_0s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Gingival recession (generalized)(localized)(postinfective)(post-operative)">Gingival recession (generalized)(localized)(postinfective)(post-operative)</option>
                  </select>
              </div>

              <div id="K06_1" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K06_1s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Gingival fibromatosis">Gingival fibromatosis</option>
                  </select>
              </div>

              <div id="K06_2" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K06_2s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Irritative hyperplasia of edentulous ridge [denture hyperplasia]">Irritative hyperplasia of edentulous ridge [denture hyperplasia]</option>
                  </select>
              </div>

              <div id="K06_8" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K06_8s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Fibrous epulis">Fibrous epulis</option>
                    <option value="Flabby ridge">Flabby ridge</option>
                    <option value="Giant cell epulis">Giant cell epulis</option>
                    <option value="Peripheral giant cell granuloma">Peripheral giant cell granuloma</option>
                    <option value="Pyogenic granuloma of gingiva">Pyogenic granuloma of gingiva</option>
                  </select>
              </div>

              <div id="K07_0" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K07_0s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Hyperplasia, hypoplasia: mandibular">Hyperplasia, hypoplasia: mandibular</option>
                    <option value="Hyperplasia, hypoplasia : maxillary">Hyperplasia, hypoplasia : maxillary</option>
                    <option value="Macrognathism (mandibular)(maxillary)">Macrognathism (mandibular)(maxillary)</option>
                    <option value="Micrognathism (mandibular)(maxillary)">Micrognathism (mandibular)(maxillary)</option>
                  </select>
              </div>

              <div id="K07_1" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K07_1s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Asymmetry of jaw">Asymmetry of jaw</option>
                    <option value="Prognathism (mandibular)(maxillary)">Prognathism (mandibular)(maxillary)</option>
                    <option value="Retrognathism (mandibular)(maxillary)">Retrognathism (mandibular)(maxillary)</option>
                  </select>
              </div>

              <div id="K07_2" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K07_2s" name="kode_icd2" class="form-control">
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
              <label> </label>
                <select id="K07_3s" name="kode_icd2" class="form-control">
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
              <label> </label>
                <select id="K07_5s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Abnormal jaw closure">Abnormal jaw closure</option>
                    <option value="Malocclusion due to abnormal swallowing">Malocclusion due to abnormal swallowing</option>
                    <option value="Malocclusion due to mouth breathing">Malocclusion due to mouth breathing</option>
                    <option value="Malocclusion due to tongue, lip or finger habits">Malocclusion due to tongue, lip or finger habits</option>
                  </select>
              </div>

              <div id="K07_6" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K07_6s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Costen complex or syndrome">Costen complex or syndrome</option>
                    <option value="Derangement of temporomandibular joint">Derangement of temporomandibular joint</option>
                    <option value="Snapping jaw">Snapping jaw</option>
                    <option value="Temporomandibular joint-pain-dysfunction syndrome">Temporomandibular joint-pain-dysfunction syndrome</option>
                  </select>
              </div>

              <div id="K08_8" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K08_8s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Enlargement of alveolar ridge NOS">Enlargement of alveolar ridge NOS</option>
                    <option value="Irregular alveolar process">Irregular alveolar process</option>
                    <option value="Toothache NOS">Toothache NOS</option>
                  </select>
              </div>

              <div id="K09_0" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K09_0s" name="kode_icd2" class="form-control">
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
              <label> </label>
                <select id="K09_1s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="cyst of globulomaxillary">cyst of globulomaxillary</option>
                    <option value="cyst of incisive canal">cyst of incisive canal</option>
                    <option value="cyst of median palatal">cyst of median palatal</option>
                    <option value="cyst of nasopalatine">cyst of nasopalatine</option>
                    <option value="cyst of palatine papilla">cyst of palatine papilla</option>
                  </select>
              </div>

              <div id="K09_2" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K09_2s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="cyst of jaw : NOS">cyst of jaw : NOS</option>
                    <option value="cyst of jaw : aneurysmal">cyst of jaw : aneurysmal</option>
                    <option value="cyst of jaw : haemorrhagic">cyst of jaw : haemorrhagic</option>
                    <option value="cyst of jaw : traumatic">cyst of jaw : traumatic</option>
                  </select>
              </div>

              <div id="K09_8" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K09_8s" name="kode_icd2" class="form-control">
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
              <label> </label>
                <select id="K10_0s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Latent bone cyst of jaw">Latent bone cyst of jaw</option>
                    <option value="Stafne cyst">Stafne cyst</option>
                    <option value="torus mandibularis">torus mandibularis</option>
                    <option value="torus palatinus">torus palatinus</option>
                  </select>
              </div>

              <div id="K10_1" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K10_1s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Giant cell granuloma NOS">Giant cell granuloma NOS</option>
                  </select>
              </div>

              <div id="K10_2" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K10_2s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Osteitis of jaw (acute)(chronic)(suppurative)">Osteitis of jaw (acute)(chronic)(suppurative)</option>
                    <option value="Osteomyelitis (neonatal) of jaw (acute)(chronic)(suppurative)">Osteomyelitis (neonatal) of jaw (acute)(chronic)(suppurative)</option>
                    <option value="Osteoradionecrosis of jaw (acute)(chronic)(suppurative)">Osteoradionecrosis of jaw (acute)(chronic)(suppurative)</option>
                    <option value="Periostitis of jaw (acute)(chronic)(suppurative)">Periostitis of jaw (acute)(chronic)(suppurative)</option>
                    <option value="Sequestrum of jaw bone">Sequestrum of jaw bone</option>
                  </select>
              </div>

              <div id="K10_3" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K10_3s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Alveolar osteitis">Alveolar osteitis</option>
                    <option value="Dry socket">Dry socket</option>
                  </select>
              </div>

              <div id="K10_8" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K10_8s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Cherubism">Cherubism</option>
                    <option value="Exostosis of jaw">Exostosis of jaw</option>
                    <option value="Fibrous dysplasia of jaw">Fibrous dysplasia of jaw</option>
                    <option value="Unilateral condylar: hyperplasia">Unilateral condylar: hyperplasia</option>
                    <option value="Unilateral condylar: hypoplasia">Unilateral condylar: hypoplasia</option>
                  </select>
              </div>

              <div id="K11_5" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K11_5s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="calculus of salivary gland or duct">calculus of salivary gland or duct </option>
                    <option value="stone of salivary gland or duct">stone of salivary gland or duct</option>
                  </select>
              </div>

              <div id="K11_6" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K11_6s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="extravasation cyst of salivary gland">extravasation cyst of salivary gland</option>
                    <option value="retention cyst of salivary gland">retention cyst of salivary gland</option>
                    <option value="ranula">ranula</option>
                  </select>
              </div>

              <div id="K11_7" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K11_7s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Hypoptyalism">Hypoptyalism</option>
                    <option value="Ptyalism">Ptyalism</option>
                    <option value="Xerostomia">Xerostomia</option>
                  </select>
              </div>

              <div id="K11_8" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K11_8s" name="kode_icd2" class="form-control">
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
              <label> </label>
                <select id="K11_9s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Sialoadenopathy NOS">Sialoadenopathy NOS</option>
                  </select>
              </div>

              <div id="K12_0" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K12_0s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Aphthous stomatitis (major)(minor)">Aphthous stomatitis (major)(minor)</option>
                    <option value="Bednar aphthae">Bednar aphthae</option>
                    <option value="Periadenitis mucosa necrotica recurrens">Periadenitis mucosa necrotica recurrens</option>
                    <option value="Recurrent aphthous ulcer">Recurrent aphthous ulcer</option>
                    <option value="Stomatitis herpetiformis">Stomatitis herpetiformis</option>
                  </select>
              </div>

              <div id="K12_1" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K12_1s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Stomatitis NOS">Stomatitis NOS</option>
                    <option value="Stomatitis denture">Stomatitis denture</option>
                    <option value="Stomatitis ulcerative">Stomatitis ulcerative</option>
                    <option value="Stomatitis vesicular">Stomatitis vesicular</option>
                  </select>
              </div>

              <div id="K12_2" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K12_2s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Cellulitis of mouth (floor)">Cellulitis of mouth (floor)</option>
                    <option value="Submandibular abscess">Submandibular abscess</option>
                  </select>
              </div>

              <div id="K12_3" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K12_3s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="NOS">NOS</option>
                    <option value="drug-induced">drug-induced</option>
                    <option value="radiation induced">radiation induced</option>
                    <option value="viral">viral</option>
                  </select>
              </div>

              <div id="K13_0" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K13_0s" name="kode_icd2" class="form-control">
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
              <label> </label>
                <select id="K13_2s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Erythroplakia of oral epithelium, including tongue">Erythroplakia of oral epithelium, including tongue</option>
                    <option value="Leukoedema of oral epithelium, including tongue">Leukoedema of oral epithelium, including tongue</option>
                    <option value="Leukokeratosis nicotina palati">Leukokeratosis nicotina palati</option>
                    <option value="Smoker palate">Smoker palate</option>
                  </select>
              </div>

              <div id="K13_4" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K13_4s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Eosinophilic granuloma of oral mucosa">Eosinophilic granuloma of oral mucosa</option>
                    <option value="Granuloma pyogenicum of oral mucosa">Granuloma pyogenicum of oral mucosa</option>
                    <option value="Verrucous xanthoma of oral mucosa">Verrucous xanthoma of oral mucosa</option>
                  </select>
              </div>

              <div id="K13_5" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K13_5s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Submucous fibrosis of tongue">Submucous fibrosis of tongue</option>
                  </select>
              </div>

              <div id="K13_7" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K13_7s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Focal oral mucinosis">Focal oral mucinosis</option>
                  </select>
              </div>

              <div id="K14_0" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K14_0s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Abscess of tongue">Abscess of tongue</option>
                    <option value="Ulceration (traumatic) of tongue">Ulceration (traumatic) of tongue</option>
                  </select>
              </div>

              <div id="K14_3" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K14_3s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Black hairy tongue">Black hairy tongue</option>
                    <option value="Coated tongue">Coated tongue</option>
                    <option value="Hypertrophy of foliate papillae">Hypertrophy of foliate papillae</option>
                    <option value="Lingua villosa nigra">Lingua villosa nigra</option>
                  </select>
              </div>

              <div id="K14_4" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K14_4s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Atrophic glossitis">Atrophic glossitis</option>
                  </select>
              </div>

              <div id="K14_5" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K14_5s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Fissured tongue">Fissured tongue</option>
                    <option value="Furrowed tongue">Furrowed tongue</option>
                    <option value="Scrotal tongue">Scrotal tongue</option>
                  </select>
              </div>

              <div id="K14_6" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K14_6s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Glossopyrosis">Glossopyrosis</option>
                    <option value="Painful tongue">Painful tongue</option>
                  </select>
              </div>

              <div id="K14_8" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K14_8s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Atrophy of tongue">Atrophy of tongue</option>
                    <option value="Crenated of tongue">Crenated of tongue</option>
                    <option value="Enlargement of tongue">Enlargement of tongue</option>
                    <option value="Hypertrophy of tongue">Hypertrophy of tongue</option>
                  </select>
              </div>

              <div id="K14_9" class="style-sub-2" style="display: none;" name="stylesub1" >
              <label> </label>
                <select id="K14_9s" name="kode_icd2" class="form-control">
                    <option disabled selected value>pilih</option>  
                    <option value="Glossopathy NOS">Glossopathy NOS</option>
                  </select>
                    </div>
                  </div>
                    </div>
                     <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Perawatan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="perawatan" name="perawatan" value="<?php echo $key->perawatan; ?>" >
                    </div>
                  </div>
                     <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Diperiksa Oleh</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="pencatat" name="pencatat" value="drg <?php echo $key->firstname; ?>" readonly>
                    </div>
                  </div>
                  <input type="hidden" name="id_perawatan" value="<?php echo $key->id_perawatan; ?>">
                  <input type="hidden" name="id_pasien" value="<?php echo $key->id_pasien; ?>">
                  <input type="hidden" id="kode_icd" name="kode_icd" value="<?php echo $key->kode_icd; ?>">
                  <input type="hidden" id="kode_icd1" name="kode_icd1" value="<?php echo $key->kode_icd1; ?>">
                  <input type="hidden" id="kode_icd2" name="kode_icd2" value="<?php echo $key->kode_icd2; ?>">
                  <?php } ?>
                  <input type="hidden" id="kode_icdn" name="kode_icdn">
                  <input type="hidden" id="kode_icd1n" name="kode_icd1n">
                  <input type="hidden" id="kode_icd2n" name="kode_icd2n" >
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" style="float: right;"class="btn btn-info" href="<?php echo base_url('c_perawat/update_perawatan');?>">Submit</button>
                      <?php  } ?> 
                    </div>
                  </div>
                </form>
                <!-- /.post -->
              </div>

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
              


                <!-- /.tab-pane -->
              </div>
            </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->   
              <!-- /.box-body -->

            <!-- /.box -->
          
      </section>
      <!-- /.content -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function () {
      var icd = $('#kode_icd').val();
      var icd1 = $('#kode_icd1').val();
      var icds = icd1+"s";
      var icd2 = $('#kode_icd2').val();
      console.log(icd);
      console.log(icd1);
      console.log(icd2);
      var cc;
      var dd;
      
      //jgn d ubah
      if(icd != ""){
      $("#k1").val(icd);
      var cd = $("#k1").val();
      console.log("cd"+cd);
      $("#kode_icdn").val(cd);
      $("#"+ icd).show();
      var cari = $("#"+icd).find("#"+icd);
      cari.val(icd1);
      var cd1 = cari.val(icd1);
      console.log("cd1"+cd1);
      $("#kode_icd1n").val(cd);
      if (icd2 != "") {
          $("#" + icd1).show();
          $("#"+icds).val(icd2);
          var cd2 = $("#"+icds).val();
          console.log("cd2"+cd2);
          $("#kode_icd2n").val(cd2);
          var cari2 = $("#"+icd1).find("#"+icds);
          cari2.val(icd2);
          //$("#kode_icd2n").val(correspondingID2);
      }
    }


var correspondingID;
var correspondingID1;
console.log(correspondingID);

//           //dari selection box pertama
          if (icd == "") {
          $("#k1").change(function() {
          correspondingID = $(this).find(":selected").val()
          console.log("1"+correspondingID);
          $("#kode_icdn").val(correspondingID);
          console.log($("#kode_icdn").val());
          alert($("#k1 option:selected").val());
          $(".style-sub-1").hide();
          $("#" + correspondingID).show();
          $("#"+correspondingID).change(function() {
            correspondingID2 = $(this).find(":selected").val();
            console.log("2"+correspondingID2);
            $("#kode_icd1n").val(correspondingID2);
            console.log($("#kode_icd1n").val());
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
                  $("#kode_icd2n").val(correspondingID3);
                  console.log($("#kode_icd2n").val());
                });
                
              }
            
          });
        });
        }

        if (icd1 != "" && icd2 == "") {
          var zz = $("#"+icd).find("#"+icd);
          console.log(zz);
          $("#"+icd).find("#"+icd).change(function() {
            correspondingID2 = $(this).find(":selected").val();
            console.log("2"+correspondingID2);
            $("#kode_icd1n").val(correspondingID2);
            console.log($("#kode_icd1n").val());
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
                  $("#kode_icd2n").val(correspondingID3);
                  console.log($("#kode_icd2n").val());
                });
                
              }
            
          });

          $("#k1").change(function() {
          correspondingID = $(this).find(":selected").val()
          console.log("1"+correspondingID);
          $("#kode_icdn").val(correspondingID);
          console.log($("#kode_icdn").val());
          alert($("#k1 option:selected").val());
          $(".style-sub-1").hide();
          $("#" + correspondingID).show();
          $("#"+correspondingID).change(function() {
            correspondingID2 = $(this).find(":selected").val();
            console.log("2"+correspondingID2);
            $("#kode_icd1n").val(correspondingID2);
            console.log($("#kode_icd1n").val());
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
                  $("#kode_icd2n").val(correspondingID3);
                  console.log($("#kode_icd2n").val());
                });
                
              }
            
          });
        });
        }

    });
      
    </script>
    </body>
</html>