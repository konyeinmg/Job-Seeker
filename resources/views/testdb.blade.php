<html>
<body>
	@foreach($data as $data)
	Name:{{$data->name}}<br>
	Email:{{$data->email}}<br>
	NRC:{{$data->nrc}}<br>
	FatherName:{{$data->fathername}}<br>
	Age:{{$data->age}}<br>
	Address:{{$data->address}}<br>
	Role:{{$data->role}}<br>
	HourlyRate:{{$data->hourlyrate}}<br>
	Description:{{$data->description}}<br><br>
	
	<?php
	$array = array(
	 'C++' => $data->skillConnect->cdoubleplus,
	 'Java' => $data->skillConnect->java,
	 'Html' => $data->skillConnect->html,
	 'CSS' => $data->skillConnect->css,
	 'JQuery' => $data->skillConnect->jquery,
	 'JavaScript' => $data->skillConnect->javascript,
	 'Bootstrap' => $data->skillConnect->bootstrap,
	 'C#' => $data->skillConnect->csharp,
	 'J2ee' => $data->skillConnect->j2ee,
	 'Python' => $data->skillConnect->python,
	 'Android' => $data->skillConnect->android,
	 'PHP' => $data->skillConnect->php,
	 'C' => $data->skillConnect->c,
	 'MySql' => $data->skillConnect->mysql,
	 'NoSql' => $data->skillConnect->nosql,
	 'Oracle' => $data->skillConnect->oracle,
	 'Bigdata' => $data->skillConnect->bigdata,
	 'AI' => $data->skillConnect->ai,
	 'Networking' => $data->skillConnect->networking,
	 'Accounting' => $data->skillConnect->accounting,
	 'Marketing' => $data->skillConnect->marketing,
	 'Adobephotoshot' => $data->skillConnect->adobephotoshot 
	);


	 ?>


	@foreach($array as $key=>$value)
	@if($value != 0)
	{{$key}}:{{$value}}<br>
	@endif
	@endforeach
	<br>


	@foreach($data->educationConnect as $d)
	Degree:{{$d->degree}}<br>
	University:{{$d->university}}<br>
	@endforeach
	<br>



	@foreach($data->workConnect as $d)
	Company:{{$d->company}}<br>
	Role:{{$d->role}}<br>
	HourlyRate:{{$d->hourlyrate}}<br>
	@endforeach
	@endforeach
</body>
</html>