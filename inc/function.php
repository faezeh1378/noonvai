 <?php 

include("mydb.php");

//get categories

	function getCat(){
		global $db; //اتصال به دیتا بیس

		$query = "SELECT * FROM `categories`";
		$sql = mysqli_query($db, $query);

		while ($rows = mysqli_fetch_array($sql)) {
			$cat_id = $rows['cat_id'];
			$cat_title = $rows['cat_title'];
			echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
		}



	}

//get brands
	function getBrand(){
		global $db;

		$query = "SELECT * FROM `brands`";
		$sql = mysqli_query($db, $query);

		while ($rows = mysqli_fetch_array($sql)) {
			$brand_id = $rows['brand_id'];
			$brand_title = $rows['brand_title'];
			echo "<li><a href='index.php?brand=$brand_id'>$brand_title</a></li>";

		}
	}

//GET PRODUCTS
	function getPro(){
		global $db;
		if(!isset($_GET['cat'])){
			if(!isset($_GET['brand'])){

				$query = "SELECT * FROM `products` ORDER BY pro_id DESC";
				$sql = mysqli_query($db, $query);

				while ($rows = mysqli_fetch_array($sql)) {
					$pro_id = $rows['pro_id'];
					$pro_cat = $rows['pro_cat'];
					$pro_brand = $rows['pro_brand'];
					$pro_title = $rows['pro_title'];
					$pro_desc = $rows['pro_desc'];
					$pro_thumb = $rows['pro_thumb'];
					$pro_price = $rows['pro_price'];
					$pro_tags = $rows['pro_tags'];

					echo "<div class='col-md-4'><div class='thumbnail'>
                        <img src='admin/images/$pro_thumb' class='img-responsive'>
                        <div class='caption'>
                           <h6 class='pull-left'>$pro_price <small class='text-info'>ریال</small></h6>
                            <h6 class='text-primary'>$pro_title</h6>
                            <p>$pro_desc</p>
                        </div>
                        <a href=''class='btn btn-info btn-block'>افزودن به سبد خرید </a>
                    </div></div>";
				}

			}
		}
	}



	//get catpro
	function getCatPro(){
		global $db;
		if(isset($_GET['cat'])){
			$get_cat = $_GET['cat'];
			$query = "SELECT * FROM products WHERE pro_cat = '$get_cat'";
			$sql = mysqli_query($db, $query);
			$count = mysqli_num_rows($sql);
			if($count == 0){
				echo "در این دسته محصولی موجود نیست.";
			}
			while ($rows = mysqli_fetch_array($sql)) {
					$pro_id = $rows['pro_id'];
					$pro_cat = $rows['pro_cat'];
					$pro_brand = $rows['pro_brand'];
					$pro_title = $rows['pro_title'];
					$pro_desc = $rows['pro_desc'];
					$pro_thumb = $rows['pro_thumb'];
					$pro_price = $rows['pro_price'];
					$pro_tags = $rows['pro_tags'];

					echo "<div class='col-md-4'><div class='thumbnail'>
                        <img src='admin/images/$pro_thumb' class='img-responsive'>
                        <div class='caption'>
                           <h6 class='pull-left'>$pro_price <small class='text-info'>ریال</small></h6>
                            <h6 class='text-primary'>$pro_title</h6>
                            <p>$pro_desc</p>
                        </div>
                        <a href=''class='btn btn-info btn-block'> فزودن به سبد خرید  </a>
                    </div></div>";			
			}

		}
	}


		//get brandpro
	function getBrandPro(){
		global $db;
		if(isset($_GET['brand'])){
			$get_brand = $_GET['brand'];
			$query = "SELECT * FROM products WHERE pro_brand = '$get_brand'";
			$sql = mysqli_query($db, $query);
			$count = mysqli_num_rows($sql);
			if($count == 0){
				echo "در این برند محصولی موجود نیست.";
			}
			while ($rows = mysqli_fetch_array($sql)) {
					$pro_id = $rows['pro_id'];
					$pro_cat = $rows['pro_cat'];
					$pro_brand = $rows['pro_brand'];
					$pro_title = $rows['pro_title'];
					$pro_desc = $rows['pro_desc'];
					$pro_thumb = $rows['pro_thumb'];
					$pro_price = $rows['pro_price'];
					$pro_tags = $rows['pro_tags'];

					echo "<div class='col-md-4'><div class='thumbnail'>
                        <img src='admin/images/$pro_thumb' class='img-responsive'>
                        <div class='caption'>
                           <h6 class='pull-left'>$pro_price <small class='text-info'>ریال</small></h6>
                            <h6 class='text-primary'>$pro_title</h6>
                            <p>$pro_desc</p>
                        </div>
                        <a href=''class='btn btn-info btn-block'> افزودن به سبد خرید  </a>
                    </div></div>";			
			}

		}
	}

 ?>