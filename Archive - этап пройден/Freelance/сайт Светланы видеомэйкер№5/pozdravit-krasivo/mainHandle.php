<?php 
require "../../serverParts/db.php";
$data = $_POST;
$numberOfElements = count(R::findAll("main_page_portfolio"));
if(isset($data["do_login"])) {
   $errors = []; 
   $user = R::findOne("admin", "login = ?", [$data["login"]]);
   if ($user) {
      if (md5($data["password"]) == $user->password) {
			@$_SESSION["AdminPassword"] = $user->password;
			@$_SESSION["AdminLogin"] = $user->login;
      } else {
				array_unshift($errors, "Неверный пароль");
      }
   } else {
			array_unshift($errors, "Неверный логин");
   }
   if( !empty($errors)) {
      echo "<div style=\"color: red; text-align: center; background-color: #333333; padding-bottom: 30px\">".array_shift($errors)."</div>";
   }
}
//deleting items
for ($i = 1; $i <= $numberOfElements; $i++) {
	if(isset($data["deleteBox".$i]) && ((@$_SESSION["AdminPassword"] == $sessionUser->password) && (@$_SESSION["AdminLogin"] == $sessionUser->login))) {
		R::exec( 'UPDATE main_page_portfolio SET deleted="1" WHERE id = '.$i.'' );
	} 
	// for reseting all deleted items ↓
	// R::exec( 'UPDATE main_page_portfolio SET deleted="0" WHERE id = '.$i.'' );

	//updating element
	if(isset($data["do_edit".$i])) {
		if((@$_SESSION["AdminPassword"] == $sessionUser->password) && (@$_SESSION["AdminLogin"] == $sessionUser->login)) {

			if (preg_match('/image/i', $_FILES["image"]["type"])) {
				$path = "../adminImages/".time().$_FILES["image"]["name"]."";
				move_uploaded_file($_FILES["image"]["tmp_name"], $path);
				R::exec( 'UPDATE main_page_portfolio SET image= "'.$path.'" WHERE id = '.$i.'' );
			}
			if ($data["youtube"] != "") {
				R::exec( 'UPDATE main_page_portfolio SET utube_link= "'.$data["youtube"].'" WHERE id = '.$i.'' );
			}
			if ($data["title"] != "") {
				R::exec( 'UPDATE main_page_portfolio SET title= "'.$data["title"].'" WHERE id = '.$i.'' );
			}
			if ($data["tag"] != "") {
				R::exec( 'UPDATE main_page_portfolio SET tag= "'.$data["tag"].'" WHERE id = '.$i.'' );
			}
		} 
	}
}
//adding new element
if(isset($data["addNew"])) {
	if((@$_SESSION["AdminPassword"] == $sessionUser->password) && (@$_SESSION["AdminLogin"] == $sessionUser->login)) {
		$count = 0;
		if (preg_match('/image/i', $_FILES["image"]["type"])) {
			$path = "../adminImages/".time().$_FILES["image"]["name"]."";
			move_uploaded_file($_FILES["image"]["tmp_name"], $path);
			
		} else {
			$count += 1;
		}
		if ($data["youtube"] == "") {
			$count += 1;
		}
		if ($data["title"] == "") {
			$count += 1;
		}
		if ($data["tag"] == "") {
			$count += 1;
		}
		if ($count == 0) {
			R::exec('INSERT INTO `main_page_portfolio` (`id`, `image`, `title`, `tag`, `utube_link`, `deleted`) VALUES (NULL, \''.$path.'\', \''.$data["title"].'\', \''.$data["tag"].'\', \''.$data["youtube"].'\', \'0\')');
		}
	}
}
header('Location: /goBack.php');

?>