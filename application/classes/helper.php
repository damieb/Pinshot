<?php
class helper
{

	//Récupère des informations
	public static function info($model,$column,$value,$type,$count = NULL){
		if($type == 1)
		{
			$res = ORM::factory($model)->where($column, '=', $value)->find_all();
			if($count == TRUE)
			{
				$res = ORM::factory($model)->where($column, '=', $value)->find_all()->count();
			}
		}
		if($type == 2)
		{
			$res = ORM::factory($model)->where($column, '=', $value)->find();
		}

		return $res;
	}

	//Suppression d'un dossier de manière récursive
	public static function delDIR($dir) { 
	   	$files = array_diff(scandir($dir), array('.','..')); 
	    foreach ($files as $file) { 
	      (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file"); 
    } 
    return rmdir($dir); 
  } 

  	//Pagination
  	public static function pagin($perPage, $nbr_res , $curPage = NULL){

		if($curPage == NULL)
		{
			$curPage = 1;
		}

		$nbPage = ceil($nbr_res/$perPage);
		$totalPage = array();

			for($i = 1; $i <= $nbPage; $i++)
			{
				if($i >= $curPage -4 && $i <= $curPage +4)
				{
					$totalPage[] = $i;
				}
			}

			return $totalPage;
  	}

}
?>