<?php

ini_set('display_errors', true);
ini_set('error_reporting', E_ALL);

class ClassUtil {

	public $SESSION = NULL;

	function __construct($SESSION) {
		// parent::__construct(); // ClassBenutzerrechte Constructor aufrufen		
		$this->SESSION = $SESSION;

		// constructor
   	}

   	function __destruct() {
		// destructor
   	}

   	public function table_bg_color_odd() {
		$color = '#eaedef ';
		return $color;
	}
		
	public function table_bg_color_even() {
		$color = '#FFFFFF';
		return $color;
	}

	public function IMG_Activated($height = 32, $width = 32) {
		return '<img src="/images/activated.png" alt="" height="' . $height . '" width="' . $width . 'px">';
	}
	
	
	public function IMG_Deactivated($height = 32, $width = 32) {
		return '<img src="/images/deactivated.png" alt="" height="' . $height . '" width="' . $width . 'px">';
	}

	function SELECT_Status ($status_selektiert = -1, $arr_option_values = NULL, $select_id = "select_status", $select_name = "select_status", $select_size = 1, $select_extra_code = "") {
		
		$ret = '';
		$ret .= '<select id="' . $select_id . '" name="' . $select_name . '" type="select" size="' . $select_size . '" ' . $select_extra_code . '>';
		
		if ($arr_option_values != NULL) {
			if (count($arr_option_values) > 0) {
				foreach ($arr_option_values as $key => $value) {			
					$ret .= '<option value="' . $key . '">' . $value . '</option>';						
				} // end foreach();
			} // end if (count)
		} // end if ($arr_option_values != NULL);

		($status_selektiert == 1) ? $ret .= '<option value="1" selected="selected" >Active</option>' : $ret .= '<option value="1" >Active</option>';
		($status_selektiert == 2) ? $ret .= '<option value="2" selected="selected" >Suspended</option>' : $ret .= '<option value="2" >Suspended</option>';
		($status_selektiert == 3) ? $ret .= '<option value="3" selected="selected" >Transfered</option>' : $ret .= '<option value="3" >Transfered</option>';
		($status_selektiert == 4) ? $ret .= '<option value="4" selected="selected" >Graduated</option>' : $ret .= '<option value="4" >Graduated</option>';
		($status_selektiert == 5) ? $ret .= '<option value="5" selected="selected" >Inactive</option>' : $ret .= '<option value="5" >Inactive</option>';
		($status_selektiert == 6) ? $ret .= '<option value="6" selected="selected" >Dismissed</option>' : $ret .= '<option value="6" >Dismissed</option>';
		
		$ret .= '</select>';

		return $ret;
	} // end SELECT_Status();

	function SELECT_Sex ($sex_selektiert = -1, $arr_option_values = NULL, $select_id = "select_sex", $select_name = "select_sex", $select_size = 1, $select_extra_code = "") {
		
		$ret = '';
		$ret .= '<select id="' . $select_id . '" name="' . $select_name . '" type="select" size="' . $select_size . '" ' . $select_extra_code . '>';
		
		if ($arr_option_values != NULL) {
			if (count($arr_option_values) > 0) {
				foreach ($arr_option_values as $key => $value) {			
					$ret .= '<option value="' . $key . '">' . $value . '</option>';						
				} // end foreach();
			} // end if (count)
		} // end if ($arr_option_values != NULL);

		($sex_selektiert == 1) ? $ret .= '<option value="1" selected="selected" >Male</option>' : $ret .= '<option value="1" >Male</option>';
		($sex_selektiert == 2) ? $ret .= '<option value="2" selected="selected" >Female</option>' : $ret .= '<option value="2" >Female</option>';
		
		$ret .= '</select>';

		return $ret;
	} // end SELECT_Sex();

	function CHECK_Boarder ($boarder_selektiert = -1, $select_id = "check_boarder", $select_name = "check_boarder", $select_extra_code = "") {
		
		$ret = '';
		$ret .= '<label ' . $select_extra_code . ' >';
		if ($boarder_selektiert == 0) {
			$ret .= '<input id="' . $select_id . '" name="' . $select_name . '" type="checkbox" value = 0>';
		} else {
			$ret .= '<input id="' . $select_id . '" name="' . $select_name . '" type="checkbox" value = 1 checked>';
		}
		$ret .= 'Boarder</label>';

		return $ret;
	} // end SELECT_Sex();

	function SELECT_Relation ($relation_selektiert = -1, $arr_option_values = NULL, $select_id = "select_relation", $select_name = "select_relation", $select_size = 1, $select_extra_code = "") {
		
		$ret = '';
		$ret .= '<select id="' . $select_id . '" name="' . $select_name . '" type="select" size="' . $select_size . '" ' . $select_extra_code . '>';
		
		if ($arr_option_values != NULL) {
			if (count($arr_option_values) > 0) {
				foreach ($arr_option_values as $key => $value) {			
					$ret .= '<option value="' . $key . '">' . $value . '</option>';						
				} // end foreach();
			} // end if (count)
		} // end if ($arr_option_values != NULL);

		($relation_selektiert == 1) ? $ret .= '<option value="1" selected="selected" >Father</option>' : $ret .= '<option value="1" >Father</option>';
		($relation_selektiert == 2) ? $ret .= '<option value="2" selected="selected" >Mother</option>' : $ret .= '<option value="2" >Mother</option>';
		($relation_selektiert == 3) ? $ret .= '<option value="3" selected="selected" >Guardian</option>' : $ret .= '<option value="3" >Guardian</option>';
		
		$ret .= '</select>';

		return $ret;
	} // end SELECT_Relation();


	function SELECT_Profession ($profession_selektiert = -1, $arr_option_values = NULL, $select_id = "select_profession", $select_name = "select_profession", $select_size = 1, $select_extra_code = "") {
		
		$ret = '';
		$ret .= '<select id="' . $select_id . '" name="' . $select_name . '" type="select" size="' . $select_size . '" ' . $select_extra_code . '>';
		
		if ($arr_option_values != NULL) {
			if (count($arr_option_values) > 0) {
				foreach ($arr_option_values as $key => $value) {			
					$ret .= '<option value="' . $key . '">' . $value . '</option>';						
				} // end foreach();
			} // end if (count)
		} // end if ($arr_option_values != NULL);

		($profession_selektiert == 1) ? $ret .= '<option value="1" selected="selected" >Banking/Finance</option>' : $ret .= '<option value="1" >Banking/Finance</option>';
		($profession_selektiert == 2) ? $ret .= '<option value="2" selected="selected" >Engineering</option>' : $ret .= '<option value="2" >Engineering</option>';
		($profession_selektiert == 3) ? $ret .= '<option value="3" selected="selected" >Infomation Tech.</option>' : $ret .= '<option value="3" >Infomation Tech.</option>';
		($profession_selektiert == 4) ? $ret .= '<option value="4" selected="selected" >Legal</option>' : $ret .= '<option value="4" >Legal</option>';
		($profession_selektiert == 5) ? $ret .= '<option value="5" selected="selected" >Art/Music</option>' : $ret .= '<option value="5" >Art/Music</option>';
		($profession_selektiert == 6) ? $ret .= '<option value="6" selected="selected" >Medical/Pharm.</option>' : $ret .= '<option value="6" >Medical/Pharm.</option>';
		($profession_selektiert == 7) ? $ret .= '<option value="1" selected="selected" >Academic</option>' : $ret .= '<option value="7" >Academic</option>';
		($profession_selektiert == 8) ? $ret .= '<option value="2" selected="selected" >Agricultural</option>' : $ret .= '<option value="8" >Agricultural</option>';
		($profession_selektiert == 9) ? $ret .= '<option value="3" selected="selected" >Security</option>' : $ret .= '<option value="9" >Security</option>';
		($profession_selektiert == 10) ? $ret .= '<option value="4" selected="selected" >Management</option>' : $ret .= '<option value="10" >Management</option>';
		($profession_selektiert == 11) ? $ret .= '<option value="5" selected="selected" >Others</option>' : $ret .= '<option value="11" >Others</option>';

		
		$ret .= '</select>';

		return $ret;
	} // end SELECT_Profession();

	function CHECK_PTA_EXEC ($pta_exec_selektiert = -1, $select_id = "check_pta_exec", $select_name = "check_pta_exec", $select_extra_code = "") {
		
		$ret = '';
		$ret .= '<label ' . $select_extra_code . ' >';
		if ($pta_exec_selektiert == 0) {
			$ret .= '<input id="' . $select_id . '" name="' . $select_name . '" type="checkbox" value = 0>';
		} else {
			$ret .= '<input id="' . $select_id . '" name="' . $select_name . '" type="checkbox" value = 1 checked>';
		}
		$ret .= 'PTA Executive</label>';

		return $ret;
	} // end CHECK_PTA_EXEC();

	function SELECT_Subject_Type ($type_selektiert = -1, $arr_option_values = NULL, $select_id = "select_core", $select_name = "select_core", $select_size = 1, $select_extra_code = "") {
		
		$ret = '';
		$ret .= '<select id="' . $select_id . '" name="' . $select_name . '" type="select" size="' . $select_size . '" ' . $select_extra_code . '>';
		
		if ($arr_option_values != NULL) {
			if (count($arr_option_values) > 0) {
				foreach ($arr_option_values as $key => $value) {			
					$ret .= '<option value="' . $key . '">' . $value . '</option>';						
				} // end foreach();
			} // end if (count)
		} // end if ($arr_option_values != NULL);

		($type_selektiert == 1) ? $ret .= '<option value="1" selected="selected" >Core</option>' : $ret .= '<option value="1" >Core</option>';
		($type_selektiert == 2) ? $ret .= '<option value="2" selected="selected" >Elective</option>' : $ret .= '<option value="2" >Elective</option>';
		($type_selektiert == 3) ? $ret .= '<option value="3" selected="selected" >General</option>' : $ret .= '<option value="3" >General</option>';
		
		$ret .= '</select>';

		return $ret;
	} // end SELECT_Subject_Type();

	function SELECT_Subject_Level ($level_selektiert = -1, $arr_option_values = NULL, $select_id = "select_level", $select_name = "select_level", $select_size = 1, $select_extra_code = "") {
		
		$ret = '';
		$ret .= '<select id="' . $select_id . '" name="' . $select_name . '" type="select" size="' . $select_size . '" ' . $select_extra_code . '>';
		
		if ($arr_option_values != NULL) {
			if (count($arr_option_values) > 0) {
				foreach ($arr_option_values as $key => $value) {			
					$ret .= '<option value="' . $key . '">' . $value . '</option>';						
				} // end foreach();
			} // end if (count)
		} // end if ($arr_option_values != NULL);

		($level_selektiert == 1) ? $ret .= '<option value="1" selected="selected" >Pre-School</option>' : $ret .= '<option value="1" >Pre-School</option>';
		($level_selektiert == 2) ? $ret .= '<option value="2" selected="selected" >Primary</option>' : $ret .= '<option value="2" >Primary</option>';
		($level_selektiert == 3) ? $ret .= '<option value="3" selected="selected" >Junior High</option>' : $ret .= '<option value="3" >Junior High</option>';
		($level_selektiert == 4) ? $ret .= '<option value="4" selected="selected" >Senior High</option>' : $ret .= '<option value="4" >Senior High</option>';
		
		$ret .= '</select>';

		return $ret;
	} // end SELECT_Subject_Type();


	function SELECT_Grade($grade_selektiert = -1, $arr_option_values = NULL, $select_id = "select_grade", $select_name = "select_grade", $select_size = 1, $select_extra_code = "", $db_conn_opt = false) {
		
		$ret = '';
		$ret .= '<select id="' . $select_id . '" name="' . $select_name . '" type="select" size="' . $select_size . '" ' . $select_extra_code . '>';
		
		// Optionale DB-Verbindung aufbauen?
		$db_conn = false;
		if ($db_conn_opt != false) {
			$db_conn = $dbconn_opt;
		} else {
			$dbconn = DB_Connect_Direct();
		}
		
		if ($arr_option_values != NULL) {
			if (count($arr_option_values) > 0) {
				foreach ($arr_option_values as $key => $value) {
					if ($grade_selektiert != -1) {
						if ($key == $grade_selektiert) {
							$ret .= '<option value="' . $key . '" selected="selected">' . $value . '</option>';
						} else {
							$ret .= '<option value="' . $key . '">' . $value . '</option>';
						}	
					} else {
						$ret .= '<option value="' . $key . '">' . $value . '</option>';
					} // end if
				} // end foreach();
			} // end if (count)
		} // end if ($arr_option_values != NULL);
		
		if ($dbconn != false) {
			
			$query = "SELECT G.grade, G.Name FROM grade AS G ORDER BY G.grade ASC;";
			
			$result = DB_Query($dbconn, $query);
			while ($obj = DB_FetchObject($result)) {
				if ($grade_selektiert != -1) {
					if ($obj->grade == $grade_selektiert) {
						$ret .= '<option value="' . $obj->grade . '" selected="selected">' . $obj->Name . '</option>';
					} else {
						$ret .= '<option value="' . $obj->grade . '">' . $obj->Name . '</option>';
					}
				} else {
					$ret .= '<option value="' . $obj->grade . '">' . $obj->Name . '</option>';
				} // end if
			} // end while ($obj = DB_FetchObject($result));
			DB_FreeResult($result);

			if ($db_conn_opt == false) {
				DB_Close($dbconn);
			} // end if ($db_conn_opt == false);
		} // end if ($dbconn != false);
		
		$ret .= '</select>';
		
		return $ret;
	} // end SELECT_Grade();

	function SELECT_Gradeset($gradeset_selektiert = -1, $arr_option_values = NULL, $select_id = "select_gradeset", $select_name = "select_gradeset", $select_size = 1, $select_extra_code = "", $db_conn_opt = false) {
		
		$ret = '';
		$ret .= '<select id="' . $select_id . '" name="' . $select_name . '" type="select" size="' . $select_size . '" ' . $select_extra_code . '>';
		
		// Optionale DB-Verbindung aufbauen?
		$db_conn = false;
		if ($db_conn_opt != false) {
			$db_conn = $dbconn_opt;
		} else {
			$dbconn = DB_Connect_Direct();
		}
		
		if ($arr_option_values != NULL) {
			if (count($arr_option_values) > 0) {
				foreach ($arr_option_values as $key => $value) {
					if ($gradeset_selektiert != -1) {
						if ($key == $gradeset_selektiert) {
							$ret .= '<option value="' . $key . '" selected="selected">' . $value . '</option>';
						} else {
							$ret .= '<option value="' . $key . '">' . $value . '</option>';
						}	
					} else {
						$ret .= '<option value="' . $key . '">' . $value . '</option>';
					} // end if
				} // end foreach();
			} // end if (count)
		} // end if ($arr_option_values != NULL);
		
		if ($dbconn != false) {
			
			$query = "SELECT G.gradeset, G.description FROM subjectgradeset AS G ORDER BY G.gradeset ASC;";
			
			$result = DB_Query($dbconn, $query);
			while ($obj = DB_FetchObject($result)) {
				if ($gradeset_selektiert != -1) {
					if ($obj->gradeset == $gradeset_selektiert) {
						$ret .= '<option value="' . $obj->gradeset . '" selected="selected">' . $obj->description . '</option>';
					} else {
						$ret .= '<option value="' . $obj->gradeset . '">' . $obj->description . '</option>';
					}
				} else {
					$ret .= '<option value="' . $obj->gradeset . '">' . $obj->description . '</option>';
				} // end if
			} // end while ($obj = DB_FetchObject($result));
			DB_FreeResult($result);

			if ($db_conn_opt == false) {
				DB_Close($dbconn);
			} // end if ($db_conn_opt == false);
		} // end if ($dbconn != false);
		
		$ret .= '</select>';
		
		return $ret;
	} // end SELECT_Grade();


	function SELECT_PGGroup($code_selektiert = -1, $arr_option_values = NULL, $select_id = "select_gradeset", $select_name = "select_gradeset", $select_size = 1, $select_extra_code = "", $db_conn_opt = false) {
		
		$ret = '';
		$ret .= '<select id="' . $select_id . '" name="' . $select_name . '" type="select" size="' . $select_size . '" ' . $select_extra_code . '>';
		
		// Optionale DB-Verbindung aufbauen?
		$db_conn = false;
		if ($db_conn_opt != false) {
			$db_conn = $dbconn_opt;
		} else {
			$dbconn = DB_Connect_Direct();
		}
		
		if ($arr_option_values != NULL) {
			if (count($arr_option_values) > 0) {
				foreach ($arr_option_values as $key => $value) {
					if ($code_selektiert != -1) {
						if ($key == $code_selektiert) {
							$ret .= '<option value="' . $key . '" selected="selected">' . $value . '</option>';
						} else {
							$ret .= '<option value="' . $key . '">' . $value . '</option>';
						}	
					} else {
						$ret .= '<option value="' . $key . '">' . $value . '</option>';
					} // end if
				} // end foreach();
			} // end if (count)
		} // end if ($arr_option_values != NULL);
		
		if ($dbconn != false) {
			
			$query = "SELECT PG.code, PG.description FROM pggroup AS PG ORDER BY PG.code ASC;";
			
			$result = DB_Query($dbconn, $query);
			while ($obj = DB_FetchObject($result)) {
				if ($code_selektiert != -1) {
					if ($obj->code == $code_selektiert) {
						$ret .= '<option value="' . $obj->code . '" selected="selected">' . $obj->description . '</option>';
					} else {
						$ret .= '<option value="' . $obj->code . '">' . $obj->description . '</option>';
					}
				} else {
					$ret .= '<option value="' . $obj->code . '">' . $obj->description . '</option>';
				} // end if
			} // end while ($obj = DB_FetchObject($result));
			DB_FreeResult($result);

			if ($db_conn_opt == false) {
				DB_Close($dbconn);
			} // end if ($db_conn_opt == false);
		} // end if ($dbconn != false);
		
		$ret .= '</select>';
		
		return $ret;
	} // end SELECT_PGGroup();


	function SELECT_Religion($code_selektiert = -1, $arr_option_values = NULL, $select_id = "select_religion", $select_name = "select_religion", $select_size = 1, $select_extra_code = "", $db_conn_opt = false) {
		
		$ret = '';
		$ret .= '<select id="' . $select_id . '" name="' . $select_name . '" type="select" size="' . $select_size . '" ' . $select_extra_code . '>';
		
		// Optionale DB-Verbindung aufbauen?
		$db_conn = false;
		if ($db_conn_opt != false) {
			$db_conn = $dbconn_opt;
		} else {
			$dbconn = DB_Connect_Direct();
		}
		
		if ($arr_option_values != NULL) {
			if (count($arr_option_values) > 0) {
				foreach ($arr_option_values as $key => $value) {
					if ($code_selektiert != -1) {
						if ($key == $code_selektiert) {
							$ret .= '<option value="' . $key . '" selected="selected">' . $value . '</option>';
						} else {
							$ret .= '<option value="' . $key . '">' . $value . '</option>';
						}	
					} else {
						$ret .= '<option value="' . $key . '">' . $value . '</option>';
					} // end if
				} // end foreach();
			} // end if (count)
		} // end if ($arr_option_values != NULL);
		
		if ($dbconn != false) {
			
			$query = "SELECT R.code, R.description FROM religion AS R ORDER BY R.code ASC;";
			
			$result = DB_Query($dbconn, $query);
			while ($obj = DB_FetchObject($result)) {
				if ($code_selektiert != -1) {
					if ($obj->code == $code_selektiert) {
						$ret .= '<option value="' . $obj->code . '" selected="selected">' . $obj->description . '</option>';
					} else {
						$ret .= '<option value="' . $obj->code . '">' . $obj->description . '</option>';
					}
				} else {
					$ret .= '<option value="' . $obj->code . '">' . $obj->description . '</option>';
				} // end if
			} // end while ($obj = DB_FetchObject($result));
			DB_FreeResult($result);

			if ($db_conn_opt == false) {
				DB_Close($dbconn);
			} // end if ($db_conn_opt == false);
		} // end if ($dbconn != false);
		
		$ret .= '</select>';
		
		return $ret;
	} // end SELECT_Religion();

	function SELECT_Nationality($nationality_selektiert = -1, $arr_option_values = NULL, $select_id = "select_nationality", $select_name = "select_nationality", $select_size = 1, $select_extra_code = "", $db_conn_opt = false) {
		
		$ret = '';
		$ret .= '<select id="' . $select_id . '" name="' . $select_name . '" type="select" size="' . $select_size . '" ' . $select_extra_code . '>';
		
		// Optionale DB-Verbindung aufbauen?
		$db_conn = false;
		if ($db_conn_opt != false) {
			$db_conn = $dbconn_opt;
		} else {
			$dbconn = DB_Connect_Direct();
		}
		
		if ($arr_option_values != NULL) {
			if (count($arr_option_values) > 0) {
				foreach ($arr_option_values as $key => $value) {
					if ($nationality_selektiert != -1) {
						if ($key == $nationality_selektiert) {
							$ret .= '<option value="' . $key . '" selected="selected">' . $value . '</option>';
						} else {
							$ret .= '<option value="' . $key . '">' . $value . '</option>';
						}	
					} else {
						$ret .= '<option value="' . $key . '">' . $value . '</option>';
					} // end if
				} // end foreach();
			} // end if (count)
		} // end if ($arr_option_values != NULL);
		
		if ($dbconn != false) {
			
			$query = "SELECT N.nationality, N.Name FROM nationality AS N ORDER BY N.nationality ASC;";
			
			$result = DB_Query($dbconn, $query);
			while ($obj = DB_FetchObject($result)) {
				if ($nationality_selektiert != -1) {
					if ($obj->nationality == $nationality_selektiert) {
						$ret .= '<option value="' . $obj->nationality . '" selected="selected">' . $obj->Name . '</option>';
					} else {
						$ret .= '<option value="' . $obj->nationality . '">' . $obj->Name . '</option>';
					}
				} else {
					$ret .= '<option value="' . $obj->nationality . '">' . $obj->Name . '</option>';
				} // end if
			} // end while ($obj = DB_FetchObject($result));
			DB_FreeResult($result);

			if ($db_conn_opt == false) {
				DB_Close($dbconn);
			} // end if ($db_conn_opt == false);
		} // end if ($dbconn != false);
		
		$ret .= '</select>';
		
		return $ret;
	} // end SELECT_Nationality();


	function SELECT_StartYear($startyear_selektiert = -1, $arr_option_values = NULL, $select_id = "select_startyear", $select_name = "select_startyear", $select_size = 1, $select_extra_code = "", $db_conn_opt = false) {
		
		$ret = '';
		$ret .= '<select id="' . $select_id . '" name="' . $select_name . '" type="select" size="' . $select_size . '" ' . $select_extra_code . '>';
		
		// Optionale DB-Verbindung aufbauen?
		$db_conn = false;
		if ($db_conn_opt != false) {
			$db_conn = $dbconn_opt;
		} else {
			$dbconn = DB_Connect_Direct();
		}
		
		if ($arr_option_values != NULL) {
			if (count($arr_option_values) > 0) {
				foreach ($arr_option_values as $key => $value) {
					if ($startyear_selektiert != -1) {
						if ($key == $startyear_selektiert) {
							$ret .= '<option value="' . $key . '" selected="selected">' . $value . '</option>';
						} else {
							$ret .= '<option value="' . $key . '">' . $value . '</option>';
						}	
					} else {
						$ret .= '<option value="' . $key . '">' . $value . '</option>';
					} // end if
				} // end foreach();
			} // end if (count)
		} // end if ($arr_option_values != NULL);
		
		if ($dbconn != false) {
			
			$query = "SELECT N.years FROM startyear AS N ORDER BY N.years DESC;";
			
			$result = DB_Query($dbconn, $query);
			while ($obj = DB_FetchObject($result)) {
				if ($startyear_selektiert != -1) {
					if ($obj->years == $startyear_selektiert) {
						$ret .= '<option value="' . $obj->years . '" selected="selected">' . $obj->years . '</option>';
					} else {
						$ret .= '<option value="' . $obj->years . '">' . $obj->years . '</option>';
					}
				} else {
					$ret .= '<option value="' . $obj->years . '">' . $obj->years . '</option>';
				} // end if
			} // end while ($obj = DB_FetchObject($result));
			DB_FreeResult($result);

			if ($db_conn_opt == false) {
				DB_Close($dbconn);
			} // end if ($db_conn_opt == false);
		} // end if ($dbconn != false);
		
		$ret .= '</select>';
		
		return $ret;
	} // end SELECT_StartYear();


	function SELECT_YearGroup ($yeargroup_selektiert = -1, $arr_option_values = NULL, $select_id = "select_yeargroup", $select_name = "select_yeargroup", $select_size = 1, $select_extra_code = "", $db_conn_opt = false) {
		
		$ret = '';
		$ret .= '<select id="' . $select_id . '" name="' . $select_name . '" type="select" size="' . $select_size . '" ' . $select_extra_code . '>';
		
		// Optionale DB-Verbindung aufbauen?
		$db_conn = false;
		if ($db_conn_opt != false) {
			$db_conn = $dbconn_opt;
		} else {
			$dbconn = DB_Connect_Direct();
		}
		
		if ($arr_option_values != NULL) {
			if (count($arr_option_values) > 0) {
				foreach ($arr_option_values as $key => $value) {
					if ($yeargroup_selektiert != -1) {
						if ($key == $yeargroup_selektiert) {
							$ret .= '<option value="' . $key . '" selected="selected">' . $value . '</option>';
						} else {
							$ret .= '<option value="' . $key . '">' . $value . '</option>';
						}	
					} else {
						$ret .= '<option value="' . $key . '">' . $value . '</option>';
					} // end if
				} // end foreach();
			} // end if (count)
		} // end if ($arr_option_values != NULL);
		
		if ($dbconn != false) {
			
			$query = "SELECT N.yeargroup, N.description FROM yeargroup AS N ORDER BY N.yeargroup DESC;";
			
			$result = DB_Query($dbconn, $query);
			while ($obj = DB_FetchObject($result)) {
				if ($yeargroup_selektiert != -1) {
					if ($obj->yeargroup == $yeargroup_selektiert) {
						$ret .= '<option value="' . $obj->yeargroup . '" selected="selected">' . $obj->description . '</option>';
					} else {
						$ret .= '<option value="' . $obj->yeargroup . '">' . $obj->description . '</option>';
					}
				} else {
					$ret .= '<option value="' . $obj->yeargroup . '">' . $obj->description . '</option>';
				} // end if
			} // end while ($obj = DB_FetchObject($result));
			DB_FreeResult($result);

			if ($db_conn_opt == false) {
				DB_Close($dbconn);
			} // end if ($db_conn_opt == false);
		} // end if ($dbconn != false);
		
		$ret .= '</select>';
		
		return $ret;
	} // end SELECT_YearGroup();


	function SELECT_SubjectCode ($subjectcode_selektiert = -1, $arr_option_values = NULL, $select_id = "select_subjectcode", $select_name = "select_subjectcode", $select_size = 1, $select_extra_code = "", $db_conn_opt = false) {
		
		$ret = '';
		$ret .= '<select id="' . $select_id . '" name="' . $select_name . '" type="select" size="' . $select_size . '" ' . $select_extra_code . '>';
		
		// Optionale DB-Verbindung aufbauen?
		$db_conn = false;
		if ($db_conn_opt != false) {
			$db_conn = $dbconn_opt;
		} else {
			$dbconn = DB_Connect_Direct();
		}
		
		if ($arr_option_values != NULL) {
			if (count($arr_option_values) > 0) {
				foreach ($arr_option_values as $key => $value) {
					if ($subjectcode_selektiert != -1) {
						if ($key == $subjectcode_selektiert) {
							$ret .= '<option value="' . $key . '" selected="selected">' . $value . '</option>';
						} else {
							$ret .= '<option value="' . $key . '">' . $value . '</option>';
						}	
					} else {
						$ret .= '<option value="' . $key . '">' . $value . '</option>';
					} // end if
				} // end foreach();
			} // end if (count)
		} // end if ($arr_option_values != NULL);
		
		if ($dbconn != false) {
			
			$query = "SELECT S.pkey, S.description FROM subjects AS S ORDER BY S.pkey ASC;";
			
			$result = DB_Query($dbconn, $query);
			while ($obj = DB_FetchObject($result)) {
				if ($subjectcode_selektiert != -1) {
					if ($obj->pkey == $subjectcode_selektiert) {
						$ret .= '<option value="' . $obj->pkey . '" selected="selected">' . $obj->description . '</option>';
					} else {
						$ret .= '<option value="' . $obj->pkey . '">' . $obj->description . '</option>';
					}
				} else {
					$ret .= '<option value="' . $obj->pkey . '">' . $obj->description . '</option>';
				} // end if
			} // end while ($obj = DB_FetchObject($result));
			DB_FreeResult($result);

			if ($db_conn_opt == false) {
				DB_Close($dbconn);
			} // end if ($db_conn_opt == false);
		} // end if ($dbconn != false);
		
		$ret .= '</select>';
		
		return $ret;
	} // end SELECT_SubjectSet();


	function SELECT_SubjectSet ($subjectset_selektiert = -1, $arr_option_values = NULL, $select_id = "select_subjectset", $select_name = "select_subjectset", $select_size = 1, $select_extra_code = "", $db_conn_opt = false) {
		
		$ret = '';
		$ret .= '<select id="' . $select_id . '" name="' . $select_name . '" type="select" size="' . $select_size . '" ' . $select_extra_code . '>';
		
		// Optionale DB-Verbindung aufbauen?
		$db_conn = false;
		if ($db_conn_opt != false) {
			$db_conn = $dbconn_opt;
		} else {
			$dbconn = DB_Connect_Direct();
		}
		
		if ($arr_option_values != NULL) {
			if (count($arr_option_values) > 0) {
				foreach ($arr_option_values as $key => $value) {
					if ($subjectset_selektiert != -1) {
						if ($key == $subjectset_selektiert) {
							$ret .= '<option value="' . $key . '" selected="selected">' . $value . '</option>';
						} else {
							$ret .= '<option value="' . $key . '">' . $value . '</option>';
						}	
					} else {
						$ret .= '<option value="' . $key . '">' . $value . '</option>';
					} // end if
				} // end foreach();
			} // end if (count)
		} // end if ($arr_option_values != NULL);
		
		if ($dbconn != false) {
			
			$query = "SELECT S.pkey, S.description FROM subjectset AS S ORDER BY S.pkey ASC;";
			
			$result = DB_Query($dbconn, $query);
			while ($obj = DB_FetchObject($result)) {
				if ($subjectset_selektiert != -1) {
					if ($obj->pkey == $subjectset_selektiert) {
						$ret .= '<option value="' . $obj->pkey . '" selected="selected">' . $obj->description . '</option>';
					} else {
						$ret .= '<option value="' . $obj->pkey . '">' . $obj->description . '</option>';
					}
				} else {
					$ret .= '<option value="' . $obj->pkey . '">' . $obj->description . '</option>';
				} // end if
			} // end while ($obj = DB_FetchObject($result));
			DB_FreeResult($result);

			if ($db_conn_opt == false) {
				DB_Close($dbconn);
			} // end if ($db_conn_opt == false);
		} // end if ($dbconn != false);
		
		$ret .= '</select>';
		
		return $ret;
	} // end SELECT_SubjectSet();


	function SELECT_term ($term_selektiert = -1, $arr_option_values = NULL, $select_id = "select_term", $select_name = "select_term", $select_size = 1, $select_extra_code = "", $db_conn_opt = false, $open_academic = false, $open_finance = false) {
		
		$ret = '';
		$ret .= '<select id="' . $select_id . '" name="' . $select_name . '" type="select" size="' . $select_size . '" ' . $select_extra_code . '>';
		
		// Optionale DB-Verbindung aufbauen?
		$db_conn = false;
		if ($db_conn_opt != false) {
			$db_conn = $dbconn_opt;
		} else {
			$dbconn = DB_Connect_Direct();
		}
		
		if ($arr_option_values != NULL) {
			if (count($arr_option_values) > 0) {
				foreach ($arr_option_values as $key => $value) {
					if ($term_selektiert != -1) {
						if ($key == $term_selektiert) {
							$ret .= '<option value="' . $key . '" selected="selected">' . $value . '</option>';
						} else {
							$ret .= '<option value="' . $key . '">' . $value . '</option>';
						}	
					} else {
						$ret .= '<option value="' . $key . '">' . $value . '</option>';
					} // end if
				} // end foreach();
			} // end if (count)
		} // end if ($arr_option_values != NULL);
		
		if ($dbconn != false) {

			$query_where = " WHERE (1=1) ";
			if ($open_academic == true) { $query_where .= " AND (T.openedacademic = 1) "; }
        	if ($open_finance == true) { $query_where .= " AND (T.openedfinance = 1) "; }
			
			$query = "SELECT * FROM terms AS T " . $query_where . " ORDER BY term DESC;";

			$result = DB_Query($dbconn, $query);
			while ($obj = DB_FetchObject($result)) {
				if ($term_selektiert != -1) {
					if ($obj->term == $term_selektiert) {
						$ret .= '<option value="' . $obj->term . '" lockedaca="' . $obj->lockedacademic . '" lockedfin="' . $obj->lockedfinance . '" openedaca="' . $obj->openedacademic . '" openedfin="' . $obj->openedfinance . '" selected="selected">' . $obj->description . '</option>';
					} else {
						$ret .= '<option value="' . $obj->term . '" lockedaca="' . $obj->lockedacademic . '" lockedfin="' . $obj->lockedfinance . '" openedaca="' . $obj->openedacademic . '" openedfin="' . $obj->openedfinance . '">' . $obj->description . '</option>';
					}
				} else {
					$ret .= '<option value="' . $obj->term . '" lockedaca="' . $obj->lockedacademic . '" lockedfin="' . $obj->lockedfinance . '" openedaca="' . $obj->openedacademic . '" openedfin="' . $obj->openedfinance . '">' . $obj->description . '</option>';
				} // end if
			} // end while ($obj = DB_FetchObject($result));
			DB_FreeResult($result);

			if ($db_conn_opt == false) {
				DB_Close($dbconn);
			} // end if ($db_conn_opt == false);
		} // end if ($dbconn != false);
		
		$ret .= '</select>';
		
		return $ret;
	} // end SELECT_term();

	function SELECT_Student_term ($term_selektiert = -1, $arr_option_values = NULL, $select_id = "select_term", $select_name = "select_term", $select_size = 1, $select_extra_code = "", $db_conn_opt = false, $student_id) {
		
		$ret = '';
		$ret .= '<select id="' . $select_id . '" name="' . $select_name . '" type="select" size="' . $select_size . '" ' . $select_extra_code . '>';
		
		// Optionale DB-Verbindung aufbauen?
		$db_conn = false;
		if ($db_conn_opt != false) {
			$db_conn = $dbconn_opt;
		} else {
			$dbconn = DB_Connect_Direct();
		}
		
		if ($arr_option_values != NULL) {
			if (count($arr_option_values) > 0) {
				foreach ($arr_option_values as $key => $value) {
					if ($term_selektiert != -1) {
						if ($key == $term_selektiert) {
							$ret .= '<option value="' . $key . '" selected="selected">' . $value . '</option>';
						} else {
							$ret .= '<option value="' . $key . '">' . $value . '</option>';
						}	
					} else {
						$ret .= '<option value="' . $key . '">' . $value . '</option>';
					} // end if
				} // end foreach();
			} // end if (count)
		} // end if ($arr_option_values != NULL);
		
		if ($dbconn != false) {
			
			$query = "SELECT DISTINCT S.term, 'ST' AS classtype, T.description FROM studentsubjects AS S INNER JOIN terms AS T ON  S.term = T.term WHERE S.id = '" . $student_id . "' ";
			$query .= "UNION SELECT DISTINCT PGS.term AS term, 'PG' AS classtype, T.description FROM pgstudenttopics AS PGS INNER JOIN terms AS T ON ";
			$query .= "PGS.term = T.term WHERE PGS.id = '" . $student_id . "' ORDER BY term ASC";

			$result = DB_Query($dbconn, $query);
			while ($obj = DB_FetchObject($result)) {
				if ($term_selektiert != -1) {
					if ($obj->term == $term_selektiert) {
						$ret .= '<option value="' . $obj->term . '" classtype="' . $obj->classtype . '" selected="selected">' . $obj->description . '</option>';
					} else {
						$ret .= '<option value="' . $obj->term . '" classtype="' . $obj->classtype . '">' . $obj->description . '</option>';
					}
				} else {
					$ret .= '<option value="' . $obj->term . '" classtype="' . $obj->classtype . '">' . $obj->description . '</option>';
				} // end if
			} // end while ($obj = DB_FetchObject($result));
			DB_FreeResult($result);

			if ($db_conn_opt == false) {
				DB_Close($dbconn);
			} // end if ($db_conn_opt == false);
		} // end if ($dbconn != false);
		
		$ret .= '</select>';
		
		return $ret;
	} // end SELECT_Student_term();




	function Print_Notification ($message='', $type='alert') {//primary: alert, secondary, warning, success, info
		
		$ret = '';
		switch ($type) {
			case 'primary':
				$ret .= '<div data-closable class="callout alert-callout-border primary radius">';
				$ret .= '  <strong>Whoops!</strong> - '. $message . '.';
				$ret .= '  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>';
				$ret .= '    <span aria-hidden="true">&times;</span>';
				$ret .= '  </button>';
				$ret .= '</div>';
				break;
		
			case 'secondary':
				$ret .= '<div data-closable class="callout alert-callout-border secondary radius">';
				$ret .= '  <strong>Mistake</strong> - '. $message . '.';
				$ret .= '  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>';
				$ret .= '    <span aria-hidden="true">&times;</span>';
				$ret .= '  </button>';
				$ret .= '</div>';
				break;
		
			case 'alert':
				$ret .= '<div data-closable class="callout alert-callout-border alert radius">';
				$ret .= '  <strong>Error</strong> - '. $message . '.';
				$ret .= '  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>';
				$ret .= '    <span aria-hidden="true">&times;</span>';
				$ret .= '  </button>';
				$ret .= '</div>';
				break;
		
			case 'success':
				$ret .= '<div data-closable class="callout alert-callout-border success radius">';
				$ret .= '  <strong>Yay!</strong> - '. $message . '.';
				$ret .= '  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>';
				$ret .= '    <span aria-hidden="true">&times;</span>';
				$ret .= '  </button>';
				$ret .= '</div>';
				break;
		
			case 'warning':
				$ret .= '<div data-closable class="callout alert-callout-border warning radius">';
				$ret .= '  <strong>Caution</strong> - '. $message . '.';
				$ret .= '  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>';
				$ret .= '    <span aria-hidden="true">&times;</span>';
				$ret .= '  </button>';
				$ret .= '</div>';
				break;

			default:
				$ret .= '<div data-closable class="callout alert-callout-border radius">';
				$ret .= '  <strong>Oops</strong> - '. $message . '.';
				$ret .= '  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>';
				$ret .= '    <span aria-hidden="true">&times;</span>';
				$ret .= '  </button>';
				$ret .= '</div>';
				break;
				break;
		}

		$ret .= '';

		return $ret;
		
	} // Print_Notification ()



}// end ClassUtil
