<?php
session_start();
$grupo=$_SESSION['grupo'];
$matricula=$_SESSION['matricula'];
$id=$_SESSION['id'];



 
require('fpdf/fpdf.php'); 


class PdfTable extends FPDF 
{ 


function Header()
{
    // Logo

    $this->Image('logo_pb.png',15,10,25); //20,10,33
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
	$this->Ln(7);
	$this->SetFont('Arial','B',15);//tipo de letra,negrita y tamano
	$this->Cell(0,5,'UNIVERSIDAD AUTONOMA DE BAJA CALIFORNIA',0,0,'C');
		$this->Ln(4);//rango de espacio entre cada renglon
		$this->SetFont('Arial','B',12); //tipo de letra, negrita, tamano
			$this->Cell(0,8,'FACULTAD DE CIENCIAS ADMINISTRATIVAS',0,0,'C');
			$this->Ln(4);
		$this->SetFont('Arial','B',10); 
			$this->Cell(0,10,'CAMPUS MEXICALI',0,0,'C');
			$this->Cell(0,42,'________________________________________________________________________________________________',0,0,'R');
    // Salto de línea
    $this->Ln(20);
	
	
	
}




function ChapterTitle($num, $label)
{
    // Arial 12
    $this->SetFont('Arial','',12);
    // Color de fondo
    $this->SetFillColor(200,220,255);
    // Título
    $this->Cell(0,6,"Hoja $num : $label",0,1,'L',true);
    // Salto de línea
    //$this->Ln(4);
	
	
	
}






// Pie de página
function Footer()
{
    

    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
	    $this->SetFont('Arial','B',10);
		$this->Cell(50,-16,'_______________________________________________________________________________________________',0,0,'l');
	$this->SetFont('Arial','',10);
	$this->Cell(10,-6,'Coordinacion y evaluacion colegiada ',0,0,'R');
    $this->SetFont('Arial','B',10);
	$this->Cell(5,3,'Facultad de Ciencias Administrativas ',10,10,'R');
    // Número de página
		
    //$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');

}










    //tabla
    function FancyTable($header,$data,$w) 
    { 
        //Colores, ancho de línea y fuente en negrita 
        $this->SetFillColor(000, 000, 000); 
        $this->SetTextColor(255); 
        $this->SetDrawColor(0, 0, 0); 
        $this->SetLineWidth(.3); 
        $this->SetFont('','B'); 
         
         
        for($i=0;$i<count($header);$i++) 
            $this->Cell($w[$i],7,$header[$i],1,0,'C',1); 
        $this->Ln(); 
         
        //Restauración de colores y fuentes 
        $this->SetFillColor(222,222,222); 
        $this->SetTextColor(0); 
        $this->SetFont(''); 
         
        //Datos 
        $fill=false; 
        foreach($data as $row) 
        { 
            foreach($w as $k=>$col){ 
                $this->Cell($col,6,$row[$k],'LR',0,'L',$fill); 
            } 
             
            $this->Ln(); 
            $fill=!$fill; 
        } 
        $this->Cell(array_sum($w),0,'','T'); 
    } 
	
	
	
	
	
	
	
	
	
	
	
	
	
} 

$pdf=new PdfTable(); 


$header=array('',''); 

//anchos de cada columna 
$widths=array(90,100); 






      $link=mysql_connect("localhost","root","root"); 
    	mysql_select_db("colegiados", $link);
       $registros=mysql_query("select * from regmate where matricula=$matricula",$link) or
       die("Problemas en el select:".mysql_error());
	   $reg=mysql_fetch_array($registros);
	    $id=$reg['id']; 
		$nom=$reg['nombre']; 
		$mat=$reg['matricula']; 
		$grup=$reg['grupo'];
		$lab=$reg['laboratorio'];
		$maq=$reg['maquina'];
	   
	   
			
	   $ses=$reg['session'];
	   $re=mysql_query("select * from sessiones where idsession='$ses'",$link) or
       die("Problemas en el select:".mysql_error());
	   $r=mysql_fetch_array($re);
       $dias=$r['dia'];
	   $horas=$r['hora'];


	   

         



//Carga de datos 
$data=array( 
    array("No. laboratorio","".$lab), 
    array("No. máquina","".$maq), 
    array("Fecha","".$dias), 
    array("Horario","".$horas) 
); 

$pdf->SetFont('Arial','b',14); 
$pdf->AddPage(); 
//$pdf->Cell(0,0,'_____________________________________________________________________',0,1,'C');
$pdf->Cell(0,20,' Solicitud de Evaluación Colegiada',0,1,'C');
$pdf->SetFont('Arial','',14);
$pdf->Cell(0,-7,' Unidad de Aprendizaje: Matemáticas',0,1,'C');
$pdf->Ln(20);
$pdf->SetFont('Arial','b',13); 
$pdf->Cell(0,5,' Nombre: '.$nom,0,1);
$pdf->Cell(0,5,' Matricula: '.$mat,0,1);
$pdf->Cell(0,5,' Grupo: '.$grup,0,1);
$pdf->Ln(10);
$pdf->FancyTable($header,$data,$widths); $pdf->Ln(15);


$pdf->SetFont('Arial','B',13); 
$pdf->Cell(0,5,'OBSERVACIONES:',0,1);
$pdf->Ln(5);

$pdf->SetFont('Arial','',13); 
$pdf->Cell(0,5,'Se informa que tal evaluación colegiada es considerada en la ponderación final en el presente',0,1);
$pdf->Cell(0,5,'presente semestre en el entendido que es obligatoria y con un porcentaje de 10% sobre la ',0,1);
$pdf->Cell(0,5,'calificación final del ciclo antes mencionado.',0,1);


$pdf->Ln(5);
$pdf->SetFont('Arial','b',13); 
$pdf->Cell(0,5,'Las condiciones de trabajo son las siguientes:',0,1);
$pdf->SetFont('Arial','',13); 



$pdf->Cell(0,5,'• Traer lápiz y calculadora de uso personal, no se permite prestarla durante el examen.',0,1);
$pdf->Cell(0,5,'• Usuario inicia a la hora marcada y cierra de manera automática al terminar evaluación.',0,1);
$pdf->Cell(0,5,'• No se permite el uso de formularios.',0,1);
$pdf->Cell(0,5,'• Deben presentarse cuando menos 10 minutos antes de iniciar la evaluación. Una vez ',0,1);
$pdf->Cell(0,5,'  iniciado NO SE PERMITE EL INGRESO NI REPROGRAMACIÓN DE LA MISMA.',0,1);
$pdf->Cell(0,5,'• Una vez dentro de la sala de evaluación deben tomar la máquina que le ha sido',0,1);
$pdf->Cell(0,5,'  asignada -ver dato en el recuadro de este documento-. Debes de llegar a la sala con',0,1);
$pdf->Cell(0,5,'  los datos necesarios NO se proporcionará número de máquina ni laboratorio.',0,1);
$pdf->Cell(0,5,'• Caso de comportamiento no apropiado dentro de la sala el personal a cargo tiene la ',0,1);
$pdf->Cell(0,5,'  facultad de suspender su evaluación de manera definitiva apareciendo en los reportes  ',0,1);
$pdf->Cell(0,5,'  de la misma con un 0 -cero-.',0,1);

$pdf->Ln(5);
$pdf->Cell(0,5,'Los resultados se le harán llegar por medio del maestro asignado a su clase, Contabilidad 26',0,1);
$pdf->Cell(0,5,'de Noviembre y  Matemáticas 30 de Noviembre.',0,1);






// Creación del objeto de la clase heredada
$pdf->AliasNbPages();
$pdf->Output('Colegiados.pdf','I'); 
?> 