
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_diagrams extends CI_Model{

    function __construct() 
    { 
        parent::__construct(); 
    } 
    //get fruts data 
    public function getDiagramData() 
    { 
        return $this->db->get('shop_item')->result(); 
    } 
} 


	/*function getDiagrams

	$this->db->select('*');
	$this->db->where();


}



<?php 
//index.php
$query = "SELECT * FROM account";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ year:'".$row["year"]."', profit:".$row["profit"].", purchase:".$row["purchase"].", sale:".$row["sale"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>*/