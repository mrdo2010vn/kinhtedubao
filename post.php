<?php 
	include_once 'authentication.php';
	$page_title = 'Trang chủ';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<link rel="stylesheet" href="./css/bootstrap.min.css" />
	<link rel="stylesheet" href="./css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="./css/font-awesome.min.css" />
	<link rel="stylesheet" href="./css/style.css" />
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse">
			<ul class="nav navbar-nav">
				<li><a href="#">Trang chủ</a></li>
				<li><a href="#">Account</a></li>
				<li><a href="#">Article</a></li>
			</ul>
		</nav>
		<div class="col-md-3"></div>
		<div class="col-md-9">
			<div class="page-header">
				<h1 class="text-center">Danh sách bài viết</h1>
			</div>
			
			<div class="search-box row">
				<div class="col-md-6">
					<form action="#" method="get" class="form-inline">
						<div class="input-group">
							<input type="text" name="search" class="form-control" />
							<span class="input-group-btn">
								<button type="submit" class="btn btn-default">
									<span class="fa fa-search"></span>
								</button>
							</span>
						</div>
					</form>
				</div>
				
				<div class="col-md-1 col-md-offset-5">
					<a href="#" title="creat new"><button type="button" class="btn btn-primary btn-xs">
						<span class="fa fa-pencil fa-2x"></span>
					</button></a>
				</div>
			</div>
			
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>STT</th>
							<th>Title</th>
							<th>Description</th>
							<th>Public date</th>
							<th>Category</th>
							<th>Edit</th>
						</tr>
					</thead>
						<tbody>
							<tr>
								<td>abc</td>
								<td>abc</td>
								<td>abc</td>
								<td>abc</td>
								<td>abc</td>
								<td><a href="#" title="edit"><span class="fa fa-edit fa-2x"></span></a></td>
							</tr>
							<tr>
								<td>abc</td>
								<td>abc</td>
								<td>abc</td>
								<td>abc</td>
								<td>abc</td>
								<td><a href="#"title="edit"><span class="fa fa-edit fa-2x"></span></a></td>
							</tr>
							<tr>
								<td>abc</td>
								<td>abc</td>
								<td>abc</td>
								<td>abc</td>
								<td>abc</td>
								<td><a href="#" title="edit"><span class="fa fa-edit fa-2x"></span></a></td>
							</tr>
						</tbody>
				</table>

			<div class="col-md-4 col-md-offset-8">
			<ul class="pagination">
				<li><a href="#">&laquo;</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">&raquo;</a></li>
			</ul>
			</div>
		</div>
	</div>
</body>
</html>