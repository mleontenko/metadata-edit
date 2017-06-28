<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "utf-8">
		<title>Metadata Editor</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	</head>
	<body>
	<div class="form-group" >
	<form action="" method="post">
	<h2>Kontakt 1</h2><br /> 
	Odgovorna osoba: <input type="text" name="individualName1"><br />
	Naziv organizacije: <input type="text" name="organisationName1"><br />
	Pozicija: <input type="text" name="positionName1"><br />
		
	<input type="submit" name ="submit">
	</form>
	</div>
	<?php

	if(isset($_POST['submit']))
	{
		if (strlen ($_POST['individualName1']) > 0)
		{
		$individualName1 = '<gmd:individualName>
            <gco:CharacterString>'.$_POST['individualName1'].'</gco:CharacterString>
         </gmd:individualName>';
		} else {
			$individualName1 = '';
		}
		
		if (strlen ($_POST['organisationName1']) > 0)
		{
		$organisationName1 = '<gmd:organisationName>
            <gco:CharacterString>'.$_POST['organisationName1'].'</gco:CharacterString>
         </gmd:organisationName>';
		} else {
			$organisationName1 = '';
		}
		
		if (strlen ($_POST['positionName1']) > 0)
		{
		$positionName1 = '<gmd:positionName>
            <gco:CharacterString>'.$_POST['positionName1'].'</gco:CharacterString>
         </gmd:positionName>';
		} else {
			$positionName1 = '';
		}
		
		
		
		
		
		$myfile = fopen("metadata.xml", "w") or die("Unable to open file!");
		
		$txt = '<?xml version="1.0" encoding="UTF-8"?>
<gmd:MD_Metadata xmlns:gmd="http://www.isotc211.org/2005/gmd"
                 xmlns:gco="http://www.isotc211.org/2005/gco"
                 xmlns:xlink="http://www.w3.org/1999/xlink"
                 xmlns:gml="http://www.opengis.net/gml"
                 xmlns:geonet="http://www.fao.org/geonetwork"
                 xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                 xsi:schemaLocation="http://www.isotc211.org/2005/gmd http://www.isotc211.org/2005/gmd/gmd.xsd http://www.isotc211.org/2005/srv http://schemas.opengis.net/iso/19139/20060504/srv/srv.xsd">
  <gmd:fileIdentifier>
      <gco:CharacterString>8cfbef3f-e18a-4c18-a059-28abdbd2557e</gco:CharacterString>
  </gmd:fileIdentifier>
  <gmd:language>
      <gmd:LanguageCode codeList="http://www.loc.gov/standards/iso639-2/" codeListValue="hrv"/>
  </gmd:language>
  <gmd:hierarchyLevel>
      <gmd:MD_ScopeCode codeList="http://standards.iso.org/ittf/PubliclyAvailableStandards/ISO_19139_Schemas/resources/Codelist/ML_gmxCodelists.xml#MD_ScopeCode"
                        codeListValue="dataset"/>
  </gmd:hierarchyLevel>
  <gmd:contact>
      <gmd:CI_ResponsibleParty>
         '.$individualName1.$organisationName1.$positionName1.'
         <gmd:contactInfo>
            <gmd:CI_Contact>
               <gmd:phone>
                  <gmd:CI_Telephone>
                     <gmd:voice>
                        <gco:CharacterString>4806-295</gco:CharacterString>
                     </gmd:voice>
                     <gmd:facsimile gco:nilReason="missing">
                        <gco:CharacterString/>
                     </gmd:facsimile>
                  </gmd:CI_Telephone>
               </gmd:phone>
               <gmd:address>
                  <gmd:CI_Address>
                     <gmd:deliveryPoint>
                        <gco:CharacterString>Ilica 3</gco:CharacterString>
                     </gmd:deliveryPoint>
                     <gmd:city>
                        <gco:CharacterString>Zagreb</gco:CharacterString>
                     </gmd:city>
                     <gmd:administrativeArea>
                        <gco:CharacterString>Država</gco:CharacterString>
                     </gmd:administrativeArea>
                     <gmd:postalCode>
                        <gco:CharacterString>10000</gco:CharacterString>
                     </gmd:postalCode>
                     <gmd:country>
                        <gco:CharacterString>Hrvatska</gco:CharacterString>
                     </gmd:country>
                     <gmd:electronicMailAddress>
                        <gco:CharacterString>kristofm@dzs.hr</gco:CharacterString>
                     </gmd:electronicMailAddress>
                  </gmd:CI_Address>
               </gmd:address>
            </gmd:CI_Contact>
         </gmd:contactInfo>
         <gmd:role>
            <gmd:CI_RoleCode codeList="http://standards.iso.org/ittf/PubliclyAvailableStandards/ISO_19139_Schemas/resources/Codelist/ML_gmxCodelists.xml#CI_RoleCode"
                             codeListValue="owner"/>
         </gmd:role>
      </gmd:CI_ResponsibleParty>
  </gmd:contact>
  <gmd:dateStamp>
      <gco:Date>2016-04-20</gco:Date>
  </gmd:dateStamp>
  <gmd:referenceSystemInfo>
      <gmd:MD_ReferenceSystem>
         <gmd:referenceSystemIdentifier>
            <gmd:RS_Identifier>
               <gmd:code>
                  <gco:CharacterString>004</gco:CharacterString>
               </gmd:code>
               <gmd:codeSpace>
                  <gco:CharacterString>hr:nipp:crs</gco:CharacterString>
               </gmd:codeSpace>
               <gmd:version>
                  <gco:CharacterString>1.0</gco:CharacterString>
               </gmd:version>
            </gmd:RS_Identifier>
         </gmd:referenceSystemIdentifier>
      </gmd:MD_ReferenceSystem>
  </gmd:referenceSystemInfo>
  <gmd:identificationInfo>
      <gmd:MD_DataIdentification>
         <gmd:citation>
            <gmd:CI_Citation>
               <gmd:title>
                  <gco:CharacterString>Podaci o poslovnim subjektima (NKD 2007.)</gco:CharacterString>
               </gmd:title>
               <gmd:alternateTitle>
                  <gco:CharacterString>NKD 2007</gco:CharacterString>
               </gmd:alternateTitle>
               <gmd:date>
                  <gmd:CI_Date>
                     <gmd:date>
                        <gco:Date>2007-01-01</gco:Date>
                     </gmd:date>
                     <gmd:dateType>
                        <gmd:CI_DateTypeCode codeList="http://standards.iso.org/ittf/PubliclyAvailableStandards/         ISO_19139_Schemas/resources/Codelist/ML_gmxCodelists.xml#CI_DateTypeCode"
                                             codeListValue="creation"/>
                     </gmd:dateType>
                  </gmd:CI_Date>
               </gmd:date>
               <gmd:identifier>
                  <gmd:RS_Identifier>
                     <gmd:code>
                        <gco:CharacterString>0023</gco:CharacterString>
                     </gmd:code>
                     <gmd:codeSpace>
                        <gco:CharacterString>hr:nipp:pp</gco:CharacterString>
                     </gmd:codeSpace>
                     <gmd:version>
                        <gco:CharacterString>1.0</gco:CharacterString>
                     </gmd:version>
                  </gmd:RS_Identifier>
               </gmd:identifier>
            </gmd:CI_Citation>
         </gmd:citation>
         <gmd:abstract>
            <gco:CharacterString>Poslovni subjekti prema aktivnosti i pravno ustrojbenim oblicima</gco:CharacterString>
         </gmd:abstract>
         <gmd:pointOfContact>
            <gmd:CI_ResponsibleParty>
               <gmd:individualName>
                  <gco:CharacterString>Branko Crkvenčić</gco:CharacterString>
               </gmd:individualName>
               <gmd:organisationName>
                  <gco:CharacterString>Državni zavod za statistiku</gco:CharacterString>
               </gmd:organisationName>
               <gmd:positionName>
                  <gco:CharacterString>Voditelj odjela</gco:CharacterString>
               </gmd:positionName>
               <gmd:contactInfo>
                  <gmd:CI_Contact>
                     <gmd:phone>
                        <gmd:CI_Telephone>
                           <gmd:voice>
                              <gco:CharacterString>4893 407</gco:CharacterString>
                           </gmd:voice>
                           <gmd:facsimile>
                              <gco:CharacterString/>
                           </gmd:facsimile>
                        </gmd:CI_Telephone>
                     </gmd:phone>
                     <gmd:address>
                        <gmd:CI_Address>
                           <gmd:deliveryPoint>
                              <gco:CharacterString>Ilica 3</gco:CharacterString>
                           </gmd:deliveryPoint>
                           <gmd:city>
                              <gco:CharacterString>Zagreb</gco:CharacterString>
                           </gmd:city>
                           <gmd:administrativeArea>
                              <gco:CharacterString>Država</gco:CharacterString>
                           </gmd:administrativeArea>
                           <gmd:postalCode>
                              <gco:CharacterString>10000</gco:CharacterString>
                           </gmd:postalCode>
                           <gmd:country>
                              <gco:CharacterString>Hrvatska</gco:CharacterString>
                           </gmd:country>
                           <gmd:electronicMailAddress>
                              <gco:CharacterString>crkvencicb@dzs.hr</gco:CharacterString>
                           </gmd:electronicMailAddress>
                        </gmd:CI_Address>
                     </gmd:address>
                  </gmd:CI_Contact>
               </gmd:contactInfo>
               <gmd:role>
                  <gmd:CI_RoleCode codeList="http://standards.iso.org/ittf/PubliclyAvailableStandards/ISO_19139_Schemas/resources/Codelist/ML_gmxCodelists.xml#CI_RoleCode"
                                   codeListValue="pointOfContact"/>
               </gmd:role>
            </gmd:CI_ResponsibleParty>
         </gmd:pointOfContact>
         <gmd:resourceMaintenance>
            <gmd:MD_MaintenanceInformation>
               <gmd:maintenanceAndUpdateFrequency>
                  <gmd:MD_MaintenanceFrequencyCode codeList="http://standards.iso.org/ittf/PubliclyAvailableStandards       ISO_19139_Schemas/resources/Codelist/ML_gmxCodelists.xml#MD_MaintenanceFreque ncyCode"
                                                   codeListValue="daily"/>
               </gmd:maintenanceAndUpdateFrequency>
               <gmd:maintenanceNote>
                  <gco:CharacterString>Ažuriranje se vrši na dnevnoj bazi.</gco:CharacterString>
               </gmd:maintenanceNote>
            </gmd:MD_MaintenanceInformation>
         </gmd:resourceMaintenance>
         <gmd:descriptiveKeywords>
            <gmd:MD_Keywords>
               <gmd:keyword>
                  <gco:CharacterString>Poslovni subjekti</gco:CharacterString>
               </gmd:keyword>
               <gmd:keyword>
                  <gco:CharacterString>NKD</gco:CharacterString>
               </gmd:keyword>
               <gmd:keyword>
                  <gco:CharacterString>DZS</gco:CharacterString>
               </gmd:keyword>
               <gmd:keyword>
                  <gco:CharacterString>pravne osobe</gco:CharacterString>
               </gmd:keyword>
               <gmd:keyword>
                  <gco:CharacterString>sektorska klasifikacija</gco:CharacterString>
               </gmd:keyword>
            </gmd:MD_Keywords>
         </gmd:descriptiveKeywords>
         <gmd:descriptiveKeywords>
            <gmd:MD_Keywords xmlns:srv="http://www.isotc211.org/2005/srv"
                             xmlns:gmx="http://www.isotc211.org/2005/gmx">
               <gmd:keyword>
                  <gco:CharacterString>Statistical units</gco:CharacterString>
               </gmd:keyword>
               <gmd:type>
                  <gmd:MD_KeywordTypeCode codeList="http://www.isotc211.org/2005/resources/codeList.xml#MD_KeywordTypeCode"
                                          codeListValue="theme"/>
               </gmd:type>
               <gmd:thesaurusName>
                  <gmd:CI_Citation>
                     <gmd:title>
                        <gco:CharacterString>GEMET - INSPIRE themes, version 1.0</gco:CharacterString>
                     </gmd:title>
                     <gmd:date>
                        <gmd:CI_Date>
                           <gmd:date>
                              <gco:Date>2008-06-01</gco:Date>
                           </gmd:date>
                           <gmd:dateType>
                              <gmd:CI_DateTypeCode codeList="http://standards.iso.org/ittf/PubliclyAvailableStandards/ISO_19139_Schemas/resources/Codelist/ML_gmxCodelists.xml#CI_DateTypeCode"
                                                   codeListValue="publication"/>
                           </gmd:dateType>
                        </gmd:CI_Date>
                     </gmd:date>
                     <gmd:identifier>
                        <gmd:MD_Identifier>
                           <gmd:code>
                              <gmx:Anchor xlink:href="http://geoportal.nipp.hr/geonetwork/srv/en/thesaurus.download?ref=external.theme.inspire-theme">geonetwork.thesaurus.external.theme.inspire-theme</gmx:Anchor>
                           </gmd:code>
                        </gmd:MD_Identifier>
                     </gmd:identifier>
                  </gmd:CI_Citation>
               </gmd:thesaurusName>
            </gmd:MD_Keywords>
         </gmd:descriptiveKeywords>
         <gmd:resourceConstraints>
            <gmd:MD_LegalConstraints>
               <gmd:useLimitation>
                  <gco:CharacterString>Javno</gco:CharacterString>
               </gmd:useLimitation>
               <gmd:useLimitation>
                  <gco:CharacterString/>
               </gmd:useLimitation>
            </gmd:MD_LegalConstraints>
         </gmd:resourceConstraints>
         <gmd:resourceConstraints>
            <gmd:MD_LegalConstraints>
               <gmd:accessConstraints>
                  <gmd:MD_RestrictionCode codeList="http://standards.iso.org/ittf/PubliclyAvailableStandards/         ISO_19139_Schemas/resources/Codelist/ML_gmxCodelists.xml#MD_RestrictionCode"
                                          codeListValue="otherRestrictions"/>
               </gmd:accessConstraints>
               <gmd:otherConstraints>
                  <gco:CharacterString>Javno</gco:CharacterString>
               </gmd:otherConstraints>
            </gmd:MD_LegalConstraints>
         </gmd:resourceConstraints>
         <gmd:spatialResolution>
            <gmd:MD_Resolution>
               <gmd:equivalentScale>
                  <gmd:MD_RepresentativeFraction>
                     <gmd:denominator>
                        <gco:Integer>5000</gco:Integer>
                     </gmd:denominator>
                  </gmd:MD_RepresentativeFraction>
               </gmd:equivalentScale>
            </gmd:MD_Resolution>
         </gmd:spatialResolution>
         <gmd:spatialResolution>
            <gmd:MD_Resolution>
               <gmd:distance>
                  <gco:Distance uom="m">1</gco:Distance>
               </gmd:distance>
            </gmd:MD_Resolution>
         </gmd:spatialResolution>
         <gmd:language>
            <gmd:LanguageCode codeList="http://www.loc.gov/standards/iso639-2/" codeListValue="hrv"/>
         </gmd:language>
         <gmd:topicCategory>
            <gmd:MD_TopicCategoryCode>economy</gmd:MD_TopicCategoryCode>
         </gmd:topicCategory>
         <gmd:topicCategory>
            <gmd:MD_TopicCategoryCode>boundaries</gmd:MD_TopicCategoryCode>
         </gmd:topicCategory>
         <gmd:extent>
            <gmd:EX_Extent>
               <gmd:geographicElement>
                  <gmd:EX_GeographicBoundingBox>
                     <gmd:extentTypeCode>
                        <gco:Boolean>true</gco:Boolean>
                     </gmd:extentTypeCode>
                     <gmd:westBoundLongitude>
                        <gco:Decimal>13.01</gco:Decimal>
                     </gmd:westBoundLongitude>
                     <gmd:eastBoundLongitude>
                        <gco:Decimal>19.45</gco:Decimal>
                     </gmd:eastBoundLongitude>
                     <gmd:southBoundLatitude>
                        <gco:Decimal>41.62</gco:Decimal>
                     </gmd:southBoundLatitude>
                     <gmd:northBoundLatitude>
                        <gco:Decimal>46.55</gco:Decimal>
                     </gmd:northBoundLatitude>
                  </gmd:EX_GeographicBoundingBox>
               </gmd:geographicElement>
               <gmd:temporalElement>
                  <gmd:EX_TemporalExtent>
                     <gmd:extent>
                        <gml:TimePeriod gml:id="IDcd3b1c4f-b5f7-439a-afc4-3317a4cd89be" xsi:type="gml:TimePeriodType">
                           <gml:beginPosition>2007-01-01T00:00:00</gml:beginPosition>
                           <gml:endPosition>2015-01-09T01:30:00</gml:endPosition>
                        </gml:TimePeriod>
                     </gmd:extent>
                  </gmd:EX_TemporalExtent>
               </gmd:temporalElement>
            </gmd:EX_Extent>
         </gmd:extent>
      </gmd:MD_DataIdentification>
  </gmd:identificationInfo>
  <gmd:distributionInfo>
      <gmd:MD_Distribution>
         <gmd:distributionFormat>
            <gmd:MD_Format>
               <gmd:name>
                  <gco:CharacterString>XLS</gco:CharacterString>
               </gmd:name>
               <gmd:version>
                  <gco:CharacterString>XLS 2010</gco:CharacterString>
               </gmd:version>
            </gmd:MD_Format>
         </gmd:distributionFormat>
         <gmd:transferOptions>
            <gmd:MD_DigitalTransferOptions>
               <gmd:onLine>
                  <gmd:CI_OnlineResource>
                     <gmd:linkage>
                        <gmd:URL>http://www.dzs.hr</gmd:URL>
                     </gmd:linkage>
                  </gmd:CI_OnlineResource>
               </gmd:onLine>
            </gmd:MD_DigitalTransferOptions>
         </gmd:transferOptions>
      </gmd:MD_Distribution>
  </gmd:distributionInfo>
  <gmd:dataQualityInfo>
      <gmd:DQ_DataQuality>
         <gmd:scope>
            <gmd:DQ_Scope>
               <gmd:level>
                  <gmd:MD_ScopeCode codeListValue="dataset"
                                    codeList="http://standards.iso.org/ittf/PubliclyAvailableStandards/ISO_19139_Schemas/resources/Codelist/ML_gmxCodelists.xml#MD_ScopeCode"/>
               </gmd:level>
            </gmd:DQ_Scope>
         </gmd:scope>
         <gmd:report>
            <gmd:DQ_DomainConsistency xsi:type="gmd:DQ_DomainConsistency_Type">
               <gmd:result>
                  <gmd:DQ_ConformanceResult xsi:type="gmd:DQ_ConformanceResult_Type">
                     <gmd:specification>
                        <gmd:CI_Citation>
                           <gmd:title>
                              <gco:CharacterString>Podaci o poslovnim subjektima (NKD 2007)</gco:CharacterString>
                           </gmd:title>
                           <gmd:date>
                              <gmd:CI_Date>
                                 <gmd:date>
                                    <gco:Date>2007-01-01</gco:Date>
                                 </gmd:date>
                                 <gmd:dateType>
                                    <gmd:CI_DateTypeCode codeList="http://standards.iso.org/ittf/PubliclyAvailableStandards/             ISO_19139_Schemas/resources/Codelist/ML_gmxCodelists.xml#CI_DateTypeCode"
                                                         codeListValue="publication"/>
                                 </gmd:dateType>
                              </gmd:CI_Date>
                           </gmd:date>
                        </gmd:CI_Citation>
                     </gmd:specification>
                     <gmd:explanation gco:nilReason="missing">
                        <gco:CharacterString/>
                     </gmd:explanation>
                     <gmd:pass>
                        <gco:Boolean>true</gco:Boolean>
                     </gmd:pass>
                  </gmd:DQ_ConformanceResult>
               </gmd:result>
            </gmd:DQ_DomainConsistency>
         </gmd:report>
         <gmd:lineage>
            <gmd:LI_Lineage>
               <gmd:statement>
                  <gco:CharacterString>Prema rješenjema stranaka.</gco:CharacterString>
               </gmd:statement>
            </gmd:LI_Lineage>
         </gmd:lineage>
      </gmd:DQ_DataQuality>
  </gmd:dataQualityInfo>
</gmd:MD_Metadata>';

	fwrite($myfile, $txt);
	fclose($myfile);
	/*
	$url = 'http://localhost:8080/geonetwork/j_spring_security_check';
	
	$data = array('username' => 'admin', 'password' => 'admin');
	
	$options = array(
		'http' => array (
			'header' => "Content-type: application/x-www-form-urlencoded",
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	
	$context = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	if ($result === FALSE) { echo 'error'; }
	
	echo $result;
	*/
	}
	

	?>
	</body>
</html>



