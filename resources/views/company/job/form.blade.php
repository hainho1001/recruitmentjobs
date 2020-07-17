<div class="row">
	<div class="col-12">
		<div class="form-group">
			<strong>Chức Danh : </strong>
			{!! Form::text('title',null, ['placeholder'=>'Title', 'class'=>'form-control' ]) !!}
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Cấp Bậc : </strong>
			{!! Form::text('level',null, ['placeholder'=>'Level', 'class'=>'form-control' ]) !!}
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Ngành Nghề : </strong>
			{!! Form::text('career',null, ['placeholder'=>'Career', 'class'=>'form-control' ]) !!}
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Địa Điểm Làm Việc : </strong>
			{!! Form::text('address',null, ['placeholder'=>'Address', 'class'=>'form-control' ]) !!}
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Mức Lương : </strong>
			{!! Form::text('salary',null, ['placeholder'=>'Salary', 'class'=>'form-control' ]) !!}
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Mô Tả : </strong>
			{!! Form::textarea('description',null, ['placeholder'=>'Description', 'class'=>'form-control', 'style' => 'height:200px' ]) !!}
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Yêu Cầu Công Việc : </strong>
			{!! Form::textarea('requirements',null, ['placeholder'=>'Requirements', 'class'=>'form-control', 'style' => 'height:200px' ]) !!}
		</div>
	</div>
	<div class="col-12 text-center">
		<a class="btn btn-xs btn-primary" href="{{ route('jobs.index') }}">Quay lại</a>
		{!!Form::submit('Lưu', ['class' => 'btn company_btn'])!!}
	</div>
</div>
