
<?php  
 function fetch_data()  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "projet_web");  
      $sql = "SELECT * FROM livreur ORDER BY id_livreur  ASC";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
	  <td>'.$row["id_livreur"].'</td>  
	  <td>'.$row["nom_livreur"].'</td>  
	  <td>'.$row["prenom_livreur"].'</td>  
	  <td>'.$row["numtel_livreur"].'</td>
	  <td>'.$row["zdl_livreur"].'</td>
       <td>'.$row["compagnie_livreur"].'</td>
       <td>'.$row["statut"].'</td>    
    
                     </tr>  
                          ';  
      }  
      return $output;  
 }  
 if(isset($_POST["create_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h3 align="center">Export HTML Table data to PDF using TCPDF in PHP</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
		   <th width="5%">id</th>  
		   <th width="13%">nom</th>  
		   <th width="13%">prenom</th>  
		   <th width="22%">numéro telephone</th>
		   <th width="20%">zone de livraison</th>
             <th width="16%">compagnie</th>   
             <th width="14%">statut</th>   

           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
	  $obj_pdf->writeHTML($content); 
	  ob_end_clean(); 
      $obj_pdf->Output('sample.pdf', 'I');  
 }  
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Export HTML Table data to PDF using TCPDF in PHP</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />            
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">Export HTML Table data to PDF using TCPDF in PHP</h3><br />  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
			<th width="5%">id</th>  
		     <th width="19%">nom</th>  
		     <th width="19%">prenom</th>  
		     <th width="20%">numéro telephone</th>
		     <th width="20%">zone de livraison</th>
		     <th width="20%">compagnie</th>  
               <th width="10%">statut</th>   
 
                          </tr>  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                     <br />  
                     <form method="post">  
                          <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" />  
                     </form>  
                </div>  
           </div>  
      </body>  
 </html>  
 