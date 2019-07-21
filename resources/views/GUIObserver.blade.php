@extends('templates.hadiyah')
@section('title')
مشرف ميداني.
@endsection
@section('pageTitle')
 هدية الحاج والمتعتمر
@endsection
@section('content')
	  <div class="observerMenu">
			<ul>
				<li>
				<button class="btn" onclick="" type="submit">تعبئة النموذج</button>
			</li>
			<li>
			  <button class="btn" onclick="document.getElementById('prevForms').style.display='block'">استعراض النماذج المعبأه</button>
			</li>
			</ul>
		</div>
		</br>
		<center id="prevForms">
			<table width="50%" class="prevForms">
				<thead>
					<th>
						<th>
							تعديل
						</th>
						<th>
							تاريخ التعبئة
						</th>
						<th>
							اسم النموذج
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan="2">
							test
						</td>
						<td>
							tedt
						</td>
						<td>
							test
						</td>
					</tr>
					<tr>
						<td colspan="2">
							test
						</td>
						<td>
							tedt
						</td>
						<td>
							test
						</td>
					</tr>
					<tr>
						<td colspan="2">
							test
						</td>
						<td>
							tedt
						</td>
						<td>
							test
						</td>
					</tr>
					<tr>
						<td colspan="2">
							test
						</td>
						<td>
							tedt
						</td>
						<td>
							test
						</td>
					</tr>
				</tbody>
			</table>
		</center>
	</br>
@endsection
