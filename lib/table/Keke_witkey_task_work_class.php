<?php
  class Keke_witkey_task_work_class{
        public $_db;
        public $_tablename;
	    public $_dbop;
	    	 public $_work_id;  		 public $_task_id; 		 public $_uid; 		 public $_username; 		 public $_work_title; 		 public $_work_price; 		 public $_work_desc; 		 public $_work_file; 		 public $_work_pic; 		 public $_work_time; 		 public $_hide_work; 		 public $_vote_num; 		 public $_comment_num; 		 public $_work_status; 		 public $_is_view; 		 public $_hasdel; 		 public $_workhide; 
	    public $_cache_config = array ('is_cache' => 0, 'time' => 0 );
	    public $_replace=0;  
	    public $_where;      
	     function  keke_witkey_task_work_class(){ 			 $this->_db = new db_factory ( );			 $this->_dbop = $this->_db->create(DBTYPE);			 $this->_tablename = TABLEPRE."witkey_task_work";		 }	    
	    		public function getWork_id(){			 return $this->_work_id ;		}		public function getTask_id(){			 return $this->_task_id ;		}		public function getUid(){			 return $this->_uid ;		}		public function getUsername(){			 return $this->_username ;		}		public function getWork_title(){			 return $this->_work_title ;		}		public function getWork_price(){			 return $this->_work_price ;		}		public function getWork_desc(){			 return $this->_work_desc ;		}		public function getWork_file(){			 return $this->_work_file ;		}		public function getWork_pic(){			 return $this->_work_pic ;		}		public function getWork_time(){			 return $this->_work_time ;		}		public function getHide_work(){			 return $this->_hide_work ;		}		public function getVote_num(){			 return $this->_vote_num ;		}		public function getComment_num(){			 return $this->_comment_num ;		}		public function getWork_status(){			 return $this->_work_status ;		}		public function getIs_view(){			 return $this->_is_view ;		}		public function getHasdel(){			 return $this->_hasdel ;		}		public function getWorkhide(){			 return $this->_workhide ;		}		public function getWhere(){			 return $this->_where ;		}		public function getCache_config() {			return $this->_cache_config;		}
	    		public function setWork_id($value){ 			 $this->_work_id = $value;		}		public function setTask_id($value){ 			 $this->_task_id = $value;		}		public function setUid($value){ 			 $this->_uid = $value;		}		public function setUsername($value){ 			 $this->_username = $value;		}		public function setWork_title($value){ 			 $this->_work_title = $value;		}		public function setWork_price($value){ 			 $this->_work_price = $value;		}		public function setWork_desc($value){ 			 $this->_work_desc = $value;		}		public function setWork_file($value){ 			 $this->_work_file = $value;		}		public function setWork_pic($value){ 			 $this->_work_pic = $value;		}		public function setWork_time($value){ 			 $this->_work_time = $value;		}		public function setHide_work($value){ 			 $this->_hide_work = $value;		}		public function setVote_num($value){ 			 $this->_vote_num = $value;		}		public function setComment_num($value){ 			 $this->_comment_num = $value;		}		public function setWork_status($value){ 			 $this->_work_status = $value;		}		public function setIs_view($value){ 			 $this->_is_view = $value;		}		public function setHasdel($value){ 			 $this->_hasdel = $value;		}		public function setWorkhide($value){ 			 $this->_workhide = $value;		}		public function setWhere($value){ 			 $this->_where = $value;		}		public function setCache_config($_cache_config) {			 $this->_cache_config = $_cache_config; 		}
    	   public  function __set($property_name, $value) {
		 		$this->$property_name = $value; 
			}
			public function __get($property_name) { 
				if (isset ( $this->$property_name )) { 
					return $this->$property_name; 
				} else { 
					return null; 
				} 
			}
	    		function create_keke_witkey_task_work(){		 		 $data =  array(); 					if(!is_null($this->_work_id)){ 				 $data['work_id']=$this->_work_id;			}			if(!is_null($this->_task_id)){ 				 $data['task_id']=$this->_task_id;			}			if(!is_null($this->_uid)){ 				 $data['uid']=$this->_uid;			}			if(!is_null($this->_username)){ 				 $data['username']=$this->_username;			}			if(!is_null($this->_work_title)){ 				 $data['work_title']=$this->_work_title;			}			if(!is_null($this->_work_price)){ 				 $data['work_price']=$this->_work_price;			}			if(!is_null($this->_work_desc)){ 				 $data['work_desc']=$this->_work_desc;			}			if(!is_null($this->_work_file)){ 				 $data['work_file']=$this->_work_file;			}			if(!is_null($this->_work_pic)){ 				 $data['work_pic']=$this->_work_pic;			}			if(!is_null($this->_work_time)){ 				 $data['work_time']=$this->_work_time;			}			if(!is_null($this->_hide_work)){ 				 $data['hide_work']=$this->_hide_work;			}			if(!is_null($this->_vote_num)){ 				 $data['vote_num']=$this->_vote_num;			}			if(!is_null($this->_comment_num)){ 				 $data['comment_num']=$this->_comment_num;			}			if(!is_null($this->_work_status)){ 				 $data['work_status']=$this->_work_status;			}			if(!is_null($this->_is_view)){ 				 $data['is_view']=$this->_is_view;			}			if(!is_null($this->_hasdel)){ 				 $data['hasdel']=$this->_hasdel;			}			if(!is_null($this->_workhide)){ 				 $data['workhide']=$this->_workhide;			}			 return $this->_work_id = $this->_db->inserttable($this->_tablename,$data,1,$this->_replace); 		 } 
	    		function edit_keke_witkey_task_work(){ 		 		 $data =  array();  					if(!is_null($this->_work_id)){ 				 $data['work_id']=$this->_work_id;			}			if(!is_null($this->_task_id)){ 				 $data['task_id']=$this->_task_id;			}			if(!is_null($this->_uid)){ 				 $data['uid']=$this->_uid;			}			if(!is_null($this->_username)){ 				 $data['username']=$this->_username;			}			if(!is_null($this->_work_title)){ 				 $data['work_title']=$this->_work_title;			}			if(!is_null($this->_work_price)){ 				 $data['work_price']=$this->_work_price;			}			if(!is_null($this->_work_desc)){ 				 $data['work_desc']=$this->_work_desc;			}			if(!is_null($this->_work_file)){ 				 $data['work_file']=$this->_work_file;			}			if(!is_null($this->_work_pic)){ 				 $data['work_pic']=$this->_work_pic;			}			if(!is_null($this->_work_time)){ 				 $data['work_time']=$this->_work_time;			}			if(!is_null($this->_hide_work)){ 				 $data['hide_work']=$this->_hide_work;			}			if(!is_null($this->_vote_num)){ 				 $data['vote_num']=$this->_vote_num;			}			if(!is_null($this->_comment_num)){ 				 $data['comment_num']=$this->_comment_num;			}			if(!is_null($this->_work_status)){ 				 $data['work_status']=$this->_work_status;			}			if(!is_null($this->_is_view)){ 				 $data['is_view']=$this->_is_view;			}			if(!is_null($this->_hasdel)){ 				 $data['hasdel']=$this->_hasdel;			}			if(!is_null($this->_workhide)){ 				 $data['workhide']=$this->_workhide;			}			if($this->_where){ 				 return $this->_db->updatetable($this->_tablename,$data,$this->getWhere()); 			 } 			 else{ 				 $where = array('work_id' => $this->_work_id); 				 return $this->_db->updatetable($this->_tablename,$data,$where); 			} 		 } 
	    		function query_keke_witkey_task_work($is_cache=0, $cache_time=0){ 			 if($this->_where){ 				 $sql = "select * from $this->_tablename where ".$this->_where; 			 } 			 else{ 				 $sql = "select * from $this->_tablename"; 			 } 			if ($is_cache) {			 $this->_cache_config ['is_cache'] = $is_cache;			}			if ($cache_time) {			 $this->_cache_config ['time'] = $cache_time;			 }			 if ($this->_cache_config ['is_cache']) {			     if (CACHE_TYPE) {					 $keke_cache = new keke_cache_class ( CACHE_TYPE );					 $id = $this->_tablename . ($this->_where?"_" .substr(md5 ( $this->_where ),0,6):'');						$data = $keke_cache->get ( $id );							if ($data) {								return $data; 							} else { 								$res = $this->_dbop->query ( $sql ); 								$keke_cache->set ( $id, $res,$this->_cache_config['time'] ); 					 			$this->_where = ""; 								return $res; 							} 						} 			 }else{			 	$this->_where = ""; 				return  $this->_dbop->query ( $sql ); 			 }		 } 
	    		function count_keke_witkey_task_work(){ 			 if($this->_where){ 				 $sql = "select count(*) as count from $this->_tablename where ".$this->_where; 			 } 			 else{ 				 $sql = "select count(*) as count from $this->_tablename"; 			 } 			 $this->_where = ""; 			 return $this->_dbop->getCount($sql); 		 } 
	    		function del_keke_witkey_task_work(){ 			 if($this->_where){ 				 $sql = "delete from $this->_tablename where ".$this->_where; 			 } 			 else{ 				 $sql = "delete from $this->_tablename where work_id = $this->_work_id "; 			 } 			 $this->_where = ""; 			 return $this->_dbop->execute($sql); 		 } 
   }
 ?>