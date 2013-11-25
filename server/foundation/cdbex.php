<?php
// this class is used for DataBase controlling
class Dbex {
	var $row_count;
	var $per_page;
	var $curr_page;
	var $total_page;

    public function dbTarget() {
        $conn = mysql_connect( HOST, USER, PASSWORD );
        if( $conn ) {
            mysql_query( "set names 'UTF8'" );
            mysql_select_db( DBNAME, $conn );
            return $conn;
        } else {
            exit( "Error:not connect, please check your config file and mysql engine\n" );
        }
    }
	public function setPages( $per_page, $curr_page = 1 ){
		if( empty( $curr_page ) ) { $curr_page = 1; }
		$this->per_page = $per_page;
		$this->curr_page = $curr_page;
	}

	public function setNopages(){
		$this->per_page = '';
	}

	public function getRs( $sql ){
		$rs = array();
		if( $this->per_page ){
			$sql_count = "select count(*) as total_count ".strstr( $sql, "from" );//get the total count
			$result_count = mysql_query( $sql_count );
			$data_count = mysql_fetch_assoc( $result_count );
			$this->row_count = $data_count['total_count'];
			$sql .= " limit ".($this->curr_page-1)*$this->per_page.",".$this->per_page;
		}
 	    $result = mysql_query( $sql ) or die( 'db error: getRs' );

        if( $this->per_page ){
		    $total_rs = $this->row_count;
		    $per_page = $this->per_page;
		    $curr_page = $this->curr_page;
		    $total_page = floor( abs( $total_rs - 1 ) / $per_page ) + 1;//count for total page
		    $this->total_page = $total_page;

 	   //page limit error
 	        if( $curr_page > $total_page ){
                 exit( 'page error: page limit' );
 	        }
	    }
		while( $rs_row = mysql_fetch_array( $result ) ) {
			$rs[]=$rs_row;
		}
		return $rs;
	}

    public function getALL( $sql ) {
   	    $this->setNopages();
   	    return $this->getRs( $sql );
    }

    public function getRow( $sql ) {
   	    $result = mysql_query( $sql ) or die( 'db error: getRow' );
        return mysql_fetch_array($result);
    }

    public function exeUpdate( $sql ) {
        if( mysql_query( $sql ) ) {
            return mysql_affected_rows();
        } else {
            return false;
        }
    }
    
    public function create( $sql ) {
        $result = mysql_query( $sql );
        $create = mysql_fetch_array( $result );
        return $create;
    }

    public function affected_rows($sql){
        return mysql_affected_rows();
    }

}

?>
