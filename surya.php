  $query ="select max(id) AS id from  student_db"; 
  $result1= $this->LoginModel->get_query_row($query);

  $id= $result1->id+1;
  

  if(strlen($id)==2)
  {
    $customer_id='jk00'.$id;
  }else if(strlen($id)==3)
  {
    $customer_id='jk0'.$id;
  }else if(strlen($id)==1)
  {
    $customer_id='jk000'.$id;
  }else if(strlen($id)==4)
  {
    $customer_id='jk'.$id;
  }

  
  $data['cid']=$customer_id;

//Model

    public function get_query_row($all_querys)
    {
      $query = $this->db->query($all_querys);	
      return $query->row();
      
    }
